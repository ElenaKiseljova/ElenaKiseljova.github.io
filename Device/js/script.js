/* SUB menu*/

var button_shop_catalog = document.querySelector(".shop-catalog");
var sub_menu = document.querySelector(".main-header-catalog-navigation-list");
var sub_menu_close = document.querySelector(".shop-catalog-6");

button_shop_catalog.addEventListener("focus", function (evt) {
  evt.preventDefault();

  sub_menu.classList.add("active");
});

sub_menu_close.addEventListener("blur", function(evt) {
  evt.preventDefault();

  sub_menu.classList.remove("active");
});

/* MODAL windows*/

var overlay_modal = document.querySelector(".modal-overlay");

var small_map = document.querySelector(".map-small");
var map_modal = document.querySelector(".modal-map");
var close_map = map_modal.querySelector(".modal-close");


small_map.addEventListener("click", function (evt) {
  evt.preventDefault();

  map_modal.classList.add("modal-show");
  overlay_modal.classList.add("modal-show-overlay");
});

close_map.addEventListener("click", function (evt) {
    evt.preventDefault();

    map_modal.classList.remove("modal-show");
    overlay_modal.classList.remove("modal-show-overlay");
});



var write_us_button = document.querySelector(".button-write-us");
var write_us_modal = document.querySelector(".modal-write-us");
var close_write_us = write_us_modal.querySelector(".modal-close");

write_us_button.addEventListener("click", function (evt) {
  evt.preventDefault();

  write_us_modal.classList.add("modal-show");
  overlay_modal.classList.add("modal-show-overlay");
});


close_write_us.addEventListener("click", function (evt) {
  evt.preventDefault();

  write_us_modal.classList.remove("modal-show");
  overlay_modal.classList.remove("modal-show-overlay");
});

window.addEventListener("keydown", function (evt) {
  if (map_modal.classList.contains("modal-show") || write_us_modal.classList.contains("modal-show")) {
    if (evt.keyCode === 27) {
        evt.preventDefault();

        if (map_modal.classList.contains("modal-show")) {
          map_modal.classList.remove("modal-show");
        } else {
          write_us_modal.classList.remove("modal-show");
        }

        overlay_modal.classList.remove("modal-show-overlay");
    }
  }
});

overlay_modal.addEventListener("click", function (evt) {
  evt.preventDefault();

  if (map_modal.classList.contains("modal-show")) {
    map_modal.classList.remove("modal-show");
  } else {
    write_us_modal.classList.remove("modal-show");
  }

  overlay_modal.classList.remove("modal-show-overlay");
});
