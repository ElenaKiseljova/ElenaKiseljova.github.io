if (screen.width < 1200) {

  /* Удаление элементов, которых нет в планшетной версии */

  removeElementFromMobile("portfolio__line");
  removeElementFromMobile("cases__slider-nav");
  removeElementFromMobile("arrows");
  removeElementFromMobile("reviews__slider-nav");
  removeElementFromMobile("review__slider-nav");
  removeElementFromMobile("breadcrumbs__list");
  removeElementFromMobile("pagination");

  /* Замена слайдера с преимуществами на список с планшетной версии */

  removeElementFromMobile("pluses__tabs");
  removeElementFromMobile("pluses__title");

  if ($(".pluses__list").hasClass("swiper-wrapper")) {
    $(".pluses__list").unwrap();

    $(".pluses__list").removeClass("swiper-wrapper");
    $(".pluses__list").addClass("pluses__list--mobile");
    $(".pluses__list").children().removeClass("swiper-slide");
  }

  if (screen.width < 768) {
    /* Удаление элементов, которых нет в мобильной версии */

    removeElementFromMobile("letters");
  }

  if (screen.width < 570) {
    /* Удаление элементов, которых нет в мобильной версии */

    removeElementFromMobile("we__left");

    if ($(".we__right").hasClass("swiper-container")) {
      $(".we__right").removeClass("swiper-container");
      $(".we__content").removeClass("swiper-wrapper");
      $(".we__item--mobile").removeClass("swiper-slide");
    }
  }

  /* Функция, которая изменяет разметку, чтобы список в слайдер превратился */

  listToSlider(".portfolio__list--mobile", "portfolio__list--slider", "portfolio__item--slider", "portfolio__slider");

  listToSlider(".cases__list--mobile", "cases__list--mobile", "cases__item--mobile", "cases__slider--mobile");

  listToSlider(".creators__list--mobile", "creators__list--slider", "creators__item--slider", "creators__slider");

  listToSlider(".advantages__list", "advantages__list--slider", "advantages__item--slider", "advantages__slider");

  listToSlider(".catalog__list--mobile", "catalog__list--slider", "catalog__item--slider", "catalog__slider");
}


$(document).ready(function () {
  /* catalog slider */

  if ($(".catalog__slider").length > 0) {
    var creatorsSwiper = new Swiper(".catalog__slider", {
      slidesPerView: 1,
      loop: true,
      speed: 400,
      spaceBetween: 30,
      wrapperClass: 'catalog__list--slider',
      slideClass: 'catalog__item--slider',
    });
  }

  /* advantages slider */

  if ($(".advantages__slider").length > 0) {
    var creatorsSwiper = new Swiper(".advantages__slider", {
      slidesPerView: 1,
      loop: true,
      speed: 400,
      spaceBetween: 28,
      wrapperClass: 'advantages__list--slider',
      slideClass: 'advantages__item--slider',

      breakpoints: {
        // when window width is >= 320px
        768: {
          spaceBetween: 30,
          slidesPerView: 2,
        },
      }
    });
  }

  /* creators slider */

  if ($(".creators__slider").length > 0) {
    var creatorsSwiper = new Swiper(".creators__slider", {
      slidesPerView: 1,
      loop: true,
      speed: 400,
      spaceBetween: 30,
      wrapperClass: 'creators__list--slider',
      slideClass: 'creators__item--slider',

      breakpoints: {
        // when window width is >= 320px
        768: {
          slidesPerView: 2,
        },
      }
    });
  }

  /* cases--mobile slider */

  if ($(".cases__slider--mobile").length > 0) {
    var mobileSwiper = new Swiper(".cases__slider--mobile", {
      slidesPerView: 1,
      loop: true,
      speed: 400,
      spaceBetween: 30,
      wrapperClass: 'cases__list--mobile',
      slideClass: 'cases__item--mobile',
      navigation: {
        nextEl: '.arrows__next--mobile',
        prevEl: '.arrows__prev--mobile'
      },
    });

    $(".cases__all").html('/ ' + $('.cases__item--mobile:not(.swiper-slide-duplicate)').length);

    mobileSwiper.on('slideChange', function() {
      var indexSlide;

      if ((mobileSwiper.realIndex + 1) < 10) {
        indexSlide = '0' + (mobileSwiper.realIndex + 1);
      } else {
        indexSlide = mobileSwiper.realIndex + 1;
      }

      $('.cases__current').html(indexSlide);
    });
  }

  /* stage workflow */

  if ($(".stage__slider").length > 0) {
    var stageSwiper = new Swiper(".stage__slider", {
      slidesPerView: 1,
      loop: true,
      speed: 400,
      spaceBetween: 30,
      wrapperClass: 'stage__list',
      slideClass: 'stage__item',


      breakpoints: {
        // when window width is >= 320px
        1200: {
          slidesPerView: 3,
          navigation: {
            nextEl: '.arrows__next--stage',
            prevEl: '.arrows__prev--stage'
          },
        },
      }
    });
  }

  /* FAQ */

  slideUpDown(".faq__item", ".faq__text");

  /* --- */

  if ($(".servis__count").length > 0) {
    $(".servis__count").each(function () {
      var countServis = $(this).parents().index() + 1;

      if (countServis < 10) {
        countServis = '0' + countServis;
      }

      $(this).html(countServis);
    });
  }

  /* types count */

  if ($(".types__item").length > 0) {
    $(".types__item").each(function () {
      var countTypes = $(this).index() + 1;

      if (countTypes < 10) {
        countTypes = '0' + countTypes;
      }

      $(this).find(".types__current").html(countTypes);

      if ($(this).last()) {
        $(".types__all").html(countTypes);
      }
    });
  }

  /* pluses count */

  if ($(".pluses__tabs").length > 0) {
    $(".pluses__tabs-item").each(function () {
      var countPluses = $(this).index() + 1;

      if (countPluses < 10) {
        countPluses = '0' + countPluses;
      }

      $(this).find(".pluses__count").html(countPluses);
    });

    var servicesPluses = new Swiper(".pluses__slider", {
      slidesPerView: 1,
      loop: false,
      speed: 400,
      wrapperClass: 'pluses__list',
      slideClass: 'pluses__item',
      fadeEffect: {
        crossFade: true
      },
      effect: 'fade',
    });

    $(".pluses__tabs-item").click(function () {
      $(".pluses__tabs-item").not($(this)).removeClass("active");

      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
      } else {
        $(this).addClass("active");
      }

      if (servicesPluses) {
        servicesPluses.slideTo($(this).index(), 500, false);
      }
    });
  } else if ($(".pluses__list--mobile").length > 0) {
    $(".pluses__header").click(function () {
      $(".pluses__header").not($(this)).removeClass("active");
      $(".pluses__header").not($(this)).siblings().slideUp("fast");

      if ($(this).hasClass("active")) {
        $(this).siblings().slideUp("fast");

        $(this).removeClass("active");
      } else {
        $(this).siblings().slideDown("fast");

        $(this).addClass("active");
      }
    });
  }

  /* type line */

  if ($(".type__grad").length > 0) {
    $(".type__weight").each(function () {
      var procentLine = 100 - $(this).children(".type__count").html();

      if ($(this).hasClass("type__weight--desktop")) {
        $(this).parents().siblings().children(".type__indicator").children(".type__grad").css("width", procentLine + '%');
      } else {
        $(this).parents().siblings(".type__indicator").children(".type__grad").css("width", procentLine + '%');
      }


    });
  }

  /*mobile menu */

  $(".navigation__menu").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");

      $(".navigation__mobile").fadeOut("fast");
    } else {
      $(this).addClass("active");

      if ($(".services").hasClass("active")) {
        $(".services").removeClass("active");

        $(".we").fadeOut("fast");
      }

      if ($(".filters__button").length > 0) {
        if ($(".filters__button").hasClass("active")) {
          $(".filters__button").removeClass("active");

          $(".filters__checkbox").fadeOut("fast");
        }
      }

      $(".navigation__mobile").fadeIn("fast");
    }
  });

  $(".navigation__close").click(function () {
    $(".navigation__menu").removeClass("active");

    $(".navigation__mobile").fadeOut("fast");
  });

  /* tags cases */

  if ($(".all-tags").length > 0) {
    var tagsHeight = $(".tags").height();

    console.log(tagsHeight);

    $(".all-tags").click(function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");

        $(this).siblings(".tags").css("height", tagsHeight);

        console.log(tagsHeight);
      } else {
        $(this).addClass("active");

        $(this).siblings(".tags").css("height", "auto");
      }
    });
  }

  $("#tags-all").on("change", function () {
    if ($(this).is(":checked")) {
      $(".tags__item--cases").children("input").prop("checked", true);
    } else {
      $(".tags__item--cases").children("input").prop("checked", false);
    }
  });

  /* portfolio slider */

  if ($(".portfolio__slider").length > 0) {
    var portfolioSwiper = new Swiper(".portfolio__slider", {
      slidesPerView: 1,
      loop: true,
      speed: 400,
      spaceBetween: 16,
      wrapperClass: 'portfolio__list',
      slideClass: 'portfolio__item',

      // Responsive breakpoints
      breakpoints: {
        // when window width is >= 320px
        768: {
          spaceBetween: 0,
        },
        // when window width is >= 320px
        1200: {
          slidesPerView: 2,
          spaceBetween: 30,
          navigation: {
            nextEl: '.arrows__next--portfolio',
            prevEl: '.arrows__prev--portfolio'
          },
        },
      }
    });
  }
  /* sort */

  $(".sort__button").click(function () {
    if (!$(this).hasClass("active")) {
      $(this).siblings().removeClass("active");

      $(this).addClass("active");

      sort('cases__list', 'cases__item', 'cases__link', 'cases__picture', 'cases__top');
    }
  });


  /* search */

  $(".search").click(function () {
    if ($(".navigation__menu").hasClass("active")) {
      $(".navigation__menu").removeClass("active");

      $(".navigation__mobile").fadeOut("fast");
    } else if ($(".services").hasClass("active")) {
      $(".services").removeClass("active");

      $(".we").fadeOut("fast");
    }

    if ($(this).hasClass("active")) {
      $(this).removeClass("active");

      $(".results").fadeOut("fast");
    } else {
      $(this).addClass("active");

      $(".results").fadeIn("fast");
    }

  });

  $(".results__close").click(function () {
    $(".results").fadeOut("fast");

    $(".search").removeClass("active");
  });

  $(".results__input").on("keypress",  function () {
    $(".results__relevant").html($(".results__input").val());

    $(".results__list").fadeIn("fast");
  });

  $(".results__input").on("change",  function () {
    $(".results__list").fadeOut("fast");
  });

  $(".results__item").click(function () {
    var textSearch =$(this).children(".results__relevant").text() + $(this).children(".results__end").text();
    $(".results__input").val(textSearch);
  });

  /* mask */

  if ($("form").length > 0) {
    $("input").on("change", function () {
      if ($(this).is(":invalid")) {
        $(this).addClass("invalid");
      } else {
        if ($(this).hasClass("invalid")) {
          $(this).removeClass("invalid");
        }
      }
    });

    $("input[name='name']").on("keypress", function (e) {
        return (/[A-Za-zА-Яа-яЁё\s]/.test(String.fromCharCode(e.charCode)));
    });

    Inputmask.extendDefinitions({
      '~': {
          validator: "[123456789]"
      },
      'k': {
          validator: "[1234569]"
      }
    });

    $("input[name='phone']").inputmask({
       mask: "+7 (k~9) 999-99-99",
       greedy: false,
       clearIncomplete: true,
       placeholder: "_",
       rightAlign: false,
       showMaskOnHover: false,
       showMaskOnFocus: true,
       onincomplete: function () {
         $(this).addClass("invalid");
       },
       oncomplete: function () {
         if ($(this).hasClass("invalid")) {
           $(this).removeClass("invalid");
         }
       }
    });

    $("input[name='phone']").on("keydown", function (e) {
        if (e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 39 || e.keyCode == 40) {
          e.preventDefault();
          return false;
        }
    });
  }

  /* sum menu */

  if ($(".sub").length > 0) {

    if (screen.width > 1199) {
      $(".navigation__item--sub").mouseover(function () {
        $(".sub").removeClass("active");

        $(this).children(".sub").addClass("active");
      });

      $(".sub").mouseout(function () {
        $(this).removeClass("active");
      });

      $("main, footer").mouseover(function () {
        if ($(".sub").hasClass("active")) {
          $(".sub").removeClass("active");
        }
      });
    } else {
      slideUpDown(".navigation__item--sub", ".sub");
    }
  }

  /* services */

  if (screen.width > 569) {
    var servicesSwiper;
  }

  $(".services").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");

      $(".we").fadeOut("fast");
    } else {
      $(this).addClass("active");

      if ($(".navigation__menu").hasClass("active")) {
        $(".navigation__menu").removeClass("active");

        $(".navigation__mobile").fadeOut("fast");
      } else if ($(".search").hasClass("active")) {
        $(".search").removeClass("active");

        $(".results").fadeOut("fast");
      }

      if ($(".filters__button").length > 0) {
        if ($(".filters__button").hasClass("active")) {
          $(".filters__button").removeClass("active");

          $(".filters__checkbox").fadeOut("fast");
        }
      }

      if ($(".we").length > 0) {
        $(".we").fadeIn("fast");

        /* swiper for services */

        if (screen.width > 569) {
          servicesSwiper = new Swiper(".we__right", {
            slidesPerView: 1,
            loop: false,
            speed: 400,
            wrapperClass: 'we__content',
            slideClass: 'we__item--mobile',
            allowTouchMove: false,
            fadeEffect: {
              crossFade: true
            },
            effect: 'fade',
          });
        }

      }
    }

  });

  if (screen.width > 569) {
    $(".we__item--desktop").click(function () {
      $(".we__item--desktop").not($(this)).removeClass("active");

      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
      } else {
        if (servicesSwiper) {
          servicesSwiper.slideTo($(this).index(), 500, false);
        }

        $(this).addClass("active");
      }

    });
  } else {
    if ($(".we__item--mobile").hasClass("active")) {
      $(".we__item--mobile").removeClass("active");
    }

    slideUpDown(".we__item--mobile", ".we__content-item");
  }


  /* breadcrumbs last child */

  if ($(".breadcrumbs__item").length > 0) {
    $(".breadcrumbs__item").last().children("a").removeAttr("href");
  }

  /* swiper for cases */

  swiper("cases");

  /* tools slider */

  if ($(".tools__slider").length > 0) {
    var toolsSwiper = new Swiper(".tools__container", {
      slidesPerView: 1,
      loop: false,
      speed: 400,
      wrapperClass: 'tools__slider',
      slideClass: 'tools__slide',
      allowTouchMove: false,

      fadeEffect: {
        crossFade: true
      },
      effect: 'fade',
    });
  }

  /* */

  if ($(".tumbs").length > 0) {
    $(".tumbs__name").html($(".tumbs__item.active").text());

    $(".tumbs__name").click(function () {
      if ($(this).hasClass("active")) {
        $(this).siblings(".tumbs__list").slideUp("fast");

        $(this).removeClass("active");
      } else {
        $(this).siblings(".tumbs__list").slideDown("fast");

        $(this).addClass("active");
      }
    });

    $(".tumbs__item").click(function () {
      if ($(this).hasClass("active")) {

      } else {
        $(".tumbs__item").not($(this)).removeClass("active");

        $(this).addClass("active");
      }

      $(".tumbs__name").html($(this).text());

      if (screen.width < 692) {
        $(".tumbs__name").removeClass("active");

        $(this).parents(".tumbs__list").slideUp("fast");
      }

      if ($(this).hasClass("tumbs__item--cases")) {
        $(".cases__slider").removeClass("active");

        $(".cases__slider").eq($(this).index()).addClass("active");

        swiper("cases");
      } else if ($(this).hasClass("tumbs__item--tools")) {
        if (toolsSwiper) {
          toolsSwiper.slideTo($(this).index(), 500, false);
        }
      }
    });
  }

  if ($(".filters").length > 0) {
    $(".filters__top").html($(".filters__label--radio.active").text());

    $(".tumbs__name").click(function () {
      if ($(this).hasClass("active")) {
        $(this).siblings(".tumbs__list").slideUp("fast");

        $(this).removeClass("active");
      } else {
        $(this).siblings(".tumbs__list").slideDown("fast");

        $(this).addClass("active");
      }
    });

    $(".filters__label").click(function () {
      if ($(this).hasClass("active")) {

      } else {
        $(".filters__label").not($(this)).removeClass("active");

        $(this).addClass("active");
      }

      if ($(this).hasClass("filters__label--radio")) {
        $(".filters__top").html($(this).text());

        if (screen.width < 1112) {
          $(".filters__top").removeClass("active");

          $(this).parents().parents(".filters__list").slideUp("fast");
        }
      }


    });

    $(".filters__top").click(function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");

        $(this).siblings(".filters__list").slideUp("fast");
      } else {
        $(this).addClass("active");

        $(this).siblings(".filters__list").slideDown("fast");
      }

    });

    $(".filters__button").click(function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");

        $(".filters__checkbox").fadeOut("fast");
      } else {
        $(this).addClass("active");

        $(".filters__checkbox").fadeIn("fast");
      }
    });

    $(".filters__close").click(function () {
      $(".filters__button").removeClass("active");

      $(".filters__checkbox").fadeOut("fast");
    });
  }


  /* swiper for certificates */

  if ($(".certificates__slider").length > 0) {
    var certSwiper = new Swiper(".certificates__slider", {
      slidesPerView: 2,
      loop: true,
      speed: 400,
      wrapperClass: 'certificates__list',
      slideClass: 'certificates__item',

      breakpoints: {
        // when window width is >= 320px
        1200: {
          slidesPerView: 4,
          navigation: {
            nextEl: '.arrows__next--certificates',
            prevEl: '.arrows__prev--certificates'
          },
        },
      }
    });
  }

  if (screen.width < 992) {
    $('[data-fancybox]').fancybox({
      mobile: {
        clickOutside: "close",
        clickContent : "close",
        clickSlide : "close"
      },
      toolbar: false,
      arrows: false,
      loop: true
    });
  } else {
    $('[data-fancybox]').fancybox({
        loop: true
    });
  }

  /* link reviews */

  if ($(".reviews__link").length > 0) {
    $(".reviews__link").each(function () {
      var textLink = $(this).attr("href");

      if (textLink !== '') {
        $(this).addClass("active");
      } else {
        $(this).removeAttr("href");
      }
    });
  }


  /* swiper for video reviews */

  if ($(".reviews__slider").length > 0) {
    var revSwiper = new Swiper(".reviews__slider", {
      slidesPerView: 1,
      loop: true,
      speed: 400,
      spaceBetween: 12,
      wrapperClass: 'reviews__list',
      slideClass: 'reviews__item',

      breakpoints: {
        // when window width is >= 320px
        768: {
          spaceBetween: 30,
        },
        // when window width is >= 320px
        1200: {
          slidesPerView: 2,
          navigation: {
            nextEl: '.arrows__next--reviews',
            prevEl: '.arrows__prev--reviews'
          },
        },
      }
    });

    $(".reviews__all").html('/ ' + $('.reviews__item:not(.swiper-slide-duplicate)').length);

    revSwiper.on('slideChange', function() {
      var indexSlide;

      if ((revSwiper.realIndex + 1) < 10) {
        indexSlide = '0' + (revSwiper.realIndex + 1);
      } else {
        indexSlide = revSwiper.realIndex + 1;
      }

      $('.reviews__current').html(indexSlide);
    });
  }


  /* swiper for video review */

  if ($(".review__slider").length > 0) {
    var revvSwiper = new Swiper(".review__slider", {
      slidesPerView: 1,
      loop: true,
      speed: 400,
      spaceBetween: 0,
      wrapperClass: 'review__list',
      slideClass: 'review__item',
      autoplay: {
        delay: 3000,
      },
      navigation: {
        nextEl: '.arrows__next--mobile',
        prevEl: '.arrows__prev--mobile'
      },

      breakpoints: {
        // when window width is >= 1200px
        1200: {
          navigation: {
            nextEl: '.arrows__next--review',
            prevEl: '.arrows__prev--review'
          },
        },
      }
    });

    $(".review__list").height($(".review__item.swiper-slide-active").children().height());

    $(".review__all").html('/ ' + $('.review__item:not(.swiper-slide-duplicate)').length);

    revvSwiper.on('slideChange', function() {
      var indexSlide;

      if ((revvSwiper.realIndex + 1) < 10) {
        indexSlide = '0' + (revvSwiper.realIndex + 1);
      } else {
        indexSlide = revvSwiper.realIndex + 1;
      }

      $('.review__current').html(indexSlide);

      revvSwiper.updateAutoHeight(500);
    });
  }

  /* video youtube  */

  if ($(".youtube--reviews, .youtube--slider, .youtube--one").length > 0) {
    youtubeEach(".youtube__content");

    youtubePlay(".youtube__play");

    $(".youtube").height($(".youtube").width()/1.77777777778);
  }

  /* popup */

  $(".review__button").click(function () {
    var id = $(this).data("id");

    $(".popup--video").find(".youtube__content").attr("data-id", id);

    youtubeEach(".youtube__content");

    youtubePlay(".youtube__play");

    $(".popup--video").fadeIn("fast");

    $(".youtube").height($(".youtube").width()/1.77777777778);

    $(".popup__overlay").fadeIn("fast");

    $("html").css("overflow-y", "hidden");
  });

  $(".page-header__call, .promo__say, .order__button").click(function () {

    $(".popup--form").fadeIn("fast");

    $(".popup__overlay").fadeIn("fast");

    $("html").css("overflow-y", "hidden");


  });


  $(".popup__overlay, .popup__close").click(function () {
    $(".popup").fadeOut("fast");

    $(".popup__overlay").fadeOut("fast");

    $("html").css("overflow-y", "auto");

    if ($(".popup--video").length > 0) {
      $(".popup--video").find(".youtube__iframe").css("z-index", "0");
      $(".popup--video").find(".youtube__iframe").attr('src', '');
      $(".popup--video").find(".youtube__thumb").attr('src', '');
    }
  });

});

function youtubeEach (element) {
  $(element).each(function () {
    var youtubeID = $(this).data("id");

    $(this).children(".youtube__thumb").attr("src","https://i.ytimg.com/vi/" + youtubeID + "/mqdefault.jpg");
  });
}

function youtubePlay (element) {
  $(element).click(function () {
    var youtubeID = $(this).parents().data("id");

    $(this).siblings(".youtube__iframe").css("z-index", "3");
    $(this).siblings(".youtube__iframe").attr("src","https://www.youtube.com/embed/" + youtubeID + "?autoplay=1");
  });
}


function swiper (prefix) {

  if ($('.' + prefix +  '__slider').length > 0) {
    $('.' + prefix +  '__slider').each(function () {
      if ($(this).hasClass("active")) {

        var newSwiper = new Swiper(this, {
          slidesPerView: 1,
          loop: true,
          speed: 400,
          spaceBetween: 12,
          wrapperClass: prefix +  '__list',
          slideClass: prefix +  '__item',

          breakpoints: {
            // when window width is >= 320px
            768: {
              spaceBetween: 30,
            },
            // when window width is >= 320px
            1200: {
              slidesPerView: 3,
              navigation: {
                nextEl: '.' + prefix +  '__next',
                prevEl: '.' + prefix +  '__prev'
              },
            },
          }
        });

        $(this).parent().height($(this).height());

        $(this).find('.' + prefix + '__all').html('/ ' + $(this).find('.' + prefix + '__item:not(.swiper-slide-duplicate)').length);

        newSwiper.on('slideChange', function() {
          var indexSlide;

          if ((newSwiper.realIndex + 1) < 10) {
            indexSlide = '0' + (newSwiper.realIndex + 1);
          } else {
            indexSlide = newSwiper.realIndex + 1;
          }

          $('.' + prefix + '__current').html(indexSlide);
        });
      }
    });
  }
}

function slideUpDown (element, child) {
  $(element).click(function () {
    $(element).not($(this)).removeClass("active");
    $(element).not($(this)).children(child).slideUp("fast");

    if ($(this).hasClass("active")) {
      $(this).removeClass("active");

      $(this).children(child).slideUp("fast");
    } else {
      $(this).addClass("active");

      $(this).children(child).slideDown("fast");
    }

  });
}

function sort (list, item, link, picture, banner) {
  if ($('.' + list).hasClass(list + '--page')) {
    $('.' + banner).removeClass(banner + '--page');
    $('.' + banner).addClass(banner + '--table');

    $('.' + list).removeClass(list + '--page');
    $('.' + list).addClass(list + '--table');

    $('.' + item).removeClass(item + '--page');
    $('.' + item).addClass(item + '--table');

    $('.' + link).addClass(link + '--table');
    $('.' + picture).addClass(picture + '--table');
  } else {
    $('.' + banner).addClass(banner + '--page');
    $('.' + banner).removeClass(banner + '--table');

    $('.' + list).addClass(list + '--page');
    $('.' + list).removeClass(list + '--table');

    $('.' + item).addClass(item + '--page');
    $('.' + item).removeClass(item + '--table');

    $('.' + link).removeClass(link + '--table');
    $('.' + picture).removeClass(picture + '--table');
  }
}

function listToSlider (list, listSliderClass, itemSliderClass, sliderContainer) {
  if ($(list).length > 0) {
    var list = $(list);

    list.addClass(listSliderClass);
    list.addClass("swiper-wrapper");

    list.children("li").addClass(itemSliderClass);
    list.children("li").addClass("swiper-slide");

    list.wrap( "<div class='" + sliderContainer + " swiper-container'></div>" );

  }
}

function removeElementFromMobile(element) {
  if ($('.' + element).length > 0) {
    $('.' + element).not($('.' + element + '--mobile')).remove();
  }
}
