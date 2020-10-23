$(document).ready(function () {
  // открытие модального окна с iframe
  
  $(".static__button, .adaptive__button").click(function () {
    var iframeLink = $(this).data('iframe');
    
    $(".popup__iframe").attr('src', iframeLink);
        
    $(".popup").fadeIn();  
    $(".popup__overlay").fadeIn(); 
    $("html").css("overflow-y", "hidden");
  });
  
  // закрытие модального окна с iframe (кнопка, фон)
  
  $(".popup__close, .popup__overlay").click(function () {
    $(".popup").fadeOut();
    $(".popup__overlay").fadeOut();
    $("html").css("overflow-y", "auto");
  });
  
  // закрытие модального окна с iframe (esc)
    
  $(window).keypress(function (e) { 
      if ($(".static__iframe").hasClass("active") || $(".adaptive__iframe").hasClass("active")) {
        if (e.keyCode == 27) {
          e.preventDefault();
          
          $(".popup").fadeOut();
          $(".popup__overlay").fadeOut();
          $("html").css("overflow-y", "auto");        
        }
      }      
    });
    
  // анимированный переход по якорям в навигационном меню
  
  $("a[href^='#']").click(function () {
    
    var element = $(this).attr("href");
    
    var minus = 100;
    
    if (window.location.href.indexOf("pl") > -1 && screen.width > 767) {
      minus = 120;
    }
    
    var top =$(element).offset().top - minus;
    
    $("html, body").animate({scrollTop: top}, 500);   
  });
  
  // мобильное меню 
  
  $(".navigation__menu, .navigation__item").click(function () {
    if ($(".navigation").hasClass("navigation--closed")) {
      $(".navigation").toggleClass("navigation--opened");
    } else {
      $(".navigation").toggleClass("navigation--closed"); 
    }
  });
  
  // Сертификаты
  
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
  
  $(".skills__picture").mousemove(function(e) {
    var xText = e.clientX - 100;
    var yText = e.clientY - 100;
    
    $(this).siblings(".skills__text").css({
      top: yText,
      left: xText
    });   
  });
});