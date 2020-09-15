// style button
var action = document.querySelector(".action");
var style1 = document.getElementById("style1");
var style2 = document.getElementById("style2");
var style3 = document.getElementById("style3");
var pageStyle = document.getElementById("page-style");

style1.addEventListener("click", function () {
  pageStyle.href = "css/style.css";
  //changing icons
  document.getElementById("computer-image").src = "images/icons/computer.png";
  document.getElementById("mobile-image").src = "images/icons/phone.png";
  document.getElementById("console-image").src = "images/icons/console.png";
});
style2.addEventListener("click", function () {
  pageStyle.href = "css/style2.css";
  //changing icons
  document.getElementById("computer-image").src = "images/icons/computer.png";
  document.getElementById("mobile-image").src = "images/icons/phone.png";
  document.getElementById("console-image").src = "images/icons/console.png";
});
style3.addEventListener("click", function () {
  pageStyle.href = "css/style3.css";
  //changing icons
  document.getElementById("computer-image").src = "images/icons/computer2.png";
  document.getElementById("mobile-image").src = "images/icons/phone2.png";
  document.getElementById("console-image").src = "images/icons/console2.png";
});

action.addEventListener("click", function () {
  action.classList.toggle("active");
});
