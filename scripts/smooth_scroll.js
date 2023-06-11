function smoothScroll(target) {
    if (target != "#") {
        var element = document.querySelector(target);
        var offset = element.offsetTop;
        var navbar = document.getElementById('nav');
        console.log(offset)

        window.scrollTo({
            top: offset - navbar.offsetHeight,
            behavior: 'smooth'
        });
    } else {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
}

document.addEventListener('DOMContentLoaded', function () {
    var links = document.querySelectorAll('a[href^="#"]');

    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener('click', function (e) {
            e.preventDefault();
            smoothScroll(this.getAttribute('href'));
        });
    }
});