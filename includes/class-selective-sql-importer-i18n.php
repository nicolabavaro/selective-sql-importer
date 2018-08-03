<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.nicolabavaro.it
 * @since      1.0.0
 *
 * @package    Selective_Sql_Importer
 * @subpackage Selective_Sql_Importer/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Selective_Sql_Importer
 * @subpackage Selective_Sql_Importer/includes
 * @author     Nicola Bavaro <nicola.bavaro@gmail.com>
 */
class Selective_Sql_Importer_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'selective-sql-importer',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
