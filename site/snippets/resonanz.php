<?php
  $root = $pages->findOpen();
  $items = $root->children()->visible();
  $index = 1;
?>

<div class="module">
  <?php foreach($items as $resonanz): ?>
  <?php
    $imgs = array();
    foreach($resonanz->images() as $img)
      if ($img->name() != 'preview')
        $imgs[] = $img;
      else
        $icon = $img;
  ?>
  <div class="resonanz__row">
    <div>
      <?php if (isset($icon)) { ?>
        <p>
          <img class="image-right" alt="<?php echo $icon->name() ?>"
               src="<?php echo thumb($icon, array('width' => 300, 'height' => 300), false) ?>" />
        </p>
      <?php } ?>
      <?php echo markdown($resonanz->description()) ?>
      <?php foreach($imgs as $img): ?>
      <p>
      <img style="max-width: 70%"
           src="<?php echo thumb($img, array('width' => $img->width()), false) ?>"
           alt="<?php echo $img->name() ?>" />
      </p>
      <?php endforeach ?>
    </div>
  </div>
  <?php unset($img) ?>
  <?php endforeach ?>
</div>
