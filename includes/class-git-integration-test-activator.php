<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.dermwarehouse.com
 * @since      1.0.0
 *
 * @package    Git_Integration_Test
 * @subpackage Git_Integration_Test/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Git_Integration_Test
 * @subpackage Git_Integration_Test/includes
 * @author     Chirag Uttamsingh <chirag.uttamsingh@gmail.com>
 */
class Git_Integration_Test_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		$logger = new WC_Logger();
		$logger->debug('Git Integration Test Activated');

	}

}
