let mainNav = document.getElementById("js-menu-custom");
let navBarToggle = document.getElementById("js-navbar-toggle-custom");

navBarToggle.addEventListener("click", function () {
    mainNav.classList.toggle("active");
});