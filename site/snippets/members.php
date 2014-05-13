<?php $root = $pages->findOpen() ?>
<?php $items = $root->children() ?>
<?php $index = 1; ?>

<div class="module">
    <?php foreach($items as $member): ?>
    <?php $img = $member->images()->first() ?>
    <section class="members__row">
      <div>
        <?php echo thumb($img, array('width' => 300, 'height' => 300)) ?>
        <?php echo markdown($member->description()) ?>
      </div>
    </section>
    <?php unset($img) ?>
    <?php endforeach ?>
</div>
