<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://joshua.hebditch.dev
 * @since      1.0.0
 *
 * @package    Installer_Search
 * @subpackage Installer_Search/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Installer_Search
 * @subpackage Installer_Search/includes
 * @author     Joshua Hebditch <joshua.hebditch@givenergy.co.uk>
 */
class Installer_Search_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'installer-search',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
