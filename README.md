# Mailster AmazonSES Integration

Contributors: everpress, mailster, xaverb  
Tags: amazon, ses, mailster, newsletter, mailsteresp  
Requires at least: 6.0  
Tested up to: 6.5  
Stable tag: 2.14.0  
Requires PHP: 7.4
License: GPLv2 or later  
Author: EverPress  
Author URI: <https://mailster.co>

## Description

Uses Amazon's Simple Email Service (SES) to deliver emails for the [Mailster Newsletter Plugin for WordPress](https://mailster.co/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=readme&utm_term=AmazonSES).

## Installation

1. Upload the entire `mailster-amazonses` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to Settings => Newsletter => Delivery and select the `AmazonSES` tab
4. Enter your credentials
5. Send a testmail

## Screenshots

![Option Interface.](https://ps.w.org/mailster-amazonses/assets/screenshot-1.png)

## Changelog

### 2.14.0

- updated tested up to
- requires now PHP 7.4
- requires now Mailster 4.0
- requires now WordPress 6.0
- code improvements

### 2.13.0

- updated third party libraries
- fixes for PHP 8.2
- now requires PHP 7.2.5+

### 2.12.0

- updated third party libraries

### 2.11.0

- added missing regions

### 2.10

- update for Mailster 3.0

### 2.9

- improved bounce handling on Transient - General bounces

### 2.8.1

- fixed file path issues

### 2.8

- added: 4 new regions: California, Paris, Stockholm, Bahrain
- better formatting for error messages

### 2.7

- do not resend campaigns on some soft bounces (transients) as it causes more complaints
- small bug fixes and improvements

### 2.6

- make sure SNS region is the same as defined in the settings.
- small bug fixes

### 2.5.1

- fixed: respect 'Update Limits' options

### 2.5

- added additional 4 endpoints: Ohio, Seoul, Singapore, Tokyo

### 2.4.2

- fixed: respect 'Update Limits' options

### 2.4.1

- fixed: SVN issue during update

### 2.4

- brings back missing regions.

### 2.3

- revert back to 2.1 state caused by conflicts with third party plugins. If you rely on one of these endpoints please wait to update until we got that sorted:
- Asia Pacific (Mumbai)
- Asia Pacific (Sydney)
- Canada (Central)
- Europe (Frankfurt)
- Europe (London)
- South America (São Paulo)

### 2.2.2

- fixed: error on ListEmailIdentities method

### 2.2.1

- fixed: error handling on getting account details

### 2.2

- fixed: updated authentication method for new endpoints

### 2.1

- updated: more endpoints are now available

### 2.0

- New: Handle Bounces via [AmazonSNS](https://kb.mailster.co/handling-bounces-with-amazonsns/?utm_campaign=wporg&utm_source=AmazonSES+integration+for+Mailster&utm_medium=readme)

### 1.2

- improved resource handling if method is not enabled
- changed file structure

### 1.1.2

- improved routine to prevent duplicates

### 1.1.1

- increased request timeout to prevent false positives

### 1.1

- added support for BCC on WEB API

### 1.0

- initial release

## Additional Info

> This Plugin requires [Mailster Newsletter Plugin for WordPress](https://mailster.co/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=readme&utm_term=AmazonSES)
