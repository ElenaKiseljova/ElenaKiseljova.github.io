var link = document.querySelector(".login-link");
var popup_login = document.querySelector(".modal-login");
var popup_login_close = popup_login.querySelector(".modal-close");

var form = popup_login.querySelector("form");
var login = popup_login.querySelector("[name=login]");
var password = popup_login.querySelector("[name=password]");

var popup_overlay = document.querySelector(".modal-overlay");

var link_map = document.querySelector(".contacts-button-map");
var popup_map = document.querySelector(".modal-map");
var popup_map_close = popup_map.querySelector(".modal-close")

var footer_map = document.querySelector(".footer-map");


var isStorageSupport = true;
var storage = "";

try {
  storage = localStorage.getItem("login");
} catch (err) {
  isStorageSupport = false;
}

link.addEventListener("click", function(evt) {
  evt.preventDefault();
  popup_login.classList.add("modal-show");
  popup_overlay.classList.add("modal-show");

  if (storage) {
    login.value = storage;
    password.focus();
  } else {
    login.focus();
  }
});

popup_login_close.addEventListener("click", function(evt) {
  evt.preventDefault();
  popup_login.classList.remove("modal-show");
  popup_login.classList.remove("modal-error");
  popup_overlay.classList.remove("modal-show");
});

form.addEventListener("submit", function(evt) {
  if(!login.value || !password.value) {
    evt.preventDefault();
    popup_login.classList.remove("modal-error");
    popup_login.offsetWidth = popup_login.offsetWidth;
    popup_login.classList.add("modal-error");
  } else {
    if (isStorageSupport) {
      localStorage.setItem("login", login.value);
    }
  }
});

window.addEventListener("keydown", function(evt){
  if (evt.keyCode === 27) {
    evt.preventDefault();
    if (popup_login.classList.contains("modal-show")) {
      popup_login.classList.remove("modal-show");
      popup_overlay.classList.remove("modal-show");
      popup_login.classList.remove("modal-error");
    }
  }
});

footer_map.addEventListener("click", function(evt) {
  evt.preventDefault();
  popup_map.classList.add("modal-show");
  popup_overlay.classList.add("modal-show");
});

popup_overlay.addEventListener("click", function(evt){
  if (popup_login.classList.contains("modal-show") || popup_map.classList.contains("modal-show")) {
    popup_login.classList.remove("modal-show");
    popup_map.classList.remove("modal-show");
    popup_overlay.classList.remove("modal-show");
  }
});

popup_map_close.addEventListener("click", function(evt){
  evt.preventDefault();
  popup_map.classList.remove("modal-show");
  popup_overlay.classList.remove("modal-show");
});

window.addEventListener("keydown", function(evt) {
  if (evt.keyCode === 27) {
    evt.preventDefault();
    if (popup_map.classList.contains("modal-show")) {
      popup_map.classList.remove("modal-show");
      popup_overlay.classList.remove("modal-show");
    }
  }
});

link_map.addEventListener("click", function(evt) {
  evt.preventDefault();
  popup_map.classList.add("modal-show");
  popup_overlay.classList.add("modal-show");
});
