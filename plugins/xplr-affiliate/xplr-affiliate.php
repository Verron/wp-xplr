<?php
/**
 * A place to manage affiliate content
 *
 * @package Xplr_Affiliate
 * @version 1.0.0
 *
 * @wordpress-plugin
 * Plugin Name: Xplr Affiliate
 * Description: A collection of custom affiliate content for Xplr.
 * Author: Verron Knowles
 */

if (defined('ABSPATH')) {
  if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
  }
}

 function xplr_affiliate_notice() {
  echo "<p> XPLR Affiliate Content</p>";
 }

 add_action('admin_notices', 'xplr_affiliate_notice');

add_action('init', function () {
  $post_type = new \Xplr\Affiliate\PostType();
  $post_type->init();
});