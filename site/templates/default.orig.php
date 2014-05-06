<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>
    <?php $events= yaml($page->events()) ?>

    <?php foreach($events as $event): ?>
      <div class="event">
      <?php echo $event['Street'] ?><br />
      <?php echo $event['ZIP'] ?> <?php echo $event['City'] ?><br />
      Date: <?php echo $event['Date'] ?> 
      </div>
    <?php endforeach ?>
  </article>

</section>

<?php snippet('footer') ?>
