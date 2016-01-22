<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.fb.com/imadarchid
 * @since      1.0.0
 *
 * @package    Voip_Down_Maroc
 * @subpackage Voip_Down_Maroc/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Voip_Down_Maroc
 * @subpackage Voip_Down_Maroc/includes
 * @author     Imad Archid <imadarchid@gmail.com>
 */
class Voip_Down_Maroc_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'voip-down-maroc',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
