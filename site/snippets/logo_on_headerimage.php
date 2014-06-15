<?php $header_img = $page->images()->find('header.png') ?>

<div class="module">
  <div class="header__image">
    <div class="imgWrap has-overlay">

      <div class="swipe-container">
        <ul id="js-swipe" class="swipe-list">
          <?php foreach($page->images() as $img): ?>
          <li class="swipe-item">
            <?php echo thumb($img, array('width' => 900, 'height' => 300)) ?>
          </li>
          <?php endforeach ?>
        </ul>
      </div>

      <?php //echo thumb($header_img, array('width' => 900, 'height' => 300)) ?>
      <div class="ico-wrap">
        <img src="/assets/images/logo_with_corner.png" class="logo_big" />
        <img src="/assets/images/logo_with_corner_medium.png" class="logo_medium" />
        <img src="/assets/images/logo_with_corner_small.png" class="logo_small" />
      </div>
    </div>
  </div>
</div>
