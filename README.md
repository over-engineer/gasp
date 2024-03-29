<p align="center">
    <img width="128" height="128" src="https://raw.githubusercontent.com/over-engineer/gasp/master/assets/icon-128x128.png" />
</p>

# Simple Plugin for Google Analytics
[![WordPress Plugin Version](https://img.shields.io/wordpress/plugin/v/overengineer-gasp)](https://wordpress.org/plugins/overengineer-gasp/)
[![WordPress Plugin: Tested WP Version](https://img.shields.io/wordpress/plugin/tested/overengineer-gasp)](https://wordpress.org/plugins/overengineer-gasp/)

😱 GASP. An unofficial WordPress plugin for Google Analytics.

## Table of Contents

* [Installation](#-installation)
* [Usage](#-usage)
* [Bugs & Features](#-bugs--features)
* [Credits](#-credits)
* [License](#-license)

## 📦 Installation

### Automatic installation

Automatic installation is the easiest option — WordPress will handle the file transfer, and you won’t need to leave your web browser.

1. Log in to your WordPress dashboard
2. Navigate to the “Plugins” menu
3. Search for “Simple Plugin for Google Analytics”
4. Click “Install Now” and WordPress will take it from there
5. Activate the plugin through the “Plugins” menu in WordPress

### Manual installation

1. Upload the entire `overengineer-gasp` folder to the `wp-content/plugins/` directory
2. Activate the plugin through the “Plugins” menu in WordPress

## ⌨️ Usage

After [installation and activation](#-installation):

1. In your WordPress dashboard, under “Settings”, you will find the “Google Analytics” menu
2. Copy-paste your **Google Analytics ID**
3. Change any other options
4. Click “Save Changes”

### To find your Google Analytics ID:

1. Sign in to [your Analytics account](https://analytics.google.com/)
2. Click Admin
3. Select an account from the menu in the *ACCOUNT* column
4. Select a property from the menu in the *PROPERTY* column.
5. Under *PROPERTY*, click **Tracking Info > Tracking Code**. Your **Google Analytics ID** is displayed at the top of the page.

The *tracking ID* is a string like `UA-000000-2`. It must be included in your tracking code to tell Analytics which account and property to send data to.

Refer to the [official Analytics Help](https://support.google.com/analytics/answer/1008080?hl=en#GAID) for more.

## 🐞 Bugs & Features

If you have spotted any bugs, or would like to request additional features from the plugin, please [file an issue](https://github.com/over-engineer/gasp/issues).

## 📙 Credits

- Icon designed by the awesome [kwnva](https://kwnva.design/)

## 📖 License

Simple Plugin for Google Analytics is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Simple Plugin for Google Analytics is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Simple Plugin for Google Analytics. If not, see <http://www.gnu.org/licenses/>.
