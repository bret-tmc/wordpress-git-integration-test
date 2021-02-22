<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.dermwarehouse.com
 * @since      1.0.0
 *
 * @package    Git_Integration_Test
 * @subpackage Git_Integration_Test/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Git_Integration_Test
 * @subpackage Git_Integration_Test/includes
 * @author     Chirag Uttamsingh <chirag.uttamsingh@gmail.com>
 */
class Git_Integration_Test_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'git-integration-test',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
