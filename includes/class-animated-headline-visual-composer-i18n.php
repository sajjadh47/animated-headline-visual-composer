<?php
/**
 * This file contains the definition of the Animated_Headline_Visual_Composer_I18n class, which
 * is used to load the plugin's internationalization.
 *
 * @package       Animated_Headline_Visual_Composer
 * @subpackage    Animated_Headline_Visual_Composer/includes
 * @author        Sajjad Hossain Sagor <sagorh672@gmail.com>
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since    2.0.0
 */
class Animated_Headline_Visual_Composer_I18n {
	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since     2.0.0
	 * @access    public
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain(
			'animated-headline-visual-composer',
			false,
			dirname( ANIMATED_HEADLINE_VISUAL_COMPOSER_PLUGIN_BASENAME ) . '/languages/'
		);
	}
}
