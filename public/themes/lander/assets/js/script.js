
$(".header .header__bars").on('click', function () {

  var selector = $(".header .header__nav")

  if (selector.hasClass('shown')) {
    selector.css('right', "100%");
    selector.removeClass('shown');
  } else {
    selector.css('right', "0");
    selector.addClass('shown');
  }
});

$(".header .header__nav span").on('click', function () {

  var selector = $(".header .header__nav")

  if (selector.hasClass('shown')) {
    selector.css('right', "100%");
    selector.removeClass('shown');
  } else {
    selector.css('right', "0");
    selector.addClass('shown');
  }
});

var clientSlider = new Swiper(".clients__slider", {
  loop: true,
  speed: 800,
  autoplay: {
    delay: 3000,
  },
  breakpoints: {
    300: {
      slidesPerView: 2,
    },
    767.98: {
      slidesPerView: 3,
    },
    991.98: {
      slidesPerView: 5,
    },
  }
});


var serviceSlider = new Swiper(".testimonial__slider", {
  loop: true,
  speed: 800,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: '.arrow-button-next',
    prevEl: '.arrow-button-prev',
  },
});
