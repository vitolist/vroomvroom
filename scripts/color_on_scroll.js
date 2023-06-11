var nav = document.getElementById('nav');
var spacer = document.getElementById('spacer');

nav.classList.add("nav-transparent");
window.onscroll = function () {
    if (document.documentElement.scrollTop >= spacer.offsetHeight - nav.offsetHeight) {
        nav.classList.add("nav-colored");
        nav.classList.remove("nav-transparent");
    }
    else {
        nav.classList.add("nav-transparent");
        nav.classList.remove("nav-colored");
    }
};