<?php $concerts = yaml($page->concerts()) ?>

<div class="module">
  <?php foreach($concerts as $concert): ?>
  <?php if (array_key_exists('Img', $concert)) $img = $page->images()->find($concert['Img']) ?>

  <section class="news__row">
    <div class="column-left">
      <div>
        <p>
          <div class="meta"><?php echo $concert['Title'] ?></div>
          <div class="meta"><?php echo $concert['Date'] ?></div>
          <div class="meta"><a href="<?php echo $concert['Link'] ?>">Link</a></div>
        </p>
      </div>
    </div>
    <div class="column-right">
      <div class="text">
        <?php if (isset($img)) echo thumb($img, array('width' => 300, 'height' => 200)) ?>
        <?php echo markdown($concert['Description']) ?>
    </div>
  </section>
  <?php unset($img) ?>
  <?php endforeach ?>
</div>
