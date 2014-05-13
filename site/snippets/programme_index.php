<?php $root = $pages->findOpen() ?>
<?php $items = $root->children()->visible() ?>
<?php $index = 1; ?>

<div class="module">
  <p>
    <section class="program__row">
    <?php foreach($items as $item): ?>
    <a href="<?php echo $item->url() ?>">
        <div class="imgWrap has-overlay">
          <img src="http://placehold.it/300x300" />
          <div class="ico-wrap">
          <h3><?php echo $item->title() ?></h3>
          </div>
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
