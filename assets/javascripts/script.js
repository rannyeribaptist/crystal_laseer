$(".toggle-navbar").click(function() {
  $(".navbar__content").toggle();
});

window.setTimeout(function() {
  setImageActive();
}, 1000);

$('.next-slide').click(function() {
  $('#slider').slick('slickNext');
  $('#images').slick('slickNext');
  $('#small').slick('slickNext');

  setImageActive();
})

$('.prev-slide').click(function() {
  $('#slider').slick('slickPrev');
  $('#images').slick('slickPrev');
  $('#small').slick('slickPrev');

  setImageActive();
})

function setImageActive() {
  $('#images').find('.slick-slide').addClass('image-filter');
  $('#images').find('.slick-active').removeClass('image-filter');

  $('#small').find('.slick-slide').addClass('image-filter');
  $('#small').find('.slick-active').removeClass('image-filter');
}
