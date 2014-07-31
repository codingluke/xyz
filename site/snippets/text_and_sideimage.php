<div class="module">
  <?php $img = $page->images()->first() ?>
  <div class="members__row">
    <div class="column-left">
      <?php echo markdown($page->text()) ?>
    </div>
    <div class="column-right">
      <p>
        <img alt="<?php echo $img->name(); ?>" src="<?php if (isset($img)) echo thumb($img, array('width' => 300), false) ?>" />
      </p>
    </div>
  </div>
  <?php unset($img) ?>
</div>
