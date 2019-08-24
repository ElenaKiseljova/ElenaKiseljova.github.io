/* SEARCH */

var search_input = document.querySelector(".header-shop-search-input");
var search_svg = document.getElementById("svg-search");
var search_boole = true;

search_input.addEventListener("focus", function(evt) {
  search_svg.style.fill = "#ee3643";
  search_boole = false;
});

search_input.addEventListener("blur", function(evt) {
  search_svg.style.fill = "rgba(255, 255, 255, 0.3)";
  search_boole = true;
});

search_input.addEventListener("mouseover", function(evt) {
  if (search_boole) {
    search_svg.style.fill = "rgba(255, 255, 255, 1)";
  }
});

search_input.addEventListener("mouseout", function(evt) {
  if (search_boole) {
    search_svg.style.fill = "rgba(255, 255, 255, 0.7)";
  }
});


/* MODAL */

var modal_map = document.querySelector(".modal-map");
var close_map = modal_map.querySelector(".modal-close");

var modal_cart = document.querySelector(".modal-cart");
var close_cart = modal_cart.querySelector(".modal-close");
var continue_shopping = modal_cart.querySelector(".modal-cart-continue-shopping");
var create_order = modal_cart.querySelector(".modal-cart-create-order");

var modal_write_us = document.querySelector(".modal-write-us");
var close_write_us = modal_write_us.querySelector(".modal-close");
var submit_write_us = modal_write_us.querySelector(".write-us-form-bottom-button");

var shop_map = document.querySelector(".about-shop-contacts-map");
var write_us = document.querySelector(".button-write-us");

var modal_overlay = document.querySelector(".modal-overlay");

var add_cart = document.querySelectorAll(".button-buy");

var shopping_cart = document.querySelector(".shopping-cart");
var cart_quantity = document.querySelector(".cart-quantity");


for (var i = 0; i < add_cart.length; i++) {
  add_cart[i].addEventListener("click", function (evt) {
    evt.preventDefault();

    modal_cart.classList.add("modal-show");
    modal_overlay.classList.add("modal-show");

    shopping_cart.classList.add(".shopping-cart-inner");

    var cart_quantity_int = Number("cart_quantity.innerHTML");

    cart_quantity_int += 1;

    cart_quantity.innerHTML = cart_quantity_int;  /* NaN ??? */
  });
}


/* MODAL-CLOSE */

close_cart.addEventListener("click", function(evt) {
  if (modal_cart.classList.contains("modal-show")) {
    modal_cart.classList.remove("modal-show");
  }
  modal_overlay.classList.remove("modal-show");
});

continue_shopping.addEventListener("click", function (evt) {
  evt.preventDefault();

  modal_cart.classList.remove("modal-show");
  modal_overlay.classList.remove("modal-show");
});

create_order.addEventListener("click", function (evt) {
  evt.preventDefault();

  modal_cart.classList.remove("modal-show");
  modal_overlay.classList.remove("modal-show");
});

window.addEventListener("keydown", function (evt) {
  if (evt.keyCode === 27) {
    if (modal_cart.classList.contains("modal-show")) {
      evt.preventDefault();

      modal_cart.classList.remove("modal-show");
      modal_overlay.classList.remove("modal-show");
    }
  }
});

modal_overlay.addEventListener("click", function (evt) {
  modal_cart.classList.remove("modal-show");
  modal_write_us.classList.remove("modal-show");
  modal_map.classList.remove("modal-show");
  modal_overlay.classList.remove("modal-show");
});


close_map.addEventListener("click", function(evt) {
  if (modal_map.classList.contains("modal-show")) {
    modal_map.classList.remove("modal-show");
  }
  modal_overlay.classList.remove("modal-show");
});

window.addEventListener("keydown", function (evt) {
  if (evt.keyCode === 27) {
    if (modal_map.classList.contains("modal-show")) {
      evt.preventDefault();

      modal_map.classList.remove("modal-show");
      modal_overlay.classList.remove("modal-show");
    }
  }
});


close_write_us.addEventListener("click", function(evt) {
  if (modal_write_us.classList.contains("modal-show")) {
    modal_write_us.classList.remove("modal-show");
  }
  modal_overlay.classList.remove("modal-show");
});


window.addEventListener("keydown", function (evt) {
  if (evt.keyCode === 27) {
    if (modal_write_us.classList.contains("modal-show")) {
      evt.preventDefault();

      modal_write_us.classList.remove("modal-show");
      modal_overlay.classList.remove("modal-show");
    }
  }
});




/* MODAL-SHOW */


shop_map.addEventListener("click", function(evt) {
  evt.preventDefault();

  modal_map.classList.add("modal-show");
  modal_overlay.classList.add("modal-show");
});

var write_us_name = modal_write_us.querySelector(".write-us-name");

write_us.addEventListener("click", function(evt) {
  evt.preventDefault();

  modal_write_us.classList.add("modal-show");
  modal_overlay.classList.add("modal-show");

  write_us_name.focus();
});
