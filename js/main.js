const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");

searchIcon.addEventListener("click", function() {
  if (searchBox.style.top == "100px") {
    searchBox.style.top = "24px";
    searchBox.style.pointerEvents = "none";
  } else {
    searchBox.style.top = "100px";
    searchBox.style.pointerEvents = "auto";
  }
});

menuIcon.addEventListener("click", function() {
  if (slideoutMenu.style.opacity == "1") {
    slideoutMenu.style.opacity = "0";
    slideoutMenu.style.pointerEvents = "none";
  } else {
    slideoutMenu.style.opacity = "1";
    slideoutMenu.style.pointerEvents = "auto";
  }
});

$(document).ready(function() {
  $(".screen-reader-text").focusin(function() {
    $(this).css("position", "static");
  });

  $(".screen-reader-text").focusout(function() {
    $(this).css("position", "absolute");
  });
});
