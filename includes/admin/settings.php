<?php
/**
 * Plugin settings
 *
 * @package GASP
 * @subpackage Settings
 * @copyright 2019 over-engineer
 * @since 1.0
 */

namespace GASP\Settings;

// Prevent direct access to files
if ( !defined( 'ABSPATH' ) ) exit;

add_action( 'admin_menu', 'GASP\Settings\add_admin_menu' );
add_action( 'admin_init', 'GASP\Settings\settings_init' );

function add_admin_menu() {
	add_options_page( __( 'Google Analytics', 'overengineer-gasp' ),
		__( 'Google Analytics', 'overengineer-gasp' ),
		'manage_options',
		'gasp',
		'GASP\Settings\options_page' );
}

function settings_init() {
	register_setting( 'gasp_plugin_page', 'gasp_settings' );

	add_settings_section(
		'gasp_main_section',
		__( 'Main settings', 'overengineer-gasp' ),
		'GASP\Settings\settings_section_callback',
		'gasp_plugin_page' );

	add_settings_field(
		'ga_id',
		__( 'Google Analytics ID', 'overengineer-gasp' ),
		'GASP\Settings\render_field_ga_id',
		'gasp_plugin_page',
		'gasp_main_section' );

	add_settings_field(
		'anonymize_ip',
		__( 'Anonymize IPs', 'overengineer-gasp' ),
		'GASP\Settings\render_field_anonymize_ip',
		'gasp_plugin_page',
		'gasp_main_section' );

	add_settings_field(
		'force_ssl',
		__( 'Force SSL', 'overengineer-gasp' ),
		'GASP\Settings\render_field_force_ssl',
		'gasp_plugin_page',
		'gasp_main_section' );

	add_settings_field(
		'ignore_admins',
		__( 'Ignore administrators', 'overengineer-gasp' ),
		'GASP\Settings\render_field_ignore_admins',
		'gasp_plugin_page',
		'gasp_main_section' );

	add_settings_field(
		'location',
		__( 'Location', 'overengineer-gasp' ),
		'GASP\Settings\render_field_location',
		'gasp_plugin_page',
		'gasp_main_section' );
}

/**
 * Render Google Analytics ID text field
 */
function render_field_ga_id() {
	$options = get_option( 'gasp_settings' );
	?>

	<input type="text" name="gasp_settings[ga_id]" value="<?php echo $options['ga_id']; ?>" />

	<?php
}

/**
 * Render anonymize IPs checkbox
 */
function render_field_anonymize_ip() {
	$options = get_option( 'gasp_settings' );
	?>

	<input type="checkbox"
	       name="gasp_settings[anonymize_ip]" <?php checked( $options['anonymize_ip'], 1 ); ?>
	       value="1" />

	<?php
}

/**
 * Render force SSL checkbox
 */
function render_field_force_ssl() {
	$options = get_option( 'gasp_settings' );
	?>

	<input type="checkbox"
	       name="gasp_settings[force_ssl]" <?php checked( $options['force_ssl'], 1 ); ?>
	       value="1" />

	<?php
}

/**
 * Render ignore administrators checkbox
 */
function render_field_ignore_admins() {
	$options = get_option( 'gasp_settings' );
	?>

	<input type="checkbox"
	       name="gasp_settings[ignore_admins]" <?php checked( $options['ignore_admins'], 1 ); ?>
	       value="1" />

	<?php
}

/**
 * Render location select dropdown
 */
function render_field_location() {
	$options = get_option( 'gasp_settings' );
	?>

	<select name="gasp_settings[location]">
		<option value="head" <?php selected( $options['location'], 'head' ); ?>>head</option>
		<option value="body" <?php selected( $options['location'], 'body' ); ?>>body</option>
	</select>

	<?php
}

/**
 * Print main section subtitle
 */
function settings_section_callback() {
	_e( 'Configure the Simple Plugin for Google Analytics', 'overengineer-gasp' );
}

/**
 * Print the settings page
 */
function options_page() {
	?>

	<form action="options.php" method="post">
		<h1><?php _e( 'Simple Plugin for Google Analytics', 'overengineer-gasp' ); ?></h1>
		<?php
		settings_fields( 'gasp_plugin_page' );
		do_settings_sections( 'gasp_plugin_page' );
		submit_button();
		?>
	</form>

	<?php
}

