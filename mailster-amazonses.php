<?php
/*
Plugin Name: Mailster AmazonSES Integration
Plugin URI: https://mailster.co/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=plugin&utm_term=AmazonSES
Description: Uses Amazon's Simple Email Service (SES) to deliver emails for the Mailster Newsletter Plugin for WordPress.
Version: 2.13.0
Author: EverPress
Author URI: https://mailster.co
Text Domain: mailster-amazonses
License: GPLv2 or later
*/


define( 'MAILSTER_AMAZONSES_VERSION', '2.13.0' );
define( 'MAILSTER_AMAZONSES_REQUIRED_VERSION', '2.4' );
define( 'MAILSTER_AMAZONSES_FILE', __FILE__ );

require_once dirname( __FILE__ ) . '/classes/amazonses.class.php';
new MailsterAmazonSES();
