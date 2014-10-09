<?php
  $colors = [
    "#eb9200", "#8b18a0", "#2e5e9a", "#cf5000", 
    "#c70089", "#470099", "#99005c"
  ];
  $color = $colors[rand(0, 6)];
?>

<div class="module">
  <section class="home">
    <p style="font-size: 110%;" class="welcome-text"><strong><?php echo $page->welcome() ?> </strong></p>
    <div style="font-size: 115%; font-weight: 900; color: <?php echo $color ?>;"><?php echo $page->quote() ?></div>
    <div style="color: <?php echo $color ?>;"><?php echo $page->quoteby() ?></div>
    <?php echo markdown($page->text()) ?>
  </section>
</div>
