<?php
/**
 * This file contains the definition of the WP_Edit_Username_Admin class, which
 * is used to load the plugin's admin-specific functionality.
 *
 * @package       Animated_Headline_Visual_Composer
 * @subpackage    Animated_Headline_Visual_Composer/admin
 * @author        Sajjad Hossain Sagor <sagorh672@gmail.com>
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version and other methods.
 *
 * @since    2.0.0
 */
class Animated_Headline_Visual_Composer_Admin {
	/**
	 * The ID of this plugin.
	 *
	 * @since     2.0.0
	 * @access    private
	 * @var       string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since     2.0.0
	 * @access    private
	 * @var       string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since     2.0.0
	 * @access    public
	 * @param     string $plugin_name The name of this plugin.
	 * @param     string $version     The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version     = $version;
	}

	/**
	 * Displays admin notices in the admin area.
	 *
	 * This function checks if the required plugin is active.
	 * If not, it displays a warning notice and deactivates the current plugin.
	 *
	 * @since     2.0.0
	 * @access    public
	 */
	public function admin_notices() {
		// Check if required plugin is active.
		if ( ! is_plugin_active( 'js_composer/js_composer.php' ) ) {
			printf(
				'<div class="notice notice-warning is-dismissible"><p>%s</p></div>',
				esc_html__( 'Animated Headline – Visual Composer (WPBakery Page Builder) requires Visual Composer (WPBakery Page Builder) plugin to be active!', 'animated-headline-visual-composer' ),
			);

			// Deactivate the plugin.
			deactivate_plugins( ANIMATED_HEADLINE_VISUAL_COMPOSER_PLUGIN_BASENAME );
		}
	}
}
