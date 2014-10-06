<div class="module">
  <section class="home">
    <p style="font-size: 110%;" class="welcome-text"><strong><?php echo $page->welcome() ?> </strong></p>
      <div style="font-size: 115%; font-weight: 900;"><?php echo $page->quote() ?></div>
      <div><?php echo $page->quoteby() ?></div>
      <?php echo markdown($page->text()) ?>
  </section>
</div>
