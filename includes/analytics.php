<?php
/**
 * Analytics
 *
 * @package GASP
 * @subpackage Analytics
 * @copyright 2019 over-engineer
 * @since 1.0
 */

namespace GASP\Analytics;

// Prevent direct access to files
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Add Google Analytics JavaScript in <head> or before </body>
 */
function add_ga() {
	$options = get_option( 'gasp_settings' );
	$ga_id = $options['ga_id'];
	$location = $options['location'];

	$args = array(
		'anonymize_ip'  => isset( $options['anonymize_ip'] ) && $options['anonymize_ip'],
		'forceSSL'      => isset( $options['force_ssl'] ) && $options['force_ssl']
	);

	$args = apply_filters( 'ga_config_args', $args );

	if ( isset( $ga_id ) && !empty( $ga_id ) ):
		$gtag_src = 'https://www.googletagmanager.com/gtag/js?id=' . $ga_id;

		// Checker whether the Cookiebot plugin is active or not
		if ( \GASP\Utils\is_plugin_active( 'cookiebot/cookiebot.php' ) ):
			?>

			<script type="text/javascript">
                (function() {
                    window.addEventListener('CookiebotOnAccept', function(e) {
                        let config = <?= json_encode( $args ); ?>;
                        if (!Cookiebot.consent.marketing) {
                            /* If a user has been opted-out of marketing cookies
                             * we have to disable the Advertising Features */
                            config['allow_ad_personalization_signals'] = false;
                        }

                        if (Cookiebot.consent.statistics) {
                            // Load gtag.js
                            var ga = document.createElement('script');
                            ga.type = 'text/javascript';
                            ga.async = true;
                            ga.src = '<?= $gtag_src; ?>';

                            var parentElem = document.getElementsByTagName('<?= $location; ?>')[0];
                            parentElem.appendChild(ga);

                            // Initialize Google Analytics
                            window.dataLayer = window.dataLayer || [];
                            function gtag(){dataLayer.push(arguments);}
                            gtag('js', new Date());
                            gtag('config', '<?= $ga_id; ?>', config);
                        }
                    });
                })();
			</script>

		<?php else: ?>

			<script async src="<?= $gtag_src; ?>"></script>
			<script type="text/javascript">
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', '<?= $ga_id; ?>', <?= json_encode( $args ); ?>);
			</script>

		<?php endif;
	endif;
}

/**
 * Add the 'wp_head' or the 'wp_footer' hook depending on the 'location' setting
 */
function init_ga() {
	$options = get_option( 'gasp_settings' );
	$location = $options['location'];

	$ignore_admins = isset( $options['ignore_admins'] ) && $options['ignore_admins'];
	if ( !current_user_can( 'manage_options' ) || !$ignore_admins ) {
		// Check if the Cookiebot plugin is active
		if ( $location == 'head' ) {
			add_action( 'wp_head', 'GASP\Analytics\add_ga' );
		} else if ( $location == 'body' ) {
			add_action( 'wp_footer', 'GASP\Analytics\add_ga' );
		}
	}
}

init_ga();
