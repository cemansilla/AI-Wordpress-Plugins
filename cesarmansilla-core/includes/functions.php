<?php
function cesarmansilla_install() {
  update_option('cm_api_base_url', CM_CORE_API_URL);
}

function cesarmansilla_uninstall() {
  delete_option('cm_api_base_url');
}

function cesarmansilla_core_init()
{
  $plugins = array(
    'Cesar Mansilla Assistant' => 'plugins/cesarmansilla-assistant/cesarmansilla-assistant.php'
  );

  foreach ($plugins as $plugin_name => $plugin_path) {
    if (is_plugin_active($plugin_path)) {
      //Plugin activado...
    } else {
      //Plugin no activado...
    }
  }
}