$(document).ready(function () {
  $(".static__button").click(function () {
    var index = $(this).parent().index();
    
    $(".static__iframe").eq(index).addClass("active");
    
    $(".popup").fadeOut();
  });
  
  $(".popup__close").click(function () {
    $(".popup").fadeIn();
    
    $(".static__iframe").removeClass("active");
  });
});