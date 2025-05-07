<?php

/**
 * A collection of custom API endpoints for xplr.
 * @package Xplr_API
 * @version 1.0.0
 */

/*
Plugin Name: Xplr API
Description: A collection of custom API endpoints for Xplr.
Author: Verron Knowles
*/

if (defined('ABSPATH')) {
  if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
  }
}


add_action('init', function () {
  $example = new \Xplr\Api\Controller\Example();
  $example->init();
});