$(document).ready(function () {
  // открытие модального окна с iframe
  
  $(".static__button, .adaptive__button").click(function () {
    var index = $(this).parent().index();
    
    if ($(this).hasClass("static__button")) {
      $(".static__iframe").eq(index).addClass("active");
    } else {
      $(".adaptive__iframe").eq(index).addClass("active");
    } 
        
    $(".popup").fadeIn();  
    $(".popup-overlay").fadeIn(); 
    $("html").css("overflow-y", "hidden");
  });
  
  // закрытие модального окна с iframe (кнопка, фон)
  
  $(".popup__close, .popup-overlay").click(function () {
    $(".popup").fadeOut();
    $(".popup-overlay").fadeOut();
    $("html").css("overflow-y", "auto");
    
    if ($(".static__iframe").hasClass("active")) {
      $(".static__iframe").removeClass("active"); 
    } else {
      $(".adaptive__iframe").removeClass("active");
    }   
  });
  
  // закрытие модального окна с iframe (esc)
    
  $(window).keypress(function (e) { 
      if ($(".static__iframe").hasClass("active") || $(".adaptive__iframe").hasClass("active")) {
        if (e.keyCode == 27) {
          e.preventDefault();
          
          $(".popup").fadeOut();
          $(".popup-overlay").fadeOut();
          $("html").css("overflow-y", "auto");
          
          if ($(".static__iframe").hasClass("active")) {
            $(".static__iframe").removeClass("active"); 
          } else {
            $(".adaptive__iframe").removeClass("active");
          }         
        }
      }      
    });
    
  // анимированный переход по якорям в навигационном меню
  
  $(".navigation__list--menu .navigation__link").click(function () {
    
    var element = $(this).attr("href");
    
    var minus = 70;
    
    if (window.location.href.indexOf("pl") > -1) {
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
  
  
});