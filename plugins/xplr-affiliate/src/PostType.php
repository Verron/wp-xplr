<?php

namespace Xplr\Affiliate;

class PostType {
  public function init() {
    register_post_type('affiliate', [
      'labels' => [
        'name' => __('Affiliates', 'xplr-affiliate'),
        'singular_name' => __('Affiliate', 'xplr-affiliate'),
        'add_new' => __('Add Affiliate', 'xplr-affiliate'),
        'add_new_item' => __('Add Affiliate', 'xplr-affiliate'),
      ],
      'public' => true,
      'has_archive' => true,
    ]);
  }
}