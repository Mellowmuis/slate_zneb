$(".scroll-to-bottom").click(function() {
  $(".scroll-to-bottom").hide();
  $('html, body').animate({
    scrollTop: $(".Socket").offset().top
  }, 1500);
  $(".scroll-to-bottom").hide();
});

$(".scroll-to-bottom-gray").click(function() {
  $(".scroll-to-bottom").hide();
  $('html, body').animate({
    scrollTop: $(".Socket").offset().top
  }, 1500);
});
