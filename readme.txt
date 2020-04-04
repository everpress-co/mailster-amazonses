=== Mailster AmazonSES Integration ===
Contributors: everpress
Tags: amazon, ses, mailster, newsletter, mailsteresp
Requires at least: 4.2
Tested up to: 5.4
Stable tag: 2.1
License: GPLv2 or later
Author: EverPress
Author URI: https://mailster.co

== Description ==

Uses Amazon's Simple Email Service (SES) to deliver emails for the [Mailster Newsletter Plugin for WordPress](https://mailster.co/?utm_campaign=wporg&utm_source=AmazonSES+integration+for+Mailster&utm_medium=readme).

== Installation ==

1. Upload the entire `mailster-amazonses` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to Settings => Newsletter => Delivery and select the `AmazonSES` tab
4. Enter your credentials
5. Send a testmail

== Screenshots ==

1. Option Interface.

== Changelog ==

= 2.1 =
* updated: more endpoints are now available

= 2.0 =
* New: Handle Bounces via [AmazonSNS](https://kb.mailster.co/handling-bounces-with-amazonsns/?utm_campaign=wporg&utm_source=AmazonSES+integration+for+Mailster&utm_medium=readme)

= 1.2 =
* improved resource handling if method is not enabled
* changed file structure

= 1.1.2 =
* improved routine to prevent duplicates

= 1.1.1 =
* increased request timeout to prevent false positives

= 1.1 =
* added support for BCC on WEB API

= 1.0 =
* initial release

== Upgrade Notice ==

== Additional Info ==

> This Plugin requires [Mailster Newsletter Plugin for WordPress](https://mailster.co/?utm_campaign=wporg&utm_source=AmazonSES+integration+for+Mailster&utm_medium=readme)