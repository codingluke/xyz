<div class="module">
  <?php $img = $page->images()->first() ?>
  <section class="members__row">
    <div class="column-left">
      <?php echo markdown($page->text()) ?>
    </div>
    <div class="column-right">
      <p>
        <img src="<?php if (isset($img)) echo thumb($img, array('width' => 300), false) ?>" />
      </p>
    </div>
  </section>
  <?php unset($img) ?>
</div>
