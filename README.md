# Mailster AmazonSES Integration

Contributors: everpress, mailster, xaverb  
Tags: mailster, ses, amazon, newsletter, mailsteresp  
Requires at least: 6.0  
Tested up to: 6.8  
Stable tag: 2.16.0  
Requires PHP: 7.4
License: GPLv2 or later  
Author: EverPress  
Author URI: <https://mailster.co>

Deliver Mailster newsletters with Amazon SES via WEB API or SMTP, with region choice and Amazon SNS bounce handling.

## Description

**Mailster AmazonSES Integration** connects [Amazon Simple Email Service (Amazon SES)](https://aws.amazon.com/ses/) to the [Mailster Newsletter Plugin for WordPress](https://mailster.co/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=readme&utm_term=AmazonSES) so you can send campaigns and transactional mail through AWS instead of your web host’s mail server.

Use it when you want scalable, pay-as-you-go newsletter delivery on Amazon SES while keeping Mailster’s campaign editor, lists, and automation.

> This plugin requires [Mailster](https://mailster.co/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=readme&utm_term=AmazonSES) **4.0** or newer and an [Amazon Web Services (AWS)](https://aws.amazon.com/) account with Amazon SES (and optionally Amazon SNS for bounce notifications). Outgoing email content and delivery metadata are sent to Amazon SES. When Amazon SNS bounce handling is enabled, bounce and complaint notifications are received from AWS.

### Why send Mailster newsletters with Amazon SES?

- **Amazon SES delivery for Mailster** — Register AmazonSES as a delivery method under **Newsletter → Settings → Delivery**.
- **WEB API or SMTP** — Send via the recommended SES WEB API, or use the SES SMTP interface with TLS or SSL when you prefer SMTP credentials.
- **AWS access keys and regions** — Configure your Access Key and Secret Key and choose from supported SES regions (for example N. Virginia, Ireland, Frankfurt, Tokyo, and others listed in the settings).
- **Verified identities** — Check whether Mailster’s From, Reply-To, and Bounce addresses are verified in SES, and start email identity verification from the settings screen.
- **Auto-update send limits** — Optionally sync Mailster’s send limits with your Amazon SES sending quota (recommended).
- **Bounce handling** — Use Mailster’s built-in bounce settings, or handle bounces and complaints via [Amazon SNS](https://kb.mailster.co/handling-bounces-with-amazonsns/?utm_campaign=wporg&utm_source=AmazonSES+integration+for+Mailster&utm_medium=readme) for more reliable feedback.

### How it works

1. Install and activate **Mailster AmazonSES Integration** alongside Mailster 4.0+.
2. Create IAM access keys for SES and verify your sending domain or email identities in the AWS SES console. New SES accounts start in sandbox mode until you [request production access](https://aws.amazon.com/ses/fullaccessrequest/).
3. Open **Newsletter → Settings → Delivery**, select the **AmazonSES** tab, enter your credentials and region, and save.
4. Choose WEB API or SMTP, optionally enable automatic send-limit updates, and configure bounce handling (Mailster or Amazon SNS).
5. Send a test email, then run your Mailster campaigns through Amazon SES.

Setup walkthrough: [Send your newsletters via Amazon’s SES](https://kb.mailster.co/send-your-newsletters-via-amazons-ses/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=readme&utm_term=AmazonSES). Addon overview: [mailster.co](https://mailster.co/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=readme&utm_term=AmazonSES).

## Installation

1. Upload the entire `mailster-amazonses` folder to the `/wp-content/plugins/` directory, or install from the WordPress plugins screen.
2. Activate the plugin through the **Plugins** menu in WordPress.
3. Make sure [Mailster](https://mailster.co/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=readme&utm_term=AmazonSES) 4.0+ is installed and active.
4. In AWS, create SES-capable IAM access keys, verify your domain or From address, and request production access if you need to send to unverified recipients.
5. Go to **Settings → Newsletter → Delivery**, open the **AmazonSES** tab, enter your Access Key, Secret Key, and region, then save.
6. Choose WEB API (recommended) or SMTP, configure bounce handling if needed, and send a test email.

For Amazon SNS bounce setup, follow [Handling bounces with AmazonSNS](https://kb.mailster.co/handling-bounces-with-amazonsns/?utm_campaign=wporg&utm_source=AmazonSES+integration+for+Mailster&utm_medium=readme).

## Frequently Asked Questions

### Does this plugin work without Mailster?

No. This is a delivery addon for the [Mailster Newsletter Plugin](https://mailster.co/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=readme&utm_term=AmazonSES) and requires Mailster **4.0** or newer.

### Do I need an AWS account?

Yes. You need an AWS account with Amazon SES enabled, IAM access keys that can use SES, and verified email or domain identities for the addresses you send from.

### What is the difference between WEB API and SMTP?

**WEB API** (recommended) sends through the Amazon SES API. **SMTP** uses Amazon SES SMTP credentials over TLS (port 587) or SSL (port 465). Both options are available in the AmazonSES delivery settings.

### Why can’t I send to my subscribers yet?

New Amazon SES accounts are often in **sandbox** mode and can only send to verified addresses. Request [production access](https://aws.amazon.com/ses/fullaccessrequest/) in AWS, and verify your From domain or email identities in SES.

### Can Mailster handle SES bounces automatically?

Yes. You can keep Mailster’s bounce settings, or switch bounce handling to **Amazon SNS** and subscribe your site’s endpoint to SES bounce and complaint notifications. See the [Amazon SNS bounce guide](https://kb.mailster.co/handling-bounces-with-amazonsns/?utm_campaign=wporg&utm_source=AmazonSES+integration+for+Mailster&utm_medium=readme).

### Is email data sent to a third party?

Yes. When this delivery method is active, Mailster sends email content and related delivery data to **Amazon SES** so messages can be delivered. If you enable Amazon SNS bounce handling, AWS sends bounce and complaint notifications to your WordPress site’s endpoint.

### Where can I get support?

For Mailster and this addon, see [mailster.co](https://mailster.co/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=readme&utm_term=AmazonSES) and the [SES setup guide](https://kb.mailster.co/send-your-newsletters-via-amazons-ses/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=readme&utm_term=AmazonSES). For AWS account, billing, and SES console questions, use [AWS documentation](https://docs.aws.amazon.com/ses/).

## Screenshots

### 1. Options interface

![Option Interface.](https://ps.w.org/mailster-amazonses/assets/screenshot-1.png)

## Changelog

### 2.16.0

- fixed: missing settings in the settings page

### 2.15.0

- fixed: error with missing $Version property in PHPMailer

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
