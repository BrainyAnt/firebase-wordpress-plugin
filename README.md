# Firebase for WordPress Plugin

Contributors:      dalenguyen

Donate link:       https://www.paypal.me/DaleNguyen

Tags:              firebase, wordpress

Requires at least: 3.8.0

Tested up to:      4.9.6

Stable tag:        0.2.0

Requires PHP:      5.2.4

License:           GPLv2 or later

License URI:       http://www.gnu.org/licenses/gpl-2.0.html

Firebase WordPress is a plugin that helps to integrate Firebase features to WordPress

## Description

The Firebase for WordPress Plugin will help to you allow user to login to your WordPress interface - not to WordPress dashboard - from Google Firebase authentication. You can show info of logged in show and able to show data that is only available to your firebase's users.

### Links

* [Github project page](https://github.com/dalenguyen/firebase-wordpress-plugin)
* [View CHANGELOG](https://github.com/dalenguyen/firebase-wordpress-plugin/blob/master/CHANGELOG.md)

## Installation

If installing the plugin from wordpress.org:

1. Upload the entire `/firebase-for-wordpress` directory to the `/wp-content/plugins/` directory.
2. Activate Firebase WordPress Plugin through the 'Plugins' menu in WordPress.
3. Profit.

## Frequently Asked Questions

### What can I do with this Firebase for WordPress plugin?

At version 0.2.0, user can integrate Firebase authentication to WordPress. That means you can log in, log out and show data only to logged in users.

### How can I add login form to WordPress?

After adding Firebase credentials from Settings > Firebase. You can add login form through shortcodes:

```
echo do_shortcode("[firebase_login]");
```

If you want to create your own form. Please start with *<form id='login-form'>*. For submit button, you have to add 'firebase-form-submit' as an ID.

### How can I show user info after login?

You can add a shortcode to show user's info

```
echo do_shortcode("[firebase_greetings]");
```

### How can I hide or show data for logged user?

You can put your data as an HTML code inside a shortcode

```
echo do_shortcode("[firebase_show class='your-class-name']YOUR HTML CODE[/firebase_show]");
```

## Screenshots

1. After activating the plugin, you need enter Firebase credentials under Setting > Firebase.

![Firebase Settings](/assets/screenshot-1.png)

## Changelog

### 0.2.0
* Add scripts & styles
* Allow to show and hide data after login

### 0.1.0
* Started the project and add authentication method

## Upgrade Notice

Please use [github issues](https://github.com/dalenguyen/firebase-wordpress-plugin/issues) when submitting your logs.  Please do not post to the forums.
