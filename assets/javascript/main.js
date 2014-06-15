$(document).ready(function() {
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
  var breakpointItems = { 0: 1 };
  var insta = slider(el, { breakpointItems: breakpointItems });
  insta.swiper.play();
});
