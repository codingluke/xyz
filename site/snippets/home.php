<div class="module">
  <section class="home">
    <p style="font-size: 110%"><strong><?php echo $page->welcome() ?> </strong></p>
    <p>
      <div style="font-size: 115%; font-weight: 900"><?php echo $page->quote() ?></div>
      <div><?php echo $page->quoteby() ?></div>
    </p>
    <p><?php echo markdown($page->text()) ?></p>
  </section>
</div>
