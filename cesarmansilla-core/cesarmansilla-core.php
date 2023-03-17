<?php
/*
Plugin Name: Cesar Mansilla 1. Core
Description: Plugin core del ecosistema Cesar Mansilla
Version: 1.0.0
Author: Cesar Mansilla
Author URI: https://cesarmansilla.com.ar
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

include_once ABSPATH . 'wp-admin/includes/plugin.php';
require_once('includes/constants.php');
require_once('includes/functions.php');

add_action('plugins_loaded', 'cesarmansilla_core_init');

register_activation_hook(__FILE__, 'cesarmansilla_install');
register_uninstall_hook(__FILE__, 'cesarmansilla_uninstall');