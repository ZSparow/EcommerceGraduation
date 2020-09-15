var nameArr = document.querySelectorAll(".item-name");

var searchValue = document.getElementById("search-value");
var searchBtn = document.querySelector(".search-button");

searchBtn.addEventListener("click", function () {
  var sarchInput = searchValue.value.toLowerCase();

  searchValue.addEventListener("keyup", function () {
    if (searchValue.value == "") {
      nameArr.forEach(function (name) {
        name.parentElement.parentElement.style.display = "block";
      });
    }
  });

  nameArr.forEach(function (name) {
    if (sarchInput != "") {
      var test = name.textContent.toLowerCase().includes(sarchInput);

      if (!test) {
        name.parentElement.parentElement.style.display = "none";
      } else {
        // console.log("No item found");
      }
    } else {
      name.parentElement.parentElement.style.display = "block";
    }
  });
});
