<?php

namespace Xplr\Api\Controller;

class Example {

  public const ROUTE_PREFIX = 'xplr/v1/example';

  public function init() {
    add_action('rest_api_init', function () {

      register_rest_route(self::ROUTE_PREFIX, '/info', [
        'methods' => 'GET',
        'callback' => [$this, 'info'],
        'permission_callback' => '__return_true',
      ]);

      register_rest_route(self::ROUTE_PREFIX, '/posts', [
        'method' => 'GET',
        'callback' => [$this, 'posts'],
        'permission_callback' => '__return_true',
      ]);
    });
  }

  public function info() {
    return new \WP_REST_Response([
      'name' => 'Xplr API',
      'version' => '1.0.0',
    ]);
  }

  public function posts() {
    $posts = get_posts([
      'numberposts' => 10,
      'post_status' => 'publish',
    ]);
    $result = [];

    foreach ($posts as $post) {
      $result[] = [
        'id' => $post->ID,
        'content' => apply_filters('the_content', $post->post_content),
      ];
    }

    return new \WP_REST_Response($result);
  }
}