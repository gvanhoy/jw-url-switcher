<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://live.nyword.church
 * @since             0.1.0
 * @package           JW_URL_Switcher
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Plugin Boilerplate
 * Plugin URI:        https://live.nyword.church/jw-url-switcher-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.1.0
 * Author:            Garrett Vanhoy or Your Company
 * Author URI:        https://live.nyword.church/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jw-url-switcher
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 0.1.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'JW_URL_SWITCHER_VERSION', '0.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-jw-url-switcher-activator.php
 */
function activate_jw_url_switcher() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jw-url-switcher-activator.php';
	JW_URL_Switcher_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jw-url-switcher-deactivator.php
 */
function deactivate_jw_url_switcher() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jw-url-switcher-deactivator.php';
	JW_URL_Switcher_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_jw_url_switcher' );
register_deactivation_hook( __FILE__, 'deactivate_jw_url_switcher' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-jw-url-switcher.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0
 */
function run_jw_url_switcher() {

	$plugin = new JW_URL_Switcher();
	$plugin->run();

}
run_jw_url_switcher();
