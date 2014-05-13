<?php $concerts = yaml($page->concerts()) ?>
<?php $root = $pages->findOpen() ?>
<?php $items = $root->children() ?>

<div class="module">
  <?php foreach($items as $item): ?>
  <?php $img = $item->images()->first() ?>

  <section class="news__row">
    <div class="column-left">
      <div>
        <p>
          <div class="meta"><?php echo $item->title() ?></div>
          <div class="meta"><?php echo $item->datum() ?></div>
          <div class="meta"><a href="<?php echo $item->link() ?>">Link</a></div>
        </p>
      </div>
    </div>
    <div class="column-right">
      <div class="text">
        <?php if (isset($img)) echo thumb($img, array('width' => 300, 'height' => 200)) ?>
        <?php echo markdown($item->description()) ?>
    </div>
  </section>
  <?php unset($img) ?>
  <?php endforeach ?>
</div>
