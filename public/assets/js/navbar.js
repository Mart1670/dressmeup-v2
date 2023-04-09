window.addEventListener('DOMContentLoaded', () => {
    burgerMenu = document.getElementById("burger-menu");
    navbar = document.querySelector("header nav");

    function displayNav(){
        navbar.classList.toggle('show-navbar');
    }

    burgerMenu.addEventListener("click", displayNav)
});