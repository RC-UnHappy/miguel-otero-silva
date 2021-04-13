<?php

/** 
Plugin Name: Crud
Description: Crea, edita o borra cualquier tabla de tu aplicación wordpress con este simple plugin.
Version: 0.0.1
Author: MasterXT
License:     GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: crud
Domain Path: /languages/
 */

defined('ABSPATH') or die('Direct access not allowed');

$crud_version = '0.0.1';

define('CRUD_PATH', plugin_dir_path(__FILE__));

define('CRUD_URL', plugin_dir_url(__FILE__));

define('CRUD_DELIMITER', ',');
define('CRUD_NEW_LINE', "\r\n");

add_option('crud_table', '');
add_option('crud_rows_per_page', 20);
add_option('crud_csv_filename', 'export.csv');
add_option('crud_csv_encoding', 'UTF-8');
add_option('crud_csv_columns', 'all');

add_action('plugins_loaded', 'crud_load_textdomain');
function crud_load_textdomain()
{
  load_plugin_textdomain('crud', false, CRUD_PATH . 'languages');
}
