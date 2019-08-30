var write_us = document.querySelector(".modal-write-us"),
    write_us_close = write_us.querySelector(".modal-close"),
    write_us_form = write_us.querySelector(".modal-write-us-form"),
    input_name = write_us.querySelector(".write-us-name"),
    input_email = write_us.querySelector(".write-us-email"),
    textarea_letter = write_us.querySelector(".write-us-letter"),
    write_us_button = document.querySelector(".write-us-button");

// Easy validation form and writing to the LocalStorage

var isStorageSupport = true,
    Storage = "";

try {
  Storage = localStorage.getItem("input_name");
} catch (e) {
  isStorageSupport = false;
}

write_us_button.addEventListener("click", function(evt) {
  evt.preventDefault();

  write_us.classList.add("modal-show");

  if (isStorageSupport) {
    try {
      input_name.value = localStorage.getItem("input_name");
      input_email.value = localStorage.getItem("input_email");
    } catch (e) {
      console.log("555");
    }
    if (!input_name.value) {
      input_name.focus();
    }

    if (!input_email.value) {
      input_email.focus();
    }
    if (!textarea_letter.value) {
      textarea_letter.focus();
    }
  }
});

write_us_close.addEventListener("click", function(evt) {
  evt.preventDefault();

  write_us.classList.remove("modal-show");
});

window.addEventListener("keydown", function (evt) {
  if (evt.keyCode === 27) {
    if (write_us.classList.contains("modal-show")) {
      evt.preventDefault();

      write_us.classList.remove("modal-show");
    }
  }
});


write_us_form.addEventListener("submit", function (evt) {
  if (!input_name.value || !input_email.value || !textarea_letter.value) {
    evt.preventDefault();

    console.log("ff");

    write_us.classList.remove("modal-error");

    write_us.offsetWidth = write_us_form.offsetWidth;

    write_us.classList.add("modal-error");

    if (!input_name.value) {
      input_name.focus();
    }

    if (!input_email.value) {
      input_email.focus();
    }
    if (!textarea_letter.value) {
      textarea_letter.focus();
    }
  } else {
    input_name.value = localStorage.setItem("input_name", input_name.value);
    input_email.value = localStorage.setItem("input_email", input_email.value);
    console.log("aaa");
  }
});





// MAP

var map;

function initMap() {

  map = new google.maps.Map(document.getElementById("map"), {
    center: {lat: 59.938845, lng: 30.323101},
    zoom: 18
  });

  var marker = new google.maps.Marker({
    position: {lat: 59.938845, lng: 30.323101},
    map: map,

    icon: "img/map-marker.png"
  });
}
