$(document).ready(function () {
  // открытие модального окна с iframe
  
  $(".static__button").click(function () {
    var index = $(this).parent().index();
    
    $(".static__iframe").eq(index).addClass("active");
    
    $(".popup").fadeIn();  
    $(".popup-overlay").fadeIn(); 
    $("html").css("overflow-y", "hidden");
  });
  
  // закрытие модального окна с iframe (кнопка, фон)
  
  $(".popup__close, .popup-overlay").click(function () {
    $(".popup").fadeOut();
    $(".popup-overlay").fadeOut();
    $("html").css("overflow-y", "auto");
    
    $(".static__iframe").removeClass("active");    
  });
  
  // закрытие модального окна с iframe (esc)
    
  $(window).keypress(function (e) { 
      if ($(".static__iframe").hasClass("active")) {
        if (e.keyCode == 27) {
          e.preventDefault();
          
          $(".popup").fadeOut();
          $(".popup-overlay").fadeOut();
          $("html").css("overflow-y", "auto");
          
          $(".static__iframe").removeClass("active");      
        }
      }      
    });
    
  // анимированный переход по якорям в навигационном меню
  
  $(".navigation__list--menu .navigation__link").click(function () {
    
    var element = $(this).attr("href");
    var top =$(element).offset().top;
    
    console.log(element, top);
    
    $("html, body").animate({scrollTop: top}, 500);   
  });
});