<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://joshua.hebditch.dev
 * @since             1.0.0
 * @package           Installer_Search
 *
 * @wordpress-plugin
 * Plugin Name:       Installer Search
 * Plugin URI:        https://joshua.hebditch.dev
 * Description:       integrate a Nuxt app into a WordPress website
 * Version:           1.0.0
 * Author:            Joshua Hebditch
 * Author URI:        https://joshua.hebditch.dev
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       installer-search
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'INSTALLER_SEARCH_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-installer-search-activator.php
 */
function activate_installer_search() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-installer-search-activator.php';
	Installer_Search_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-installer-search-deactivator.php
 */
function deactivate_installer_search() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-installer-search-deactivator.php';
	Installer_Search_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_installer_search' );
register_deactivation_hook( __FILE__, 'deactivate_installer_search' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-installer-search.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_installer_search() {

	$plugin = new Installer_Search();
	$plugin->run();

}
run_installer_search();
