<?php
/**
 * Plugin Name: Google Analytics Simple Plugin
 * Plugin URI: https://over-engineer.com/plugins/gasp
 * Description: An unofficial WordPress plugin for Google Analytics.
 * Version: 1.0
 * Author: over-engineer
 * Author URI: https://over-engineer.com/
 * Text Domain: gasp
 * Domain Path: /languages
 * License: GPLv2
 *
 * Google Analytics Simple Plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Google Analytics Simple Plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Google Analytics Simple Plugin. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package GASP
 * @author over-engineer
 * @copyright 2019 over-engineer
 * @version 1.0
 */

namespace GASP;

// Prevent direct access to files
if ( !defined( 'ABSPATH' ) ) exit;

if ( !class_exists( 'GASP' ) ):

	/**
	 * Main GASP Class
	 */
	final class GASP {
		/**
		 * The version number of GASP
		 */
		private $version = '1.0';

		/**
		 * GASP constructor
		 */
		public function __construct() {
			$this->setup_constants();
			$this->includes();
		}

		/**
		 * Setup plugin constants
		 */
		private function setup_constants() {
			if ( !defined( 'GASP\VERSION' ) ) {
				define( 'GASP\VERSION', $this->version );
			}

			if ( !defined( 'GASP_PLUGIN_DIR' ) ) {
				define( 'GASP\PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
			}

			if ( !defined( 'GASP\PLUGIN_URL' ) ) {
				define( 'GASP\PLUGIN_URL', plugin_dir_url( __FILE__ ) );
			}

			if ( !defined( 'GASP\PLUGIN_FILE' ) ) {
				define( 'GASP\PLUGIN_FILE', __FILE__ );
			}
		}

		/**
		 * Include required files
		 */
		private function includes() {
			require_once __DIR__ . '/includes/admin/settings.php';
			require_once __DIR__ . '/includes/utils.php';
			require_once __DIR__ . '/includes/analytics.php';
		}
	}

endif;

/**
 * Load the plugin
 */
function gasp_load() {
	new GASP();
}

add_action( 'plugins_loaded', 'GASP\gasp_load' );