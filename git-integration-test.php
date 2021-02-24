<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.dermwarehouse.com
 * @since             3.0.0
 * @package           Git_Integration_Test
 *
 * @wordpress-plugin
 * Plugin Name:       Git Integration Test
 * Plugin URI:        https://www.dermwarehouse.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           3.0.0
 * Author:            Chirag Uttamsingh
 * Author URI:        https://www.dermwarehouse.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       git-integration-test
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/chiragu/wordpress-git-integration-test
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
define( 'GIT_INTEGRATION_TEST_VERSION', '3.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-git-integration-test-activator.php
 */
function activate_git_integration_test() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-git-integration-test-activator.php';
	Git_Integration_Test_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-git-integration-test-deactivator.php
 */
function deactivate_git_integration_test() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-git-integration-test-deactivator.php';
	Git_Integration_Test_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_git_integration_test' );
register_deactivation_hook( __FILE__, 'deactivate_git_integration_test' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-git-integration-test.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_git_integration_test() {

	$plugin = new Git_Integration_Test();
	$plugin->run();

}
run_git_integration_test();
