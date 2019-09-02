<?php
/**
 * Utilities
 *
 * @package GASP
 * @subpackage Utils
 * @copyright 2019 over-engineer
 * @since 1.0
 */

namespace GASP\Utils;

// Prevent direct access to files
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Return whether the WordPress plugin with the given path is active or not
 *
 * @param string $path      The path of the main PHP file for the plugin to check
 * @return boolean          Whether the WordPress plugin is active or not
 */
function is_plugin_active( $path ) {
	$active_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );
	return in_array( $path, $active_plugins );
}
