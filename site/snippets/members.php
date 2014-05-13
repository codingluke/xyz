<?php $root = $pages->findOpen() ?>
<?php $items = $root->children() ?>
<?php $index = 1; ?>

<div class="module">
  <?php foreach($items as $member): ?>
  <?php $img = $member->images()->first() ?>
  <section class="members__row">
    <div class="column-left">
      <?php echo markdown($member->description()) ?>
    </div>
    <div class="column-right">
      <p>
        <img src="<?php echo thumb($img, array('width' => 300, 'height' => 300), false) ?>" />
      </p>
    </div>
  </section>
  <?php unset($img) ?>
  <?php endforeach ?>
</div>
