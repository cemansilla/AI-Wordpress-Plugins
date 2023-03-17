<?php
function cm_assistant_register_assistant_block()
{
  $cm_api_base_url = get_option('cm_api_base_url');
  $asset_file = include(CM_ASSISTANT_PLUGIN_DIR . 'build/index.asset.php');

  wp_enqueue_script(
    'assistant-block-script',
    CM_ASSISTANT_PLUGIN_URL . 'build/index.js',
    $asset_file['dependencies'],
    $asset_file['version']
  );
  wp_localize_script(
    'assistant-block-script',
    'cm_vars',
    array(
      'api_url' => $cm_api_base_url,
    )
  );

  register_block_type('assistant-block/assistant', array(
    'editor_script' => 'assistant-block',
  ));
}
