<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.nicolabavaro.it
 * @since             1.0.0
 * @package           Selective_Sql_Importer
 *
 * @wordpress-plugin
 * Plugin Name:       Selective SQL Importer
 * Plugin URI:        https://www.nicolabavaro.it
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Nicola Bavaro
 * Author URI:        https://www.nicolabavaro.it
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       selective-sql-importer
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-selective-sql-importer-activator.php
 */
function activate_selective_sql_importer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-selective-sql-importer-activator.php';
	Selective_Sql_Importer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-selective-sql-importer-deactivator.php
 */
function deactivate_selective_sql_importer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-selective-sql-importer-deactivator.php';
	Selective_Sql_Importer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_selective_sql_importer' );
register_deactivation_hook( __FILE__, 'deactivate_selective_sql_importer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-selective-sql-importer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_selective_sql_importer() {

	$plugin = new Selective_Sql_Importer();
	$plugin->run();

}
run_selective_sql_importer();
