<?php $root = $pages->findOpen() ?>
<?php $items = $root->children()->visible() ?>
<?php $index = 1; ?>

<div class="module">
  <p>
    <section class="program__row">
    <?php foreach($items as $item): ?>
    <?php $img = $item->images()->find('preview.png'); ?>
    <a href="<?php echo ($item->active() == 'true') ? $item->url() : "#"; ?>">
        <div class="imgWrap has-overlay">
          <?php if (isset($img)) { ?>
            <img src="<?php echo thumb($img, array('width' => 300, 'height' => 300, 'crop' => true), false) ?>" />
          <?php } else { ?>
            <img src="http://placehold.it/300x300" />
          <?php } ?>
        </div>
      </a>
    <?php if ($index % 4 == 0) { ?>
    </section>
    <section class="program__row">
    <?php } ?>
    <?php $index++ ?>
    <?php endforeach ?>
    </section>
  <p>
</div>
