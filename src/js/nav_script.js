var menuIcon = document.getElementsByClassName("menu_icon")[0];

menuIcon.addEventListener("click", function() {
    var dropMenu = document.getElementsByClassName("drop_menu")[0];

    dropMenu.classList.toggle("nonactive");
});