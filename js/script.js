$(document).ready(function () {
  $(".static__button").click(function () {
    var index = $(this).parent().index();
    
    $(".static__iframe").eq(index).addClass("active");
    
    $(".popup").fadeIn();
  });
  
  $(".popup__close").click(function () {
    $(".popup").fadeOut();
    
    $(".static__iframe").removeClass("active");
  });
});