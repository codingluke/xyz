<div class="module fotogalerie">
  <div class="swipe-container">
    <ul id="js-swipe" class="swipe-list" data-play="false" style="text-align: center;">
    <?php foreach($page->images() as $img): ?>
      <li class="swipe-item fotogalerie-swipe-item">
        <?php echo thumb($img, array('height' => 500)) ?>
      </li>
    <?php endforeach ?>
    </ul>
    <span class="swipe-prev">
      <img src="/assets/images/arrow_left.png" />
    </span>
    <span class="swipe-next">
      <img src="/assets/images/arrow_right.png" />
    </span>
  </div>
</div>
