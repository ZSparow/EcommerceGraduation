// buttons for display forms
var loginButton = document.querySelectorAll("#login");
var signupButton = document.querySelectorAll("#signup");

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
