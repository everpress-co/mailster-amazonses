<?php
/*
Plugin Name: Mailster AmazonSES Integration
Plugin URI: http://rxa.li/mailster?utm_campaign=wporg&utm_source=Mailster+AmazonSES+integration
Description: Uses Amazon's Simple Email Service (SES) to deliver emails for the Mailster Newsletter Plugin for WordPress.
This requires at least version 2.2 of the plugin
Version: 1.0
Author: revaxarts.com
Author URI: https://mailster.co
Text Domain: mailster-amazonses
License: GPLv2 or later
*/


define( 'MAILSTER_AMAZONSES_VERSION', '1.0' );
define( 'MAILSTER_AMAZONSES_REQUIRED_VERSION', '2.2' );

class MailsterAmazonSES {

	private $plugin_path;
	private $plugin_url;

	/**
	 *
	 */
	public function __construct() {

		$this->plugin_path = plugin_dir_path( __FILE__ );
		$this->plugin_url = plugin_dir_url( __FILE__ );

		register_activation_hook( __FILE__, array( &$this, 'activate' ) );
		register_deactivation_hook( __FILE__, array( &$this, 'deactivate' ) );

		load_plugin_textdomain( 'mailster-amazonses' );

		add_action( 'init', array( &$this, 'init' ), 1 );
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
				'amazonses_endpoint' => 'us-east-1',
				'amazonses_secure' => 'tls',
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


	/**
	 * init function.
	 *
	 * init the plugin
	 *
	 * @access public
	 * @return void
	 */
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

				$endpoint = mailster_option( 'amazonses_endpoint' );

				define( 'MAILSTER_AMAZONSES_ENDPOINT', 'email.' . $endpoint . '.amazonaws.com' );
				define( 'MAILSTER_AMAZONSES_SMTP_ENDPOINT', 'email-smtp.' . $endpoint . '.amazonaws.com' );

				if ( is_admin() && isset( $_GET['mailster_amazonses_verifyemail'] ) && wp_verify_nonce( $_GET['_wpnonce'], 'verify_email' ) ) {
					$this->verify_email( esc_attr( $_GET['mailster_amazonses_verifyemail'] ) );

					wp_redirect( remove_query_arg( array( 'mailster_amazonses_verifyemail', '_wpnonce' ) ) );
					exit;
				}
			}

			add_action( 'mailster_amazonses_cron', array( $this, 'getquota' ) );

		}

	}


	/**
	 * initsend function.
	 *
	 * uses mailster_initsend hook to set initial settings
	 *
	 * @access public
	 * @return void
	 * @param mixed $mailobject
	 */
	public function initsend( $mailobject ) {

		if ( mailster_option( 'amazonses_smtp' ) ) {

			$secure = mailster_option( 'amazonses_secure' );

			$mailobject->mailer->Mailer = 'smtp';
			$mailobject->mailer->SMTPSecure = $secure;
			$mailobject->mailer->Host = MAILSTER_AMAZONSES_SMTP_ENDPOINT;
			$mailobject->mailer->Port = $secure == 'tls' ? 587 : 465;
			$mailobject->mailer->SMTPAuth = true;
			$mailobject->mailer->Username = mailster_option( 'amazonses_smtp_user' );
			$mailobject->mailer->Password = mailster_option( 'amazonses_smtp_pwd' );
			$mailobject->mailer->SMTPKeepAlive = true;

		} else {

			// disable dkim
			$mailobject->dkim = false;
		}

	}


	/**
	 * get_header function.
	 *
	 * returns the required headers as array
	 *
	 * @access private
	 * @param string $key    (optional) (default: '')
	 * @param string $secret (optional) (default: '')
	 * @return void
	 */
	private function get_header( $key = '', $secret = '' ) {

		if ( ! $key ) { $key = mailster_option( 'amazonses_access_key' ); }
		if ( ! $secret ) { $secret = mailster_option( 'amazonses_secret_key' ); }

		$date_value = date( DATE_RFC2822 );

		$signature = base64_encode( hash_hmac( 'sha1', $date_value, $secret, true ) );

		return array(
			'Content-Type' => 'application/x-www-form-urlencoded',
			'Date' => $date_value,
			'X-Amzn-Authorization' => 'AWS3-HTTPS AWSAccessKeyId=' . $key . ',Algorithm=HmacSHA1,Signature=' . $signature,
		);

	}


	/**
	 * presend function.
	 *
	 * uses the mailster_presend hook to apply setttings before each mail
	 *
	 * @access public
	 * @return void
	 * @param mixed $mailobject
	 */
	public function presend( $mailobject ) {

		if ( mailster_option( 'amazonses_smtp' ) ) {

			// use pre_send from the main class
			$mailobject->pre_send();

		} else {

			// add bounce address only if PHPMailer is > 5.2.7
			if ( $mailobject->bouncemail && version_compare( $mailobject->mailer->Version, '5.2.7', '>' ) ) {
				$mailobject->add_header( 'Return-Path', '<' . trim( $mailobject->bouncemail ) . '>' ); }

			// need the raw email body to send so we use the same option
			$mailobject->pre_send();

		}

	}


	/**
	 * dosend function.
	 *
	 * uses the ymail_dosend hook and triggers the send
	 *
	 * @access public
	 * @return void
	 * @param mixed $mailobject
	 * @param int   $try
	 */
	public function dosend( $mailobject, $try = 1 ) {

		if ( mailster_option( 'amazonses_smtp' ) ) {

			// use send from the main class
			$mailobject->do_send();

		} else {

			$body = $this->generate_body( $mailobject );

			$start = microtime( true );
			$response = wp_remote_post( 'https://' . MAILSTER_AMAZONSES_ENDPOINT, array(
					'compress' => true,
					'headers' => $this->get_header(),
					'timeout' => 10,
					'sslverify' => true,
					'body' => $body,
			) );

			$code = wp_remote_retrieve_response_code( $response );

			if ( is_wp_error( $response ) ) {

				// try it three times if connection timeout (after 10 seconds)
				if ( $response->get_error_code() === 'http_request_failed' && $try <= 3 ) {
					$this->dosend( $mailobject, ++$try );
					return;
				}
				$mailobject->set_error( $response->get_error_message() );
				$mailobject->sent = false;

			} elseif ( $code != 200 ) {

				$response = simplexml_load_string( wp_remote_retrieve_body( $response ) );
				$mailobject->set_error( $response->Error->Message );
				$mailobject->sent = false;

			} else {

				$mailobject->sent = true;
			}
		}

	}


	/**
	 * getquota function.
	 *
	 * returns the quota of the account or an WP_error if credentials are wrong
	 *
	 * @access public
	 * @param bool   $save   (optional) (default: true)
	 * @param string $key    (optional) (default: '')
	 * @param string $secret (optional) (default: '')
	 * @return void
	 */
	public function getquota( $save = true, $key = '', $secret = '' ) {

		$response = ( wp_remote_post( 'https://email.' . mailster_option( 'amazonses_endpoint' ) . '.amazonaws.com', array(
			'headers' => $this->get_header( $key, $secret ),
			'timeout' => 20,
			'sslverify' => true,
			'body' => array(
				'Action' => 'GetSendQuota',
			),
		) ) );

		$code = wp_remote_retrieve_response_code( $response );
		$headers = wp_remote_retrieve_headers( $response );

		if ( is_wp_error( $response ) ) {

			return $response;

		}

		$response = simplexml_load_string( wp_remote_retrieve_body( $response ) );

		if ( $code != 200 ) {

			return new WP_Error( $code, '[' . $response->Error->Code . '] ' . $response->Error->Message );

		} else {
			$limits = array(
				'sent' => intval( $response->GetSendQuotaResult->SentLast24Hours ),
				'limit' => intval( $response->GetSendQuotaResult->Max24HourSend ),
				'rate' => ceil( ( 1000 / intval( $response->GetSendQuotaResult->MaxSendRate ) * 0.1 ) ),
			);

			$limits['sent'] = min( $limits['sent'], $limits['limit'] );
		}

		if ( $save ) { $this->update_limits( $limits ); }

		return $limits;

	}


	/**
	 * subscriber_errors function.
	 *
	 * adds a subscriber error
	 *
	 * @access public
	 * @param unknown $errors
	 * @return $errors
	 */
	public function subscriber_errors( $errors ) {
		$errors[] = 'Address blacklisted';
		if ( ( $key = array_search( 'SMTP Error: Data not accepted', $errors ) ) !== false ) {
			unset( $errors[ $key ] );
		}
		return $errors;
	}


	/**
	 * generate_body function.
	 *
	 * returns the array to send with the REST API
	 *
	 * @access private
	 * @param mixed $mailobject
	 * @return void
	 */
	private function generate_body( $mailobject ) {

		// set the raw content
		$mailobject->mailer->PreSend();
		$raw_mail = $mailobject->mailer->GetSentMIMEMessage();

		$query = array();

		if ( is_array( $mailobject->to ) ) {
			$mcnt = 1;
			foreach ( $mailobject->to as $recipient ) {
				$query[ "Destinations.member.{$mcnt}" ] = $recipient;
				$mcnt++;
			}
		} else {
			$query['Destinations.member.1'] = $mailobject->to;
		}

		$query['Action'] = 'SendRawEmail';
		$query['RawMessage.Data'] = base64_encode( $raw_mail );

		return $query;

	}


	/**
	 * delivery_method function.
	 *
	 * add the delivery method to the options
	 *
	 * @access public
	 * @param mixed $delivery_methods
	 * @return void
	 */
	public function delivery_method( $delivery_methods ) {
		$delivery_methods['amazonses'] = 'AmazonSES';
		return $delivery_methods;
	}


	/**
	 * deliverytab function.
	 *
	 * the content of the tab for the options
	 *
	 * @access public
	 * @return void
	 */
	public function deliverytab() {

		wp_enqueue_script( 'mailster-amazonses-settings-script', $this->plugin_url . 'js/script.js', array( 'jquery' ), MAILSTER_AMAZONSES_VERSION );
		$verified = mailster_option( 'amazonses_verified' );

?>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">&nbsp;</th>
				<td><p class="description"><?php echo sprintf( __( 'You need to create %s to work with Amazon SES', 'mailster-amazonses' ), '<a href="https://console.aws.amazon.com/iam/home?#security_credential" class="external">Access Keys</a>' ); ?></p>
				<p class="description"><?php echo sprintf( __( 'You have to %s to send mails to unverified mails', 'mailster-amazonses' ), '<a href="http://aws.amazon.com/ses/fullaccessrequest/" class="external">request Production Access</a>' ); ?></p>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php _e( 'Amazon AWS Access Key' , 'mailster-amazonses' ) ?></th>
				<td><input type="text" name="mailster_options[amazonses_access_key]" value="<?php echo esc_attr( mailster_option( 'amazonses_access_key' ) ); ?>" class="regular-text" placeholder="XXXXXXXXXXXXXXXXXXXX"></td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php _e( 'Amazon AWS Secret Key' , 'mailster-amazonses' ) ?></th>
				<td><input type="password" name="mailster_options[amazonses_secret_key]" value="<?php echo esc_attr( mailster_option( 'amazonses_secret_key' ) ); ?>" class="regular-text" autocomplete="new-password"></td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php _e( 'Endpoint' , 'mailster-amazonses' ) ?></th>
				<td>
				<select name="mailster_options[amazonses_endpoint]" >
					<?php $current = mailster_option( 'amazonses_endpoint' );
					$endpoints = array(
						'us-east-1' => 'US East (N. Virginia) Region',
						'us-west-2' => 'US West (Oregon) Region',
						'eu-west-1' => 'EU (Ireland)',
					);
					foreach ( $endpoints as $endpoint => $name ) {
						?>
						<option value="<?php echo esc_attr( $endpoint ) ?>" <?php selected( $current == $endpoint ); ?>><?php echo $name . ' (' . $endpoint . ')'; ?></option>
					<?php } ?>
				</select>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">&nbsp;</th>
				<td>
					<?php if ( $verified ) : ?>
					<span style="color:#3AB61B">&#10004;</span> <?php esc_html_e( 'Your credentials are ok!', 'mailster-amazonses' ) ?>
					<?php else : ?>
					<span style="color:#D54E21">&#10006;</span> <?php esc_html_e( 'Your credentials are WRONG!', 'mailster-amazonses' ) ?>
					<?php endif; ?>
					<input type="hidden" name="mailster_options[amazonses_verified]" value="<?php echo $verified ?>">
				</td>
			</tr>
			<?php if ( $verified ) :
				$verified_identities = $this->list_identities();
				if ( is_array( $verified_identities ) ) {
				?>
					<tr valign="top">
					<th scope="row"><?php _e( 'verified email addresses', 'mailster-amazonses' ) ?></th>
			<td><p>
				<?php
					$to_verfy = array_filter( array_unique( array( mailster_option( 'from' ), mailster_option( 'reply_to' ), mailster_option( 'bounce' ) ) ) );
				foreach ( $to_verfy as $email ) {
					$domain = ltrim( strrchr( $email, '@' ), '@' );
					echo '<strong>' . esc_html( $email ) . '</strong> ';
					if ( in_array( $email, $verified_identities ) ) {
						echo '<span style="color:#3AB61B">&#10004;</span> <span class="description">' . __( 'is verified', 'mailster-amazonses' ) . '</span><br>';
					} elseif ( in_array( $domain, $verified_identities ) ) {
						echo '<span style="color:#3AB61B">&#10004;</span> <span class="description">' . __( 'is verified', 'mailster-amazonses' ) . ' (' . sprintf( __( 'via domain %s', 'mailster-amazonses' ), '<strong>' . $domain . '</strong>' ) . ')</span><br>';
					} else {
						$link = add_query_arg( array( 'mailster_amazonses_verifyemail' => $email, '_wpnonce' => wp_create_nonce( 'verify_email' ) ) );
						echo '<span style="color:#D54E21">&#10006;</span> <span class="description">' . __( 'is not verified', 'mailster-amazonses' ) . ' <a href="' . $link . '#delivery" class="button button-small"> ' . __( 'verify now', 'mailster' ) . '</a></span><br>';
					}
				}
				?>
				</p>
				<p><a href="https://console.aws.amazon.com/ses/home#verified-senders-email:" class="external"><?php _e( 'Verified email addresses', 'mailster-amazonses' ) ?></a> | <a href="https://console.aws.amazon.com/ses/home#verified-senders-domain:" class="external"><?php _e( 'Verified domains', 'mailster-amazonses' ) ?></a></p>
				</td>
			</tr>
			<?php
				}
		endif; ?>
			<tr valign="top">
				<th scope="row"><?php _e( 'send via' , 'mailster-amazonses' ) ?></th>
				<td><select class="mailster-amazonses-api" name="mailster_options[amazonses_smtp]">
					<option value="0" <?php selected( ! mailster_option( 'amazonses_smtp' ) ); ?>><?php _e( 'WEB API', 'mailster-amazonses' ) ?></option>
					<option value="1" <?php selected( mailster_option( 'amazonses_smtp' ) ); ?>><?php _e( 'SMTP API', 'mailster-amazonses' ) ?></option>
				</select>
			</tr>
		</table>
		<div class="amazonses-tab-smtp" <?php if ( ! mailster_option( 'amazonses_smtp' ) ) { echo ' style="display:none"'; } ?>>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">&nbsp;</th>
				<td><p class="description"><?php echo sprintf( __( 'You have to create %s to get your username and password', 'mailster-amazonses' ), '<a href="https://console.aws.amazon.com/ses/home#smtp-settings:" class="external">SMTP credentials</a>' ); ?></p>
			</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php _e( 'Amazon SES SMTP Username' , 'mailster-amazonses' ) ?></th>
				<td><input type="text" name="mailster_options[amazonses_smtp_user]" value="<?php echo esc_attr( mailster_option( 'amazonses_smtp_user' ) ); ?>" class="regular-text" placeholder="XXXXXXXXXXXXXXXXXXXX"></td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php _e( 'Amazon SES SMTP Password' , 'mailster-amazonses' ) ?></th>
				<td><input type="password" name="mailster_options[amazonses_smtp_pwd]" value="<?php echo esc_attr( mailster_option( 'amazonses_smtp_pwd' ) ); ?>" class="regular-text" autocomplete="new-password"></td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php _e( 'Connection' , 'mailster-amazonses' ) ?></th>
				<td><label><input type="radio" name="mailster_options[amazonses_secure]" value="tls" <?php checked( mailster_option( 'amazonses_secure' ), 'tls' )?>> <?php _e( 'TLS', 'mailster-amazonses' ); ?></label>
				<label><input type="radio" name="mailster_options[amazonses_secure]" value="ssl" <?php checked( mailster_option( 'amazonses_secure' ), 'ssl' )?>> <?php _e( 'SSL', 'mailster-amazonses' ); ?></label></td>
			</tr>
		</table>
		</div>
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><?php _e( 'Update Limits' , 'mailster-amazonses' ) ?></th>
				<td><label><input type="checkbox" name="mailster_options[amazonses_autoupdate]" value="1" <?php checked( mailster_option( 'amazonses_autoupdate' ), true )?>> <?php _e( 'auto update send limits (recommended)', 'mailster-amazonses' ); ?> </label></td>
			</tr>
		</table>

	<?php

	}


	/**
	 * verify_options function.
	 *
	 * some verification if options are saved
	 *
	 * @access public
	 * @param unknown $emailaddress
	 * @return void
	 */
	public function verify_email( $emailaddress ) {

		$response = ( wp_remote_post( 'https://email.' . mailster_option( 'amazonses_endpoint' ) . '.amazonaws.com', array(
			'headers' => $this->get_header( $key, $secret ),
			'sslverify' => true,
			'body' => array(
				'Action' => 'VerifyEmailIdentity',
				'EmailAddress' => $emailaddress,
			),
		) ) );

		$code = wp_remote_retrieve_response_code( $response );
		$headers = wp_remote_retrieve_headers( $response );

		if ( is_wp_error( $response ) || $code != 200 ) {
			return false;
		} else {
			$response = simplexml_load_string( wp_remote_retrieve_body( $response ) );

			if ( $response->VerifyEmailIdentityResult ) {
				mailster_notice( sprintf( __( 'Please check your inbox. A new verification mails has been sent to %s', 'mailster' ), '"' . $emailaddress . '"' ), 'updated', true ); }

			return true;
		}

	}


	/**
	 * list_identities function.
	 *
	 * returns a list with verified emails
	 *
	 * @access public
	 * @param mixed $options
	 * @return void
	 */
	public function list_identities() {

		$response = ( wp_remote_post( 'https://email.' . mailster_option( 'amazonses_endpoint' ) . '.amazonaws.com', array(
			'headers' => $this->get_header(),
			'sslverify' => true,
			'body' => array(
				'Action' => 'ListIdentities',
			),
		) ) );

		$code = wp_remote_retrieve_response_code( $response );

		if ( is_wp_error( $response ) || $code != 200 ) {
			return false;
		}
		$response = simplexml_load_string( wp_remote_retrieve_body( $response ) );

		return (array) $response->ListIdentitiesResult->Identities->member;

	}


	/**
	 * verify_options function.
	 *
	 * some verification if options are saved
	 *
	 * @access public
	 * @param mixed $options
	 * @return void
	 */
	public function verify_options( $options ) {

		if ( $timestamp = wp_next_scheduled( 'mailster_amazonses_cron' ) ) {
			wp_unschedule_event( $timestamp, 'mailster_amazonses_cron' );
		}
		// only if delivery method is amazonses
		if ( $options['deliverymethod'] == 'amazonses' ) {
			$old_user = mailster_option( 'amazonses_access_key' );
			$old_pwd = mailster_option( 'amazonses_secret_key' );
			$old_smtp_user = mailster_option( 'amazonses_smtp_user' );
			$old_smtp_pwd = mailster_option( 'amazonses_smtp_pwd' );
			if ( $old_user != $options['amazonses_access_key']
				|| $old_pwd != $options['amazonses_secret_key']
				|| $old_smtp_user != $options['amazonses_smtp_user']
				|| $old_smtp_pwd != $options['amazonses_smtp_pwd']
				|| mailster_option( 'deliverymethod' ) != $options['deliverymethod'] || ! mailster_option( 'amazonses_verified' ) ) {

				$limits = $this->getquota( false, $options['amazonses_access_key'], $options['amazonses_secret_key'] );

				if ( is_wp_error( $limits ) ) {

					add_settings_error( 'mailster_options', 'mailster_options', __( 'An error occurred:', 'mailster-amazonses' ) . '<br>' . $limits->get_error_message() );
					$options['amazonses_verified'] = false;

				} else {

					$options['amazonses_verified'] = true;

					if ( $limits ) {
						$options['send_limit'] = $limits['limit'];
						$options['send_period'] = 24;
						$options['send_delay'] = $limits['rate'];
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
				$host = 'email-smtp.us-east-1.amazonaws.com';
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


	/**
	 * update_limits function.
	 *
	 * Update the limits
	 *
	 * @access public
	 * @return void
	 * @param unknown $limits
	 */
	public function update_limits( $limits ) {
		mailster_update_option( 'send_limit', $limits['limit'] );
		mailster_update_option( 'send_period', 24 );
		mailster_update_option( 'send_delay', $limits['rate'] );

		// always reset to 24 hours
		update_option( '_transient__mailster_send_period_timeout', $limits['sent'] > 0 );
		update_option( '_transient__mailster_send_period', $limits['sent'] );
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
		<strong>AmazonSES integration for Mailster</strong> requires the <a href="http://rxa.li/mailster?utm_campaign=wporg&utm_source=AmazonSES+integration+for+Mailster">Mailster Newsletter Plugin</a>, at least version <strong><?php echo MAILSTER_AMAZONSES_REQUIRED_VERSION ?></strong>. Plugin deactivated.
		</p>
	</div>
		<?php
	}



}


new MailsterAmazonSES();
