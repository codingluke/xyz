<?php $members = yaml($page->members()) ?>

<div class="module">
  <?php foreach($members as $member): ?>
  <?php if (array_key_exists('Img', $member)) $img = $page->images()->find($member['Img']) ?>
  <section class="members__row">
    <div>
      <?php if (isset($img)) echo thumb($img, array('width' => 300, 'height' => 300)) ?>
      <?php echo markdown($member['Description']) ?>
    </div>
  </section>
  <?php unset($img) ?>
  <?php endforeach ?>
</div>
