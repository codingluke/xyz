<?php $header_img = $page->images()->find('header.png') ?>

<div class="module">
  <div class="header__image">
    <div class="imgWrap has-overlay">
      <?php echo thumb($header_img, array('width' => 900, 'height' => 300)) ?>
      <div class="ico-wrap">
        <img src="/assets/images/logo_with_corner.png" class="logo_big" />
        <img src="/assets/images/logo_with_corner_medium.png" class="logo_medium" />
        <img src="/assets/images/logo_with_corner_small.png" class="logo_small" />
      </div>
    </div>
  </div>
</div>
