<div class="module">
  <div class="header__image">
    <div class="imgWrap has-overlay">
      <div class="swipe-container">
        <ul id="js-swipe" class="swipe-list" data-play="true"><?php foreach($page->images() as $img): ?><li class="swipe-item"><?php echo thumb($img, array('width' => 900, 'height' => 300)) ?></li><?php endforeach ?></ul>
      </div>

      <div class="ico-wrap" style="width: 25%">
        <img alt="logo" src="/assets/images/logo_with_corner.png" class="logo_big" />
        <img alt="logo" src="/assets/images/logo_with_corner_medium.png" class="logo_medium" />
        <img alt="logo" src="/assets/images/logo_with_corner_small.png" class="logo_small" />
      </div>
    </div>
  </div>
</div>
