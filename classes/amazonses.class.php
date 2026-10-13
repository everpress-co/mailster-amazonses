<?php
/**
 * Amazon SES delivery integration class.
 *
 * @package mailster-amazonses
 */

/**
 * Amazon SES delivery integration for Mailster.
 *
 * @since 1.0
 */
class MailsterAmazonSES {

	/**
	 * Absolute filesystem path to the plugin directory.
	 *
	 * @since 1.0
	 *
	 * @var string
	 */
	private $plugin_path;

	/**
	 * URL to the plugin directory.
	 *
	 * @since 1.0
	 *
	 * @var string
	 */
	private $plugin_url;

	/**
	 * Cached AWS SES v2 client instance.
	 *
	 * @since 2.2
	 *
	 * @var \Mailster\Aws3\Aws\SesV2\SesV2Client|null
	 */
	private $aws;

	/**
	 * Map of AWS SES region codes to display names.
	 *
	 * @since 2.6
	 *
	 * @var array
	 */
	private $endpoints = array(
		'us-east-1'      => 'US East (N. Virginia)',
		'us-east-2'      => 'US East (Ohio)',
		'us-west-1'      => 'US West (N. California)',
		'us-west-2'      => 'US West (Oregon)',

		'af-south-1'     => 'Africa (Cape Town)',

		'ap-south-1'     => 'Asia Pacific (Mumbai)',
		'ap-northeast-3' => 'Asia Pacific (Osaka)',
		'ap-northeast-2' => 'Asia Pacific (Seoul)',
		'ap-southeast-1' => 'Asia Pacific (Singapore)',
		'ap-southeast-2' => 'Asia Pacific (Sydney)',
		'ap-northeast-1' => 'Asia Pacific (Tokyo)',

		'ca-central-1'   => 'Canada (Central)',

		'eu-central-1'   => 'Europe (Frankfurt)',
		'eu-west-1'      => 'Europe (Ireland)',
		'eu-west-2'      => 'Europe (London)',
		'eu-south-1'     => 'Europe (Milan)',
		'eu-west-3'      => 'Europe (Paris)',
		'eu-north-1'     => 'Europe (Stockholm)',

		'me-south-1'     => 'Middle East (Bahrain)',

		'sa-east-1'      => 'South America (São Paulo)',
	);


	/**
	 * Sets up paths, activation hooks, textdomain, and the init hook.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	public function __construct() {

		$this->plugin_path = plugin_dir_path( MAILSTER_AMAZONSES_FILE );
		$this->plugin_url  = plugin_dir_url( MAILSTER_AMAZONSES_FILE );

		register_activation_hook( MAILSTER_AMAZONSES_FILE, array( &$this, 'activate' ) );
		register_deactivation_hook( MAILSTER_AMAZONSES_FILE, array( &$this, 'deactivate' ) );

		load_plugin_textdomain( 'mailster-amazonses' );

		add_action( 'init', array( &$this, 'init' ), 1 );
	}


	/**
	 * Registers Mailster delivery hooks when Mailster is available.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	public function init() {

		if ( ! function_exists( 'mailster' ) ) {

			add_action( 'admin_notices', array( $this, 'notice' ) );

		} else {

			add_filter( 'mailster_delivery_methods', array( $this, 'delivery_method' ) );
			add_action( 'mailster_deliverymethod_tab_amazonses', array( $this, 'deliverytab' ) );

			add_filter( 'mailster_verify_options', array( $this, 'verify_options' ) );

			if ( 'amazonses' === mailster_option( 'deliverymethod' ) ) {

				add_action( 'mailster_initsend', array( $this, 'initsend' ) );
				add_action( 'mailster_presend', array( $this, 'presend' ) );
				add_action( 'mailster_dosend', array( $this, 'dosend' ) );
				add_filter( 'mailster_subscriber_errors', array( $this, 'subscriber_errors' ) );

				if ( is_admin() && isset( $_GET['mailster_amazonses_verifyemail'] ) && isset( $_GET['_wpnonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_GET['_wpnonce'] ) ), 'verify_email' ) ) {
					$this->verify_email( sanitize_email( wp_unslash( $_GET['mailster_amazonses_verifyemail'] ) ) );

					wp_safe_redirect( remove_query_arg( array( 'mailster_amazonses_verifyemail', '_wpnonce' ) ) );
					exit;
				}

				if ( isset( $_GET['mailster_amazonsns'] ) ) {
					$this->handle_sns();
				}
			}

			add_action( 'mailster_amazonses_cron', array( $this, 'getquota' ) );

		}
	}


	/**
	 * Configures PHPMailer for Amazon SES SMTP or disables DKIM for the API path.
	 *
	 * @since 1.0
	 *
	 * @param object $mailobject Mailster mail object being prepared for send.
	 * @return void
	 */
	public function initsend( $mailobject ) {

		if ( mailster_option( 'amazonses_smtp' ) ) {

			$secure = mailster_option( 'amazonses_secure' );

			$mailobject->mailer->Mailer        = 'smtp';
			$mailobject->mailer->SMTPSecure    = $secure;
			$mailobject->mailer->Host          = 'email-smtp.' . mailster_option( 'amazonses_endpoint' ) . '.amazonaws.com';
			$mailobject->mailer->Port          = ( 'tls' === $secure ) ? 587 : 465;
			$mailobject->mailer->SMTPAuth      = true;
			$mailobject->mailer->Username      = mailster_option( 'amazonses_smtp_user' );
			$mailobject->mailer->Password      = mailster_option( 'amazonses_smtp_pwd' );
			$mailobject->mailer->SMTPKeepAlive = true;

		} else {

			// Disable DKIM for the SES API path.
			$mailobject->dkim = false;
		}
	}


	/**
	 * Runs Mailster pre-send and sets bounce Return-Path for the SES API path.
	 *
	 * @since 1.0
	 *
	 * @param object $mailobject Mailster mail object before send.
	 * @return void
	 */
	public function presend( $mailobject ) {

		if ( mailster_option( 'amazonses_smtp' ) ) {

			// Use pre_send from the main class.
			$mailobject->pre_send();

		} else {

			if ( $mailobject->bouncemail ) {
				$mailobject->add_header( 'Return-Path', '<' . trim( $mailobject->bouncemail ) . '>' );
			}

			// Need the raw email body to send so we use the same option.
			$mailobject->pre_send();

		}
	}


	/**
	 * Sends the message via SMTP or the Amazon SES SendEmail API.
	 *
	 * @since 1.0
	 *
	 * @param object $mailobject Mailster mail object to send.
	 * @return void
	 */
	public function dosend( $mailobject ) {

		if ( mailster_option( 'amazonses_smtp' ) ) {

			// Use send from the main class.
			$mailobject->do_send();

		} else {

			$mailobject->mailer->PreSend();

			$data = array(
				'Content' => array(
					'Raw' => array(
						'Data' => $mailobject->mailer->GetSentMIMEMessage(),
					),
				),
			);

			$result = $this->aws( 'sendEmail', $data );

			if ( is_wp_error( $result ) ) {
				$mailobject->set_error( $result->get_error_message() );
				$mailobject->sent = false;
			} elseif ( 200 === $result->get( '@metadata' )['statusCode'] ) {
				$mailobject->sent = true;
			} else {
				$mailobject->set_error( 'unknown error' );
				$mailobject->sent = false;
			}
		}
	}


	/**
	 * Returns the SES client or calls a client method with plugin credentials.
	 *
	 * @since 2.2
	 *
	 * @param string|null $method Optional. SES client method name. Default null to return the client.
	 * @param array       $args   Optional. Arguments passed to the client method. Default empty array.
	 * @return \Mailster\Aws3\Aws\SesV2\SesV2Client|\Mailster\Aws3\Aws\Result|WP_Error Client, API result, or error.
	 */
	private function aws( $method = null, $args = array() ) {

		if ( ! $this->aws ) {

			if ( ! mailster_option( 'amazonses_access_key' ) ) {
				return new WP_Error( 'error', 'No Access key' );
			}

			if ( ! mailster_option( 'amazonses_secret_key' ) ) {
				return new WP_Error( 'error', 'No Secret key' );
			}

			require_once $this->plugin_path . 'vendor/autoload.php';

			// For PHP < 8.0 problem with the Guzzle lib.
			if ( ! function_exists( 'idn_to_ascii' ) && ! defined( 'IDNA_DEFAULT' ) ) {
				define( 'IDNA_DEFAULT', 0 );
			}

			$this->aws = new \Mailster\Aws3\Aws\SesV2\SesV2Client(
				array(
					'version'                     => '2019-09-27',
					'signature'                   => 'v4',
					'region'                      => mailster_option( 'amazonses_endpoint' ),
					'credentials'                 => array(
						'key'    => mailster_option( 'amazonses_access_key' ),
						'secret' => mailster_option( 'amazonses_secret_key' ),
					),
					'use_aws_shared_config_files' => false,
				)
			);
		}

		if ( is_null( $method ) ) {
			return $this->aws;
		}

		try {
			return call_user_func( array( $this->aws, $method ), $args );
		} catch ( \Mailster\Aws3\Aws\SesV2\Exception\SesV2Exception $e ) {
			return new WP_Error( $e->getAwsErrorCode(), $e->getAwsErrorMessage() );
		} catch ( \Exception $e ) {
			// Format error message.
			$message = esc_html( $e->getMessage() );
			$message = preg_replace( '/' . preg_quote( '&lt;ErrorResponse', '/' ) . '/', '<pre><code>&lt;ErrorResponse', $message, 1 );
			$message = preg_replace( '/' . preg_quote( '&lt;/ErrorResponse&gt;', '/' ) . '/', '&lt;/ErrorResponse&gt;</code></pre>', $message, 1 );
			return new WP_Error( 'error', $message );
		}
	}

	/**
	 * Fetches Amazon SES send quota and optionally stores Mailster send limits.
	 *
	 * @since 1.0
	 *
	 * @param bool $save Optional. Whether to update Mailster limits from the quota. Default true.
	 * @return array|WP_Error Associative limits (`sent`, `limit`, `rate`) or error.
	 */
	public function getquota( $save = true ) {

		$account = $this->aws( 'GetAccount' );

		if ( is_wp_error( $account ) ) {
			return $account;
		}

		$quota = $account->get( 'SendQuota' );

		if ( is_wp_error( $quota ) ) {
			return $quota;
		}

		$limits = array(
			'sent'  => intval( $quota['SentLast24Hours'] ),
			'limit' => intval( $quota['Max24HourSend'] ),
			'rate'  => ceil( ( 1000 / intval( $quota['MaxSendRate'] ) * 0.1 ) ),
		);

		$limits['sent'] = min( $limits['sent'], $limits['limit'] );

		if ( $save ) {
			$this->update_limits( $limits );
		}

		return $limits;
	}

	/**
	 * Adds Amazon SES-specific messages to Mailster subscriber error strings.
	 *
	 * @since 1.0
	 *
	 * @param array $errors Existing subscriber error messages.
	 * @return array Filtered error messages.
	 */
	public function subscriber_errors( $errors ) {
		$errors[] = 'Address blacklisted';
		$errors[] = 'Invalid domain name';
		$key      = array_search( 'SMTP Error: Data not accepted', $errors, true );
		if ( false !== $key ) {
			unset( $errors[ $key ] );
		}
		return $errors;
	}


	/**
	 * Registers Amazon SES as a Mailster delivery method.
	 *
	 * @since 1.0
	 *
	 * @param array $delivery_methods Existing delivery method slug => label map.
	 * @return array Delivery methods including AmazonSES.
	 */
	public function delivery_method( $delivery_methods ) {
		$delivery_methods['amazonses'] = 'AmazonSES';
		return $delivery_methods;
	}


	/**
	 * Enqueues settings script and renders the Amazon SES delivery settings tab.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	public function deliverytab() {

		wp_enqueue_script( 'mailster-amazonses-settings-script', $this->plugin_url . 'assets/js/script.js', array( 'jquery' ), MAILSTER_AMAZONSES_VERSION, true );
		$verified = mailster_option( 'amazonses_verified' );
		include $this->plugin_path . '/views/settings.php';
	}


	/**
	 * Requests SES verification for an email identity.
	 *
	 * @since 1.0
	 *
	 * @param string $emailaddress Email address to verify with Amazon SES.
	 * @return bool True when the API returns HTTP 200, false otherwise.
	 */
	public function verify_email( $emailaddress ) {

		$result = $this->aws( 'createEmailIdentity', array( 'EmailIdentity' => $emailaddress ) );

		return ! is_wp_error( $result ) && ( 200 === $result->get( '@metadata' )['statusCode'] );
	}


	/**
	 * Lists email identities registered with Amazon SES for the account.
	 *
	 * @since 1.0
	 *
	 * @return array|false Identity list on success, false on API error.
	 */
	public function list_identities() {

		$result = $this->aws( 'ListEmailIdentities' );

		if ( is_wp_error( $result ) ) {
			return false;
		}

		return $result->get( 'EmailIdentities' );
	}


	/**
	 * Validates Amazon SES options and syncs send limits when credentials work.
	 *
	 * @since 1.0
	 *
	 * @param array $options Mailster options being saved.
	 * @return array Filtered options.
	 */
	public function verify_options( $options ) {

		$timestamp = wp_next_scheduled( 'mailster_amazonses_cron' );
		if ( $timestamp ) {
			wp_unschedule_event( $timestamp, 'mailster_amazonses_cron' );
		}

		// Only if delivery method is amazonses.
		if ( 'amazonses' !== $options['deliverymethod'] ) {
			return $options;
		}

		if ( 'amazonsns' !== $options['amazonses_bouncehandling'] ) {
			delete_option( 'mailster_amazonsns_last_response' );
			unset( $options['amazonses_key'] );
		}

		if ( isset( $options['amazonses_key'] ) && empty( $options['amazonses_key'] ) ) {
			delete_option( 'mailster_amazonsns_last_response' );
			unset( $options['amazonses_key'] );
		}

		if ( mailster_option( 'amazonses_endpoint' ) !== $options['amazonses_endpoint'] ) {
			delete_option( 'mailster_amazonsns_last_response' );
			$options['amazonses_key'] = md5( uniqid() );
		}

		remove_filter( 'mailster_verify_options', array( $this, 'verify_options' ) );
		mailster_update_option( 'amazonses_access_key', $options['amazonses_access_key'], true );
		mailster_update_option( 'amazonses_secret_key', $options['amazonses_secret_key'], true );
		mailster_update_option( 'amazonses_endpoint', $options['amazonses_endpoint'], true );

		$limits = $this->getquota( false );

		if ( is_wp_error( $limits ) ) {

			add_settings_error( 'mailster_options', 'mailster_options', __( 'An error occurred:', 'mailster-amazonses' ) . '<br>' . $limits->get_error_message() );
			$options['amazonses_verified'] = false;

		} else {

			$options['amazonses_verified'] = true;

			if ( $limits && $options['amazonses_autoupdate'] ) {
				$options['send_limit']  = $limits['limit'];
				$options['send_period'] = 24;
				$options['send_delay']  = $limits['rate'];

				update_option( '_transient__mailster_send_period_timeout', $limits['sent'] > 0 );
				update_option( '_transient__mailster_send_period', $limits['sent'] );

				add_settings_error( 'mailster_options', 'mailster_options', __( 'Send limit has been adjusted to your Amazon SES limits', 'mailster-amazonses' ) );
			}
		}

		if ( $options['amazonses_autoupdate'] ) {
			if ( ! wp_next_scheduled( 'mailster_amazonses_cron' ) ) {
				wp_schedule_event( time(), 'hourly', 'mailster_amazonses_cron' );
			}
		}

		if ( function_exists( 'fsockopen' ) && $options['amazonses_smtp'] ) {
			$host = 'email-smtp.' . mailster_option( 'amazonses_endpoint' ) . '.amazonaws.com';
			$port = ( 'tls' === $options['amazonses_secure'] ) ? 587 : 465;
			// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged, WordPress.WP.AlternativeFunctions.file_system_operations_fsockopen -- Probing SMTP TCP connectivity, not WP filesystem.
			$conn = @fsockopen( $host, $port, $errno, $errstr, 5 );

			if ( is_resource( $conn ) ) {

				// phpcs:ignore WordPress.WP.AlternativeFunctions.file_system_operations_fclose -- Closing SMTP probe socket.
				fclose( $conn );

			} else {

				/* translators: %s: SMTP port number */
				add_settings_error( 'mailster_options', 'mailster_options', sprintf( __( 'Not able to use Amazon SES via SMTP cause of the blocked port %s! Please try a different connection, send without SMTP or choose a different delivery method!', 'mailster-amazonses' ), $port ) );

			}
		}

		return $options;
	}


	/**
	 * Writes Amazon SES quota values into Mailster send limit options.
	 *
	 * @since 1.0
	 *
	 * @param array $limits Quota values with `sent`, `limit`, and `rate` keys.
	 * @return void
	 */
	public function update_limits( $limits ) {
		mailster_update_option( 'send_limit', $limits['limit'] );
		mailster_update_option( 'send_period', 24 );
		mailster_update_option( 'send_delay', $limits['rate'] );

		// Always reset to 24 hours.
		update_option( '_transient__mailster_send_period_timeout', $limits['sent'] > 0 );
		update_option( '_transient__mailster_send_period', $limits['sent'] );
	}

	/**
	 * Handles Amazon SNS bounce and complaint notifications for Mailster.
	 *
	 * @since 2.0
	 *
	 * @return void
	 */
	private function handle_sns() {

		// phpcs:disable WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase -- Amazon SNS / SES JSON property names.
		// phpcs:disable WordPress.Security.NonceVerification.Recommended -- SNS authenticates via shared secret key in the query string.

		if ( ! isset( $_GET['mailster_amazonsns'] ) ) {
			return;
		}

		$sns_key = sanitize_text_field( wp_unslash( $_GET['mailster_amazonsns'] ) );

		if ( 'amazonsns' === mailster_option( 'amazonses_bouncehandling' ) && mailster_option( 'amazonses_key' ) === $sns_key ) {

			$data = file_get_contents( 'php://input' );
			if ( ! $data ) {
				wp_die( 'This page handles the Bounces and messages from Amazon SNS for Mailster.', 'Mailster Amazon SNS Endpoint' );
			}
			$obj = json_decode( $data );

			switch ( $obj->Type ) {

				case 'SubscriptionConfirmation':
					if ( false === strpos( $obj->TopicArn, mailster_option( 'amazonses_endpoint' ) ) ) {
						/* translators: 1: SNS topic ARN, 2: AWS region label */
						mailster_notice( sprintf( __( 'The SNS Topic %1$s was not created in the correct region. Please create a new topic in the region %2$s.', 'mailster-amazonses' ), '<code>' . $obj->TopicArn . '</code>', '"' . $this->endpoints[ mailster_option( 'amazonses_endpoint' ) ] . '"' ), 'error', false, 'amazonses-SubscriptionConfirmation' );
						return;
					}

					$response = wp_remote_get( $obj->SubscribeURL );
					$code     = wp_remote_retrieve_response_code( $response );
					$body     = (object) simplexml_load_string( wp_remote_retrieve_body( $response ) );
					if ( 200 === $code ) {
						/* translators: %s: SNS topic ARN */
						mailster_notice( sprintf( __( 'Mailster has successfully confirmed the Amazon SNS subscription to topic %s.', 'mailster-amazonses' ), '<code>' . $obj->TopicArn . '</code>' ), 'notice', 360, 'amazonses-SubscriptionConfirmation' );
					} else {
						/* translators: %s: SNS topic ARN */
						mailster_notice( sprintf( __( 'Mailster was not able to confirmed the Amazon SNS subscription to topic %s.', 'mailster-amazonses' ), '<code>' . $obj->TopicArn . '</code>' ) . '<br><pre>' . esc_html( print_r( $body, true ) ) . '</pre>', 'error', false, 'amazonses-SubscriptionConfirmation' ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_print_r -- Include SNS response body in admin notice.
					}
					break;

				case 'Notification':
					$message = json_decode( $obj->Message );
					if ( ! isset( $message->mail ) ) {
						break;
					}
					if ( ! isset( $message->mail->headers ) ) {
						break;
					}
					$headers = array();
					foreach ( $message->mail->headers as $header ) {
						$headers[ $header->name ] = $header->value;
					}
					if ( ! isset( $headers['X-Mailster-ID'] ) ) {
						break;
					}
					if ( mailster_option( 'ID' ) !== $headers['X-Mailster-ID'] ) {
						break;
					}
					if ( ! isset( $headers['X-Mailster'] ) ) {
						break;
					}
					$subscriber = mailster( 'subscribers' )->get_by_hash( $headers['X-Mailster'], false );
					if ( ! $subscriber ) {
						break;
					}
					$campaign_id    = $headers['X-Mailster-Campaign'];
					$campaign_index = null;

					// Get the campaign index.
					if ( false !== strpos( $campaign_id, '-' ) ) {
						$campaign_index = absint( strrchr( $campaign_id, '-' ) );
						$campaign_id    = absint( $campaign_id );
					}

					$campaign = mailster( 'campaigns' )->get( $campaign_id );

					$campaign_id = $campaign ? $campaign->ID : null;

					switch ( $message->notificationType ) {
						case 'Bounce':
							$status = '[' . $message->bounce->bounceType . ' - ' . $message->bounce->bounceSubType . ']';
							if ( isset( $message->bounce->bouncedRecipients[0]->diagnosticCode ) ) {
								$status .= ' ' . $message->bounce->bouncedRecipients[0]->diagnosticCode;
							}
							switch ( $message->bounce->bounceType ) {
								case 'Permanent':
									if ( version_compare( MAILSTER_VERSION, '3.0', '<' ) ) {
										mailster( 'subscribers' )->bounce( $subscriber->ID, $campaign_id, true, $status );
									} else {
										mailster( 'subscribers' )->bounce( $subscriber->ID, $campaign_id, true, $status, $campaign_index );
									}
									break;
								case 'Undetermined':
									break;
								case 'Transient':
									switch ( $message->bounce->bounceSubType ) {
										// Amazon SES received a general bounce. You may be able to successfully send to this recipient in the future.
										case 'General':
											if ( version_compare( MAILSTER_VERSION, '3.0', '<' ) ) {
												mailster( 'subscribers' )->bounce( $subscriber->ID, $campaign_id, true, $status );
											} else {
												mailster( 'subscribers' )->bounce( $subscriber->ID, $campaign_id, true, $status, $campaign_index );
											}
											break;
										// Amazon SES received a mailbox full bounce. You may be able to successfully send to this recipient in the future.
										case 'MailboxFull':
											break;
										// Amazon SES received a message too large bounce. You may be able to successfully send to this recipient if you reduce the size of the message.
										case 'MessageTooLarge':
											break;
										// Amazon SES received a content rejected bounce. You may be able to successfully send to this recipient if you change the content of the message.
										case 'ContentRejected':
											break;
										// Amazon SES received an attachment rejected bounce. You may be able to successfully send to this recipient if you remove or change the attachment.
										case 'AttachmentRejected':
											break;
										default:
											if ( version_compare( MAILSTER_VERSION, '3.0', '<' ) ) {
												mailster( 'subscribers' )->bounce( $subscriber->ID, $campaign_id, true, $status );
											} else {
												mailster( 'subscribers' )->bounce( $subscriber->ID, $campaign_id, true, $status, $campaign_index );
											}
											break;
									}
									break;
								default:
									break;
							}
							break;
						case 'Complaint':
							$status = '[Complaint] ' . $message->complaint->complaintFeedbackType;
							if ( version_compare( MAILSTER_VERSION, '3.0', '<' ) ) {
								mailster( 'subscribers' )->unsubscribe( $subscriber->ID, $campaign_id, 'complain' );
							} else {
								mailster( 'subscribers' )->unsubscribe( $subscriber->ID, $campaign_id, 'complain', $campaign_index );
							}
							break;
						case 'Delivery':
							break;
					}
					break;
			}

			update_option( 'mailster_amazonsns_last_response', $obj, 'no' );
			exit;

		}

		// phpcs:enable WordPress.Security.NonceVerification.Recommended
		// phpcs:enable WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase
	}


	/**
	 * Shows an admin notice when Mailster is missing or too old.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	public function notice() {
		?>
		<div class="error">
			<p>
			<strong>AmazonSES integration for Mailster</strong> requires the <a href="https://mailster.co/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=plugin&utm_term=AmazonSES">Mailster Newsletter Plugin</a>, at least version <strong><?php echo esc_html( MAILSTER_AMAZONSES_REQUIRED_VERSION ); ?></strong>. Plugin deactivated.
			</p>
		</div>
		<?php
	}


	/**
	 * Sets default options and schedules the quota cron on plugin activation.
	 *
	 * @since 1.0
	 *
	 * @param bool $network_wide Whether the plugin is network-activated.
	 * @return void
	 */
	public function activate( $network_wide ) { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter.Found -- Signature required by register_activation_hook.

		if ( function_exists( 'mailster' ) ) {
			/* translators: %s: HTML link to Mailster delivery settings */
			mailster_notice( sprintf( __( 'Change the delivery method on the %s!', 'mailster-amazonses' ), '<a href="edit.php?post_type=newsletter&page=mailster_settings&mailster_remove_notice=delivery_method#delivery">Settings Page</a>' ), '', 360, 'delivery_method' );

			if ( ! wp_next_scheduled( 'mailster_amazonses_cron' ) ) {
				wp_schedule_event( time(), 'hourly', 'mailster_amazonses_cron' );
			}

			$defaults = array(
				'amazonses_endpoint'   => 'us-east-1',
				'amazonses_secure'     => 'tls',
				'amazonses_autoupdate' => true,
			);

			$mailster_options = mailster_options();

			foreach ( $defaults as $key => $value ) {
				if ( ! isset( $mailster_options[ $key ] ) ) {
					mailster_update_option( $key, $value );
				}
			}
		}
	}


	/**
	 * Resets delivery method and clears the quota cron on plugin deactivation.
	 *
	 * @since 1.0
	 *
	 * @param bool $network_wide Whether the plugin was network-activated.
	 * @return void
	 */
	public function deactivate( $network_wide ) { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter.Found -- Signature required by register_deactivation_hook.

		if ( function_exists( 'mailster' ) ) {
			if ( 'amazonses' === mailster_option( 'deliverymethod' ) ) {
				mailster_update_option( 'deliverymethod', 'simple' );
				/* translators: %s: HTML link to Mailster delivery settings */
				mailster_notice( sprintf( __( 'Change the delivery method on the %s!', 'mailster-amazonses' ), '<a href="edit.php?post_type=newsletter&page=mailster_settings&mailster_remove_notice=delivery_method#delivery">Settings Page</a>' ), '', 360, 'delivery_method' );
			}

			$timestamp = wp_next_scheduled( 'mailster_amazonses_cron' );
			if ( $timestamp ) {
				wp_unschedule_event( $timestamp, 'mailster_amazonses_cron' );
			}
		}
	}
}
