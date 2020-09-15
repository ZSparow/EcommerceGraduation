// buttons for display forms
var loginButton = document.querySelectorAll(".login");
var signupButton = document.querySelectorAll(".signup");

// buttons for new account and new log in
var newlogin = document.getElementById("login-account");
var newaccount = document.getElementById("create-account");

// set varibles for the forms
var loginForm = document.getElementById("login-form");
var signupForm = document.getElementById("signup-form");

// buttons for exit the forms
var exitlogin = document.getElementById("log-close");
var exitsignup = document.getElementById("sign-close");

// setting the display buttons

loginButton.forEach(function (el) {
  el.addEventListener("click", function () {
    loginForm.style.display = "flex";
  });
});

signupButton.forEach(function (el) {
  el.addEventListener("click", function () {
    signupForm.style.display = "flex";
  });
});

// setting the exit buttons

exitlogin.addEventListener("click", function () {
  loginForm.style.display = "none";
});
exitsignup.addEventListener("click", function () {
  signupForm.style.display = "none";
});

// setting the new buttons

newlogin.addEventListener("click", function () {
  loginForm.style.display = "flex";
  signupForm.style.display = "none";
});
newaccount.addEventListener("click", function () {
  loginForm.style.display = "none";
  signupForm.style.display = "flex";
});

// input of contact form   styling

// var input = document.getElementById("email-input");
// var emailInput = document.getElementById("email");

// emailInput.addEventListener("focusout", function () {
//   if (emailInput.value.length != 0) {
//     input.classList.add("input-wrong");
//   }
//   if (emailInput.value.length == 0) {
//     input.classList.remove("input-wrong");
//   }
// });

//slide bar functionallity

var slideMenuButton = document.querySelector(".collapsed-button");
var closeSlideButton = document.querySelector(".close-slide");
var slideMenu = document.getElementById("slidemenu");

slideMenuButton.addEventListener("click", function () {
  slideMenu.classList.add("opened");
});
closeSlideButton.addEventListener("click", function () {
  slideMenu.classList.remove("opened");
});

// Buy button functunallity

var buyBtn = document.querySelectorAll(".buy-btn");
var closeBuy = document.querySelector(".close-buy-form");
var buyPopup = document.querySelector(".buy-form-container");

buyBtn.forEach(function (el) {
  el.addEventListener("click", function () {
    buyPopup.style.display = "block";
  });
});
closeBuy.addEventListener("click", function () {
  buyPopup.style.display = "none";
});
