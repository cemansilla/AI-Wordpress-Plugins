<?php
/*
Plugin Name: Cesar Mansilla 2. Assistant
Description: Plugin que añade un bloque Gutenberg para solicitar y mostrar información de un asistente mediante una API.
Version: 1.0.0
Author: Cesar Mansilla
Author URI: https://cesarmansilla.com.ar
*/

// Definir constantes
define( 'CM_ASSISTANT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'CM_ASSISTANT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Incluir el archivo de registro del bloque
require_once CM_ASSISTANT_PLUGIN_DIR . 'includes/functions.php';

add_action( 'enqueue_block_editor_assets', 'cm_assistant_register_assistant_block' );
//add_action('init', 'cm_assistant_register_assistant_block');
