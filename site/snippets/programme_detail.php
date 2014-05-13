<?php $img = $page->images()->find('preview.png'); ?>

<div class="module">
<p>
  <div class="programm__detail">
    <div class="column-left">
      <?php if (isset($img)) { ?>
        <img src="<?php echo thumb($img, array('width' => 300, 'height' => 300), false) ?>" />
      <?php } else { ?>
        <img src="http://placehold.it/300x300" />
      <?php } ?>
    </div>
    <div class="column-right">
      <h1><?php echo $page->title() ?></h1>
      <?php echo markdown($page->text()) ?>
    </div>
  </div>
</p>
</div>

<?php echo snippet("gallery") ?>
