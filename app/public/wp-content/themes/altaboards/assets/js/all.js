/**
 * Header
 */

let mainMenuButtonOpen = document.querySelector(".main-menu-button-open");
let mainMenuButtonClose = document.querySelector(".main-menu-button-close");

let mainMenuItems = document.querySelector(".main-menu-mobile");

function openMenu() {
  mainMenuItems.classList.add("open");

  mainMenuButtonOpen.classList.add("hidden");
  mainMenuButtonClose.classList.remove("hidden");
}

function closeMenu() {
  mainMenuItems.classList.remove("open");

  mainMenuButtonOpen.classList.remove("hidden");
  mainMenuButtonClose.classList.add("hidden");
}

document.addEventListener("DOMContentLoaded", function () {
  mainMenuButtonOpen.addEventListener("click", function () {
    openMenu();
  });

  mainMenuButtonClose.addEventListener("click", function () {
    closeMenu();
  });
});

jQuery(document).ready(function () {
  jQuery(".menu-item-has-children").click(function (e) {
    e.preventDefault();

    jQuery(this).toggleClass("open");
  });
});
