function plusCount(object) {
  var currentAttr = object.getAttribute("href");
  var input = document.querySelector(currentAttr);

  input.value++;
}

function minusCount(object) {
  var currentAttr = object.getAttribute("href");
  var input = document.querySelector(currentAttr);

  if (input.value > 0) {
    input.value--;
  }
}


var button_search = document.querySelector(".button-search-hotel"),
    modal_search = document.querySelector(".modal-search-hotel"),
    button_close = document.querySelector(".button-close"),
    button_submit = document.querySelector(".button-modal-search-hotel");

button_search.addEventListener("click", function(evt) {
  evt.preventDefault();

  if (modal_search.classList.contains("modal-close")) {
    modal_search.classList.remove("modal-close");
  }
  modal_search.classList.add("modal-show");
  button_close.classList.add("modal-show-button");
});

button_close.addEventListener("click", function(evt) {
  evt.preventDefault();

  modal_search.classList.remove("modal-show");
  button_close.classList.remove("modal-show-button");

  modal_search.classList.add("modal-close");
});

button_submit.addEventListener("click", function(evt) {
  modal_search.classList.remove("modal-show");
  button_close.classList.remove("modal-show-button");

  modal_search.classList.add("modal-close");
});

window.addEventListener("keydown", function (evt) {
  if (modal_search.classList.contains("modal-show")) {
    if (evt.keyCode === 27) {
        evt.preventDefault();

        modal_search.classList.remove("modal-show");
        button_close.classList.remove("modal-show-button");

        modal_search.classList.add("modal-close");
    }
  }
});

var check_in = document.getElementById("check-in"),
    check_out = document.getElementById("check-out"),
    icon_1 = document.querySelector(".input-icon-1"),
    icon_2 = document.querySelector(".input-icon-2");

icon_1.addEventListener("click", function(evt) {
  evt.preventDefault();

  check_in.focus();
});

icon_2.addEventListener("click", function(evt) {
  evt.preventDefault();

  check_out.focus();
});
