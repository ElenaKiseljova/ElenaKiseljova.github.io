// HEADER's forms

var button_login = document.querySelector(".button-login-shop"),
    form_login = document.querySelector(".form-login-shop"),
    email_login = form_login.querySelector(".input-email-login-shop"),
    password_login = form_login.querySelector(".input-password-login-shop");



// LOCALstorage validator

var Storage = " ",
    isStorageSupport = true;

try {
  Storage = localStorage.getItem("email_login");
} catch (error) {
  isStorageSupport = false;
}


// LOGIN form

button_login.addEventListener("mouseover", function(evt) {
  evt.preventDefault();

  if (Storage) {
    email_login.value = Storage;

    password_login.focus();
  } else {
    email_login.focus();
  }
});

form_login.addEventListener("submit", function(evt) {
  if (!email_login.value || !password_login.value) {
    evt.preventDefault();

    form_login.classList.remove("form-error");

    form_login.offsetWidth = form_login.offsetWidth;

    form_login.classList.add("form-error");

    console.log("error");

    if (!email_login.value) {
      email_login.focus();
    } else {
      password_login.focus();
    }

  } else {
    if (isStorageSupport) {
      localStorage.setItem("email_login", email_login.value);
    }
  }
});


// cart

try {
  var cart_filled = document.querySelector(".block-cart-shop-filled");

  console.log("cart is fulled");
} catch (e) {
  console.log("cart is empty");
}

if (cart_filled) {
  var row = cart_filled.querySelectorAll(".table-cart-shop-filled-row");
  var button_del = cart_filled.querySelectorAll(".button-cart-shop-filled-delete");


  button_del[0].addEventListener("click", function(evt) {
    evt.preventDefault();

    console.log("DEL click");

    row[0].classList.add("delete-row");
  });

  button_del[1].addEventListener("click", function(evt) {
    evt.preventDefault();

    console.log("DEL click");

    row[1].classList.add("delete-row");
  });
}




if (window.location.href.indexOf("index") > -1) {
  
  // FEEDBACK FORM validation
  
  var feedback_modal_form = document.querySelector(".modal-feedback-form"),
      feedback_user_name = document.getElementById("user-name"),
      feedback_user_email = document.getElementById("user-email"),
      feedback_user_letter = document.getElementById("user-letter");
  

  feedback_modal_form.addEventListener("submit", function(evt) {
    if (!feedback_user_name.value || !feedback_user_email.value || !feedback_user_letter.value) {
      evt.preventDefault();
  
      console.log("error");
    } else {
      if (isStorageSupport) {
        localStorage.setItem("feedback_user_name", feedback_user_name.value);
        localStorage.setItem("feedback_user_email", feedback_user_email.value);
      }
    }
  });
  
  // OPEN/CLOSE modal window
  
  var feedback_button = document.querySelector(".button-feedback"),
      feedback_modal = document.querySelector(".modal-feedback"),
      feedback_submit = feedback_modal.querySelector(".button-feedback-form"),
      feedback_close = feedback_modal.querySelector(".button-modal-close"),
      modal_overlay = document.querySelector(".modal-overlay");
  
  feedback_button.addEventListener("click", function(evt) {
    evt.preventDefault();
  
    feedback_modal.classList.add("modal-show");
    modal_overlay.classList.add("modal-show-overlay");
  
    if (Storage) {
      feedback_user_name.value = localStorage.getItem("feedback_user_name");
      feedback_user_email.value = localStorage.getItem("feedback_user_email");
  
      feedback_user_letter.focus();
    } else {
      feedback_user_name.focus();
    }
  });
  
  feedback_close.addEventListener("click", function(evt) {
    evt.preventDefault();
  
    feedback_modal.classList.remove("modal-show");
    modal_overlay.classList.remove("modal-show-overlay");
  });
  
  modal_overlay.addEventListener("click", function(evt) {
    evt.preventDefault();
  
    feedback_modal.classList.remove("modal-show");
    modal_overlay.classList.remove("modal-show-overlay");
  });
  
  window.addEventListener("keydown", function(evt) {
    if (feedback_modal.classList.contains("modal-show")) {
      if (evt.keyCode === 27) {
  
        evt.preventDefault();
  
        feedback_modal.classList.remove("modal-show");
        modal_overlay.classList.remove("modal-show-overlay");
      }
    }
  });
}


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

    icon: "img/pin.png"
  });
}
