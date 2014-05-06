<div class="module">
  <?php $img = $page->images()->find('img1.png') ?>
  <section class="members__row">
    <div>
      <?php if (isset($img)) echo thumb($img) ?>
      <?php echo markdown($page->text()) ?>
    </div>
  </section>
  <?php unset($img) ?>
</div>
