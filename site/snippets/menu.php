<nav class="nav__top">
  <ul class="list__horizontal--menu">
    <?php foreach($pages->visible() AS $p): ?>
    <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
    <?php endforeach ?>
    <li>
      <a href="<?php echo $site->videolink() ?>" target="_blank">video</a>
    </li>
  </ul>
</nav>
