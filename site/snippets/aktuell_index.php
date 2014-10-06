<?php $concerts = yaml($page->concerts()) ?>
<?php $root = $pages->findOpen() ?>
<?php $items = $root->children()->visible() ?>

<div class="module">
  <?php foreach($items as $item): ?>
  <?php $img = $item->images()->first() ?>

  <div class="news__row">
    <div class="column-left">
      <div>
        <p>
          <span class="meta"><?php echo $item->title() ?></span>
          <span class="meta"><?php echo $item->datum() ?></span>
          <span class="meta"><a href="<?php echo $item->link() ?>">Link</a></span>
        </p>
      </div>
    </div>
    <div class="column-right">
      <div class="text">
        <?php if (isset($img)) echo thumb($img, array('width' => 255)) ?>
        <?php echo markdown($item->description()) ?>
      </div>
    </div>
  </div>
  <?php unset($img) ?>
  <?php endforeach ?>
</div>
