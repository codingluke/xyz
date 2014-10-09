$(document).ready(function() {
  
  // Slider
  $("#nav_button").click(function () {
    $pageWrap = $('.pageWrap');
    if ($pageWrap.hasClass('show-nav')) {
      $pageWrap.removeClass('show-nav');
    } else {
      $pageWrap.addClass('show-nav');
    }
  });
  var slider = require('fluid-slider');
  var el = document.getElementById('js-swipe');
  var breakpointItems = { 0 : 1 };
  var insta = slider(el, { breakpointItems: breakpointItems });
  if ($(el).data().play)
    insta.swiper.play();
  $('.swipe-next').click(function() {
    if (insta.swiper.isLast()) {
      insta.swiper.show(0);
    } else {
      insta.swiper.next();
    }
  });
  $('.swipe-prev').click(function() {
    if (insta.swiper.isFirst()) {
      insta.swiper.show(insta.swiper.visible - 1);
    } else {
      insta.swiper.prev();
    }
  });
});
