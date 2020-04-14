<?php

use Aws\SesV2\SesV2Client;
use Aws\Result;

class MailsterAmazonSES {

	private $plugin_path;
	private $plugin_url;
	private $aws;

	/**
	 *
	 */
	public function __construct() {

		$this->plugin_path = plugin_dir_path( MAILSTER_AMAZONSES_FILE );
		$this->plugin_url  = plugin_dir_url( MAILSTER_AMAZONSES_FILE );

		register_activation_hook( MAILSTER_AMAZONSES_FILE, array( &$this, 'activate' ) );
		register_deactivation_hook( MAILSTER_AMAZONSES_FILE, array( &$this, 'deactivate' ) );

		load_plugin_textdomain( 'mailster-amazonses' );

		add_action( 'init', array( &$this, 'init' ), 1 );
	}


	public function init() {

		if ( ! function_exists( 'mailster' ) ) {

			add_action( 'admin_notices', array( $this, 'notice' ) );

		} else {

			add_filter( 'mailster_delivery_methods', array( $this, 'delivery_method' ) );
			add_action( 'mailster_deliverymethod_tab_amazonses', array( $this, 'deliverytab' ) );

			add_filter( 'mailster_verify_options', array( $this, 'verify_options' ) );

			if ( mailster_option( 'deliverymethod' ) == 'amazonses' ) {

				add_action( 'mailster_initsend', array( $this, 'initsend' ) );
				add_action( 'mailster_presend', array( $this, 'presend' ) );
				add_action( 'mailster_dosend', array( $this, 'dosend' ) );
				add_filter( 'mailster_subscriber_errors', array( $this, 'subscriber_errors' ) );

				if ( is_admin() && isset( $_GET['mailster_amazonses_verifyemail'] ) && wp_verify_nonce( $_GET['_wpnonce'], 'verify_email' ) ) {
					$this->verify_email( esc_attr( $_GET['mailster_amazonses_verifyemail'] ) );

					wp_redirect( remove_query_arg( array( 'mailster_amazonses_verifyemail', '_wpnonce' ) ) );
					exit;
				}

				if ( isset( $_GET['mailster_amazonsns'] ) ) {
					$this->handle_sns();
				}
			}

			add_action( 'mailster_amazonses_cron', array( $this, 'getquota' ) );

		}

	}


	public function initsend( $mailobject ) {

		if ( mailster_option( 'amazonses_smtp' ) ) {

			$secure = mailster_option( 'amazonses_secure' );

			$mailobject->mailer->Mailer        = 'smtp';
			$mailobject->mailer->SMTPSecure    = $secure;
			$mailobject->mailer->Host          = 'email-smtp.' . mailster_option( 'amazonses_endpoint' ) . '.amazonaws.com';
			$mailobject->mailer->Port          = $secure == 'tls' ? 587 : 465;
			$mailobject->mailer->SMTPAuth      = true;
			$mailobject->mailer->Username      = mailster_option( 'amazonses_smtp_user' );
			$mailobject->mailer->Password      = mailster_option( 'amazonses_smtp_pwd' );
			$mailobject->mailer->SMTPKeepAlive = true;

		} else {

			// disable dkim
			$mailobject->dkim = false;
		}

	}

	private function get_header() {

		$key    = mailster_option( 'amazonses_access_key' );
		$secret = mailster_option( 'amazonses_secret_key' );

		$date_value = date( DATE_RFC2822 );

		$signature = base64_encode( hash_hmac( 'sha1', $date_value, $secret, true ) );

		return array(
			// 'Content-Type' => 'application/x-www-form-urlencoded',
			'Date'                 => $date_value,
			'X-Amzn-Authorization' => 'AWS3-HTTPS AWSAccessKeyId=' . $key . ',Algorithm=HmacSHA1,Signature=' . $signature,
		);

	}


	public function presend( $mailobject ) {

		if ( mailster_option( 'amazonses_smtp' ) ) {

			// use pre_send from the main class
			$mailobject->pre_send();

		} else {

			// add bounce address only if PHPMailer is > 5.2.7
			if ( $mailobject->bouncemail && version_compare( $mailobject->mailer->Version, '5.2.7', '>' ) ) {
				$mailobject->add_header( 'Return-Path', '<' . trim( $mailobject->bouncemail ) . '>' );
			}

			// need the raw email body to send so we use the same option
			$mailobject->pre_send();

		}

	}


	public function dosend( $mailobject ) {

		if ( mailster_option( 'amazonses_smtp' ) ) {

			// use send from the main class
			$mailobject->do_send();

		} else {

			$mailobject->mailer->PreSend();
			$data = $mailobject->mailer->GetSentMIMEMessage();

			$result = $this->aws(
				'sendEmail',
				array(
					'Destination' => array(
						'ToAddresses'  => $mailobject->to ? (array) $mailobject->to : array(),
						'CcAddresses'  => $mailobject->cc ? (array) $mailobject->cc : array(),
						'BccAddresses' => $mailobject->bcc ? (array) $mailobject->bcc : array(),
					),
					'Content'     => array(
						'Raw' => array(
							'Data' => $data,
						),
					),
				)
			);

			if ( is_wp_error( $result ) ) {
				$mailobject->set_error( $result->get_error_message() );
				$mailobject->sent = false;
			} elseif ( 200 == $result->get( '@metadata' )['statusCode'] ) {
				$mailobject->sent = true;
			} else {
				$mailobject->set_error( 'unknown error' );
				$mailobject->sent = false;
			}
		}

	}


	private function aws( $method = null, $args = array(), $async = false ) {
		if ( ! $this->aws ) {
			require_once $this->plugin_path . 'vendor/autoload.php';

			$this->aws = new SesV2Client(
				array(
					'version'     => 'latest',
					'region'      => mailster_option( 'amazonses_endpoint' ),
					'credentials' => array(
						'key'    => mailster_option( 'amazonses_access_key' ),
						'secret' => mailster_option( 'amazonses_secret_key' ),
					),
				)
			);
		}

		if ( is_null( $method ) ) {
			return $this->aws;
		}

		if ( $async ) {
			$method .= 'Async';
		}

		try {
			return call_user_func( array( $this->aws, $method ), $args );
		} catch ( \Aws\SesV2\Exception\SesV2Exception $e ) {
			return new WP_Error( $e->getAwsErrorCode(), $e->getAwsErrorMessage() );
		} catch ( \Exception $e ) {
			return new WP_Error( 'error', $e->getMessage() );
		}
	}

	public function getquota( $save = true, $key = '', $secret = '' ) {

		$result = $this->aws( 'getAccount' );

		if ( is_wp_error( $result ) ) {
			return $result;
		}

		$quota = $result->get( 'SendQuota' );

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

	public function subscriber_errors( $errors ) {
		$errors[] = 'Address blacklisted';
		$errors[] = 'Invalid domain name';
		if ( ( $key = array_search( 'SMTP Error: Data not accepted', $errors ) ) !== false ) {
			unset( $errors[ $key ] );
		}
		return $errors;
	}


	public function delivery_method( $delivery_methods ) {
		$delivery_methods['amazonses'] = 'AmazonSES';
		return $delivery_methods;
	}


	public function deliverytab() {

		wp_enqueue_script( 'mailster-amazonses-settings-script', $this->plugin_url . 'js/script.js', array( 'jquery' ), MAILSTER_AMAZONSES_VERSION );
		$verified = mailster_option( 'amazonses_verified' );

		include $this->plugin_path . '/views/settings.php';

	}


	public function verify_email( $emailaddress ) {

		$result = $this->aws(
			'createEmailIdentity',
			array(
				'EmailIdentity' => $emailaddress,
			)
		);

		return ! is_wp_error( $result ) && ( 200 == $result->get( '@metadata' )['statusCode'] );
	}


	public function list_identities() {

		$result = $this->aws( 'ListEmailIdentities' );

		return $result->get( 'EmailIdentities' );

	}


	public function verify_options( $options ) {

		if ( $timestamp = wp_next_scheduled( 'mailster_amazonses_cron' ) ) {
			wp_unschedule_event( $timestamp, 'mailster_amazonses_cron' );
		}
		// only if delivery method is amazonses
		if ( $options['deliverymethod'] == 'amazonses' ) {

			if ( 'amazonsns' != $options['amazonses_bouncehandling'] ) {
				delete_option( 'mailster_amazonsns_last_response' );
				unset( $options['amazonses_key'] );
			}

			$old_user      = mailster_option( 'amazonses_access_key' );
			$old_pwd       = mailster_option( 'amazonses_secret_key' );
			$old_smtp_user = mailster_option( 'amazonses_smtp_user' );
			$old_smtp_pwd  = mailster_option( 'amazonses_smtp_pwd' );
			if ( $old_user != $options['amazonses_access_key']
				|| $old_pwd != $options['amazonses_secret_key']
				|| $old_smtp_user != $options['amazonses_smtp_user']
				|| $old_smtp_pwd != $options['amazonses_smtp_pwd']
				|| mailster_option( 'deliverymethod' ) != $options['deliverymethod'] || ! mailster_option( 'amazonses_verified' ) ) {

				remove_filter( 'mailster_verify_options', array( $this, 'verify_options' ) );
				mailster_update_option( 'amazonses_access_key', $options['amazonses_access_key'], true );
				mailster_update_option( 'amazonses_secret_key', $options['amazonses_secret_key'], true );

				$limits = $this->getquota( false );

				if ( is_wp_error( $limits ) ) {

					add_settings_error( 'mailster_options', 'mailster_options', __( 'An error occurred:', 'mailster-amazonses' ) . '<br>' . $limits->get_error_message() );
					$options['amazonses_verified'] = false;

				} else {

					$options['amazonses_verified'] = true;

					if ( $limits ) {
						$options['send_limit']  = $limits['limit'];
						$options['send_period'] = 24;
						$options['send_delay']  = $limits['rate'];
						update_option( '_transient__mailster_send_period_timeout', $limits['sent'] > 0 );
						update_option( '_transient__mailster_send_period', $limits['sent'] );

						add_settings_error( 'mailster_options', 'mailster_options', __( 'Send limit has been adjusted to your Amazon SES limits', 'mailster-amazonses' ) );
					}
				}
			}

			if ( isset( $options['amazonses_autoupdate'] ) ) {
				if ( ! wp_next_scheduled( 'mailster_amazonses_cron' ) ) {
					wp_schedule_event( time(), 'hourly', 'mailster_amazonses_cron' );
				}
			}

			if ( function_exists( 'fsockopen' ) && isset( $options['amazonses_smtp'] ) && $options['amazonses_smtp'] ) {
				$host = 'email-smtp.' . mailster_option( 'amazonses_endpoint' ) . '.amazonaws.com';
				$port = $options['amazonses_secure'] == 'tls' ? 587 : 465;
				$conn = @fsockopen( $host, $port, $errno, $errstr, 5 );

				if ( is_resource( $conn ) ) {

					fclose( $conn );

				} else {

					add_settings_error( 'mailster_options', 'mailster_options', sprintf( __( 'Not able to use Amazon SES via SMTP cause of the blocked port %s! Please try a different connection, send without SMTP or choose a different delivery method!', 'mailster-amazonses' ), $port ) );

				}
			}
		}

		return $options;
	}


	public function update_limits( $limits ) {
		mailster_update_option( 'send_limit', $limits['limit'] );
		mailster_update_option( 'send_period', 24 );
		mailster_update_option( 'send_delay', $limits['rate'] );

		// always reset to 24 hours
		update_option( '_transient__mailster_send_period_timeout', $limits['sent'] > 0 );
		update_option( '_transient__mailster_send_period', $limits['sent'] );
	}

	private function handle_sns() {

		if ( 'amazonsns' == mailster_option( 'amazonses_bouncehandling' ) && mailster_option( 'amazonses_key' ) == $_GET['mailster_amazonsns'] && $data = file_get_contents( 'php://input' ) ) {

			$obj = json_decode( $data );

			switch ( $obj->Type ) {

				case 'SubscriptionConfirmation':
					$response = wp_remote_get( $obj->SubscribeURL );
					$code     = wp_remote_retrieve_response_code( $response );
					$body     = (object) simplexml_load_string( wp_remote_retrieve_body( $response ) );
					if ( 200 == $code ) {
						mailster_notice( sprintf( __( 'Mailster has successfully confirmed the Amazon SNS subscription to topic %s.', 'mailster-amazonses' ), '<code>' . $obj->TopicArn . '</code>' ), 'notice', 360, 'amazonses-SubscriptionConfirmation' );
					} else {
						mailster_notice( sprintf( __( 'Mailster was not able to confirmed the Amazon SNS subscription to topic %s.', 'mailster-amazonses' ), '<code>' . $obj->TopicArn . '</code>' ) . '<br><pre>' . print_r( $body, true ) . '</pre>', 'error', false, 'amazonses-SubscriptionConfirmation' );
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
					if ( $headers['X-Mailster-ID'] != mailster_option( 'ID' ) ) {
						break;
					}
					$subscriber = mailster( 'subscribers' )->get_by_hash( $headers['X-Mailster'], false );
					if ( ! $subscriber ) {
						break;
					}
					$campaign = mailster( 'campaigns' )->get( (int) $headers['X-Mailster-Campaign'] );

					$campaign_id = $campaign ? $campaign->ID : null;

					switch ( $message->notificationType ) {
						case 'Bounce':
							$status = '[' . $message->bounce->bounceType . ' - ' . $message->bounce->bounceSubType . ']';
							if ( isset( $message->bounce->bouncedRecipients[0]->diagnosticCode ) ) {
								$status .= ' ' . $message->bounce->bouncedRecipients[0]->diagnosticCode;
							}
							switch ( $message->bounce->bounceType ) {
								case 'Permanent':
									mailster( 'subscribers' )->bounce( $subscriber->ID, $campaign_id, true, $status );
									break;
								case 'Transient':
								default:
									mailster( 'subscribers' )->bounce( $subscriber->ID, $campaign_id, false, $status );
									break;
							}
							break;
						case 'Complaint':
							$status = '[Complaint] ' . $message->complaint->complaintFeedbackType;
							mailster( 'subscribers' )->unsubscribe( $subscriber->ID, $campaign_id, 'complain' );
							break;
						case 'Delivery':
							break;
					}
					break;
			}

			update_option( 'mailster_amazonsns_last_response', $obj, 'no' );

			wp_die( 'This page handles the Bounces and messages from Amazon SNS for Mailster.', 'Mailster Amazon SNS Endpoint' );
		}

	}


	/**
	 * notice function.
	 *
	 * Notice if Mailster is not available
	 *
	 * @access public
	 * @return void
	 */
	public function notice() {
		?>
	<div class="error">
		<p>
		<strong>AmazonSES integration for Mailster</strong> requires the <a href="https://mailster.co/?utm_campaign=wporg&utm_source=AmazonSES+integration+for+Mailster&utm_medium=plugin">Mailster Newsletter Plugin</a>, at least version <strong><?php echo MAILSTER_AMAZONSES_REQUIRED_VERSION; ?></strong>. Plugin deactivated.
		</p>
	</div>
		<?php
	}


	/**
	 *
	 *
	 * @param unknown $network_wide
	 */
	public function activate( $network_wide ) {

		if ( function_exists( 'mailster' ) ) {
			mailster_notice( sprintf( __( 'Change the delivery method on the %s!', 'mailster-amazonses' ), '<a href="edit.php?post_type=newsletter&page=mailster_settings&mailster_remove_notice=delivery_method#delivery">Settings Page</a>' ), '', false, 'delivery_method' );

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
	 *
	 *
	 * @param unknown $network_wide
	 */
	public function deactivate( $network_wide ) {

		if ( function_exists( 'mailster' ) ) {
			if ( mailster_option( 'deliverymethod' ) == 'amazonses' ) {
				mailster_update_option( 'deliverymethod', 'simple' );
				mailster_notice( sprintf( __( 'Change the delivery method on the %s!', 'mailster-amazonses' ), '<a href="edit.php?post_type=newsletter&page=mailster_settings&mailster_remove_notice=delivery_method#delivery">Settings Page</a>' ), '', false, 'delivery_method' );
			}

			if ( $timestamp = wp_next_scheduled( 'mailster_amazonses_cron' ) ) {
				wp_unschedule_event( $timestamp, 'mailster_amazonses_cron' );
			}
		}

	}



}
