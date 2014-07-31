<?php $img = $page->images()->find('preview.png'); ?>

<div class="module">
  <div class="programm__detail">
    <div class="column-left">
      <?php if (isset($img)) { ?>
        <img alt="<?php echo $img->name() ?>" src="<?php echo thumb($img, array('width' => 300, 'height' => 300), false) ?>" />
      <?php } else { ?>
        <img alt="placeholder" src="http://placehold.it/300x300" />
      <?php } ?>
    </div>
    <div class="column-right">
      <h1><?php echo $page->title() ?></h1>
      <?php echo markdown($page->text()) ?>
    </div>
  </div>
</div>

<?php echo snippet("gallery") ?>
