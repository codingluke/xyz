<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
    <meta name="description" content="<?php echo html($site->description()) ?>" />
    <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, target-densityDpi=device-dpi">
    <meta name="robots" content="index, follow" />

    <link rel="shortcut icon" href="/favicon.ico">
    <?php echo css('assets/styles/main.css') ?>
    <?php echo css('assets/styles/slider.css') ?>

  </head>
  <body>
    <!--[if lt IE 10]>
     <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="pageWrap">
      <?php snippet('menu') ?>

      <div class="pageContent">

        <div class="top__nav__button" id="nav_button">
          <span class="stripe"></span>
        </div>

        <?php ($page->images()->find('header.png')) ? snippet('logo_on_headerimage') : snippet('logo') ?>

        <?php if ($page->snippet() != '') snippet($page->snippet()) ?>
      </div>

      <div class="footer">
        <div class="container">
          <a href="<?php echo $site->videolink() ?>" target="_blank" class="video-button"></a>
          <ul class="list__horizontal--languages">
            <?php $test = array('left-bottom', 'left-top', 'right-bottom', 'right-top') ?>
            <?php $index = 0 ?>
            <?php $arrr = explode(',', $site->languages()) ?>
            <?php foreach(c::get('lang.available') as $lang): ?>
            <?php $classname = ($lang == c::get('lang.current')) ? 'active' : ''; ?>
            <li class="<?php echo $classname ?>" style="<?php echo (in_array($lang, $arrr)) ? '' : 'display: none;'?>">
              <a href="<?php echo $page->url($lang) ?>">
                <div class="<?php echo $test[$index] ?>"><?php echo $lang ?></div>
              </a>
            </li>
            <?php $index++ ?>
            <?php endforeach ?>
          </ul>
        </div>
        <div class="authors"><?php echo $site->authors() ?></div>
      </div>
    </div>

    <?php echo js('assets/javascript/jquery.min.js') ?>
    <?php echo js('assets/javascript/slider.js') ?>
    <?php echo js('assets/javascript/main.js') ?>
  </body>
</html>
