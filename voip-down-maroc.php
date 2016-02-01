<?php

/**
 *
 * @link              http://www.fb.com/imadarchid
 * @since             1.0.0
 * @package           Voip_Down_Maroc
 *
 * @wordpress-plugin
 * Plugin Name:       VoIPDown Badge for Wordpress
 * Plugin URI:        http://www.voipdown.com
 * Description:       VoIPDown est une opération qui a pour but de rassembler le plus grand nombre de sites marocains pour protester contre le blocage de la VoIP, et ceci en intégrant un compteur en bas de leurs pages.
 * Version:           0.2
 * Author:            Imad Archid
 * Author URI:        http://www.fb.com/imadarchid
 * Text Domain:       voip-down-maroc
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-voip-down-maroc-activator.php
 */
function activate_voip_down_maroc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-voip-down-maroc-activator.php';
	Voip_Down_Maroc_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-voip-down-maroc-deactivator.php
 */
function deactivate_voip_down_maroc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-voip-down-maroc-deactivator.php';
	Voip_Down_Maroc_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_voip_down_maroc' );
register_deactivation_hook( __FILE__, 'deactivate_voip_down_maroc' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-voip-down-maroc.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_voip_down_maroc() {

	$plugin = new Voip_Down_Maroc();
	$plugin->run();

}
run_voip_down_maroc();
