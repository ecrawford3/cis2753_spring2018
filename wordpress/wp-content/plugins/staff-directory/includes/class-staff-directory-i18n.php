<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       ecrawford32763.sb.cis
 * @since      1.0.0
 *
 * @package    Staff_Directory
 * @subpackage Staff_Directory/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Staff_Directory
 * @subpackage Staff_Directory/includes
 * @author     Emil Crawford <ecrawford3@cnm.edu>
 */
class Staff_Directory_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'staff-directory',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
