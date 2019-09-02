=== GA Simple Plugin ===
Author URI: https://over-engineer.com/
Plugin URI: https://over-engineer.com/plugins/gasp
Contributors: overengineer
Tags: google, analytics, cookiebot
Requires at least: 4.4
Tested up to: 5.2
Requires PHP: 5.6.20
Stable Tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

An unofficial WordPress plugin for Google Analytics.

== Description ==

Google Analytics Simple Plugin (or 😱 GASP for short) is an unofficial WordPress plugin for Google Analytics,
with Cookiebot integration.

= Settings =

Even though this is a really simple plugin, there are settings to:

- Anonymize IPs
- Force SSL
- Ignore administrators
- Choose the location of the script tag (either in `<head>` or `<body>`)

= Cookiebot integration =

If you have installed (and activated) the [Cookiebot WordPress plugin](https://wordpress.org/plugins/cookiebot/),
then “Google Analytics Simple Plugin” will automatically include the Google Analytics code **only** if the user
has given consent for “statistics” cookies. Also, it will disable advertising features (the
`allow_ad_personalization_signals` option of gtag.js) unless the user has given consent for “marketing” cookies.

= Credits =

- [Analytics icon](https://www.iconfinder.com/icons/4202007/analytics_google_logo_social_social_media_icon) by [Flatart](https://www.iconfinder.com/Flatart) is licensed under [CC BY 3.0](https://creativecommons.org/licenses/by/3.0/)

== Installation ==

= Automatic installation =

Automatic installation is the easiest option — WordPress will handle the file transfer,
and you won’t need to leave your web browser.

1. Log in to your WordPress dashboard
2. Navigate to the “Plugins” menu
3. Search for “GASP”
4. Click “Install Now” and WordPress will take it from there
5. Activate the plugin through the “Plugins” menu in WordPress

= Manual installation =

1. Upload the entire `gasp` folder to the `wp-content/plugins/` directory
2. Activate the plugin through the “Plugins” menu in WordPress

= After activation =

1. In your WordPress dashboard, under “Settings”, you will find the “Google Analytics” menu
2. Copy-paste your **Google Analytics ID**
3. Change any other options
4. Click “Save Changes”

To find your Google Analytics ID:

1. Sign in to [your Analytics account](https://analytics.google.com/)
2. Click Admin
3. Select an account from the menu in the *ACCOUNT* column
4. Select a property from the menu in the *PROPERTY* column.
5. Under *PROPERTY*, click **Tracking Info > Tracking Code**.
Your **Google Analytics ID** is displayed at the top of the page.

The *tracking ID* is a string like `UA-000000-2`.
It must be included in your tracking code to tell Analytics which account and property to send data to.

Refer to the [official Analytics Help](https://support.google.com/analytics/answer/1008080?hl=en#GAID) for more.

== Frequently Asked Questions ==

= How is this different from all the other Google Analytics plugins? =

It's really simple and I mean _really simple_. Oh, and it works with [Cookiebot](https://www.cookiebot.com/).

= Is this GDPR compliant? =

While no single plugin can guarantee 100% GDPR compliance in WordPress, here’s what I did with this plugin:

- There is a setting to anonymize IPs
- There is a setting to force SSL
- There is an integration with Cookiebot

Other than that, IANAL (I am not a lawyer) and **I cannot guarantee 100% GDPR compliance**.

= How to anonymize IPs? =

1. Log in to your WordPress dashboard
2. Under “Settings”, select “Google Analytics”
3. Enable the “Anonymize IPs” option
4. Click “Save Changes”

= How to force SSL? =

1. Log in to your WordPress dashboard
2. Under “Settings”, select “Google Analytics”
3. Enable the “Force SSL” option
4. Click “Save Changes”

= How to prevent tracking of administrators? =

1. Log in to your WordPress dashboard
2. Under “Settings”, select “Google Analytics”
3. Enable the “Ignore administrators” option
4. Click “Save Changes”

= Where can I report any bugs and/or request additional features? =

If you have spotted any bugs, or would like to request additional features from the plugin,
please [file an issue](https://github.com/over-engineer/gasp/issues).

== Screenshots ==

1. Plugin settings screen

== Changelog ==

= 1.0: September 2, 2019 =

* Initial version.
