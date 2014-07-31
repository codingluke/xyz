<?php
  unset($img);
  function in_arith_serie($start, $length, $number) {
    $i = 0;
    $notfinished = true;
    $result = false;
    while($notfinished) {
      if (($start + $length * $i) == $number) {
        $result = true;
        $notfinished = false;
      } else if ($i == $number) {
        $notfinished = false;
      }
      $i++;
    }
    return $result;
  }
  $index = 1;
  $imgs = array();
  $flyer = null;
  foreach($page->images() as $img) {
    if ($img->name() != 'preview' && $img->name() != 'flyer')
      $imgs[] = $img;
    if ($img->name() == 'flyer')
      $flyer = $img;
  }
?>

<div class="module">
  <div class="litegallery">
    <?php if ($flyer != null) { ?>
      <div>
        <img alt="flyer" style="width: 100%" src="<?php echo thumb($flyer, array('width' => 1032), false) ?>" />
      </div>
    <?php } ?>

    <?php foreach($imgs as $img): ?>
    <?php if (in_arith_serie(1, 3, $index)) { ?>
      <div class="litegallery__row--one">
        <img alt="<?php echo $img->name() ?>" class="litegallery__img1" src="<?php echo thumb($img, array('width' => 1032, 'height' => 500, 'crop' => true), false) ?>" />
      </div>
    <?php } elseif (in_arith_serie(2, 3, $index)) { ?>
    <?php
      $type = ($index % 2 == 0) ? "left" : "right";
      $img_size = ($index % 2 == 0) ? 590 : 414;
    ?>
    <div class="litegallery__row--two-<?php echo $type ?>">
        <img class="litegallery__img1" alt="<?php echo $img->name() ?>" src="<?php echo thumb($img, array('width' => $img_size, 'height' => 393, 'crop' => true), false) ?>" />
    <?php } elseif (in_arith_serie(3, 3, $index)) { ?>
    <?php
      $img_size = ($index % 2 == 0) ? 590 : 414;
    ?>
        <img class="litegallery__img2" alt="<?php echo $img->name() ?>" src="<?php echo thumb($img, array('width' => $img_size, 'height' => 393, 'crop' => true), false) ?>" />
      </div>
    <?php } $index++ ?>
    <?php endforeach ?>
  </div>
</div>
