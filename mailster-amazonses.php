<?php
/*
Plugin Name: Mailster AmazonSES Integration
Requires Plugins: mailster
Plugin URI: https://mailster.co/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=plugin&utm_term=AmazonSES
Description: Uses Amazon's Simple Email Service (SES) to deliver emails for the Mailster Newsletter Plugin for WordPress.
Version: 2.14.0
Author: EverPress
Author URI: https://mailster.co
Text Domain: mailster-amazonses
License: GPLv2 or later
*/


define( 'MAILSTER_AMAZONSES_VERSION', '2.14.0' );
define( 'MAILSTER_AMAZONSES_REQUIRED_VERSION', '4.0' );
define( 'MAILSTER_AMAZONSES_FILE', __FILE__ );

require_once __DIR__ . '/classes/amazonses.class.php';
new MailsterAmazonSES();
