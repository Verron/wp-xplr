<?php

/**
  var WP_Block @block
  var array $attributes
  var string $content
 */

 ?>

 <div>
  <p><?= $attributes['description'] ?></p>
  <p>
    <a href="<?= $attributes['link'] ?>" target="_blank">
      <?= $attributes['price'] ?> @ <?= $attributes['source'] ?>
    </a>
</p>
</div>