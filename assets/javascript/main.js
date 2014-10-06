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

  // Random color for Welcome text.
  //colors = {
    //0: "#bccddd", 1: "#eb9200", 2: "#8b18a0", 3: "#b0dab2", 4: "#ca9886",
    //5: "#2e5e9a", 6: "#cf5000", 7: "#f6d600", 8: "#58c39d", 9: "#c70089",
    //10: "#470099", 11: "#99005c"
  //};
  //$('.welcome-text').css("color", colors[Math.floor(Math.random()*12)]);
});
