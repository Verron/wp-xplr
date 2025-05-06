<?php

/**
 * Blocks Plugin for Xplr
 *
 * @package Xplr_Blocks
 * @version 1.0.0
 */

 /*
Plugin Name: Xplr Blocks
Description: A collection of custom blocks for Xplr.
Author: Verron Knowles
 */

 function wp_blocks_notice()
 {
   echo "<p>Xplr Blocks plugin is active!</p>";
 }

 add_action('admin_notices', 'wp_blocks_notice');

 function load_blocks()
 {
  $directory = plugin_dir_path(__FILE__) . 'blocks/';

  $blocks = glob($directory . '**', GLOB_ONLYDIR);

  if ($blocks) {
    foreach ($blocks as $block) {
      if (file_exists($block) && file_exists($block . '/block.json')) {
        register_block_type($block);
      }
    }
  }
 }

 add_action('init', 'load_blocks');