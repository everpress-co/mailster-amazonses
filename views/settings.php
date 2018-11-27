<?php $amazonsns_key = mailster_option( 'amazonses_key', md5( uniqid() ) ); ?>
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
</table>
<?php if ( 'amazonses' == mailster_option( 'deliverymethod' ) ) : ?>
<table class="form-table">
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
	<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Bounce Handling via', 'mailster-amazonses' ) ?></th>
		<td>
		<select name="mailster_options[amazonses_bouncehandling]" class="amazonses_bouncehandling">
			<option value="" <?php selected( ! mailster_option( 'amazonses_bouncehandling' ) )?>>Mailster's Bounce Settings</option>
			<option value="amazonsns" <?php selected( mailster_option( 'amazonses_bouncehandling' ), 'amazonsns' )?>>AmazonSNS</option>
		</select>
		<div class="amazonsns-options" <?php if ( ! mailster_option( 'amazonses_bouncehandling' ) ) { echo ' style="display:none"'; } ?>>
			<?php if ( mailster_is_local() ) : ?>
				<div class="notice error inline"><p><?php esc_html_e( 'AmazonSNS is not available on localhost!', 'mailster-amazonses' ) ?></p></div>
			<?php else : ?>
			<p class="description"><?php esc_html_e( 'Mailster can handle bounces via AmazonSNS. This is the recommended and most reliable way and requires some setup.', 'mailster-amazonses' ) ?></p>
			<p class="description"><?php printf( esc_html__( 'Read more about the setup process %s.', 'mailster-amazonses' ), '<a href="https://kb.mailster.co/handling-bounces-with-amazonsns/" class="external">' . esc_html__( 'here', 'mailster-amazonses' ) . '</a>' ) ?></p>
			<?php $enpoint = add_query_arg( array( 'mailster_amazonsns' => $amazonsns_key ), home_url( '/' ) ) ?>
			<?php $last_response = get_option( 'mailster_amazonsns_last_response' ); ?>
			<p><strong><?php esc_html_e( 'Endpoint', 'mailster-amazonses' ) ?></strong></p>
			<div class="<?php echo $last_response ? 'verified' : 'not-verified' ?>"><a href="<?php echo esc_attr( $enpoint ) ?>" class="external"><code id="amazonsns-endpoint"><?php echo esc_attr( $enpoint ) ?></code></a> <a class="clipboard" data-clipboard-target="#amazonsns-endpoint"><?php esc_html_e( 'copy', 'mailster-amazonses' ) ?></a></div>
			<?php if ( $last_response ) : ?>
				<p><strong><?php esc_html_e( 'Last Response', 'mailster-amazonses' ) ?></strong></p>
				<textarea rows="10" cols="40" class="large-text code"><?php echo print_r( $last_response, true ) ?></textarea>
			<?php endif; ?>
			<?php endif; ?>
		</div>
		</td>
	</tr>

</table>
<?php else : ?>
<input type="hidden" name="mailster_options[amazonses_smtp]" value="<?php echo esc_attr( mailster_option( 'amazonses_smtp' ) ) ?>">
<input type="hidden" name="mailster_options[amazonses_smtp_user]" value="<?php echo esc_attr( mailster_option( 'amazonses_smtp_user' ) ) ?>">
<input type="hidden" name="mailster_options[amazonses_smtp_pwd]" value="<?php echo esc_attr( mailster_option( 'amazonses_smtp_pwd' ) ) ?>">
<input type="hidden" name="mailster_options[amazonses_secure]" value="<?php echo esc_attr( mailster_option( 'amazonses_secure' ) ) ?>">
<input type="hidden" name="mailster_options[amazonses_autoupdate]" value="<?php echo esc_attr( mailster_option( 'amazonses_autoupdate' ) ) ?>">
<input type="hidden" name="mailster_options[amazonses_bouncehandling]" value="<?php echo esc_attr( mailster_option( 'amazonses_bouncehandling' ) ) ?>">
	<?php if ( $verified ) : ?>
	<table class="form-table">
		<tr valign="top">
			<th scope="row">&nbsp;</th>
			<td><div class="notice notice-warning inline"><p><strong><?php esc_html_e( 'Please save your settings to access further delivery options!', 'mailster-amazonses' ); ?></strong></p></div></td>
		</tr>
	</table>
	<?php endif; ?>
<?php endif; ?>
<input type="hidden" name="mailster_options[amazonses_key]" value="<?php echo esc_attr( mailster_option( 'amazonses_key', $amazonsns_key ) ) ?>">
