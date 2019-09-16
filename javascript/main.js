function start() {
    navbar();
    burger();
}

function burger() {
    var c = document.getElementById("navbar-burger");

    c.addEventListener('click', function() {
        c.classList.toggle("is-active");
    });
}

function navbar() {
    var c = 0,
    currentScrollTop = 0,
    navbar = document.querySelector("nav");

    window.addEventListener('scroll', function() {
        var a = window.scrollY,
        b = navbar.clientHeight;

        if (a == 0) {
            navbar.classList.remove("down");
            navbar.classList.add("top");
            navbar.classList.add("up");
        }
        else {
            navbar.classList.remove("top");
            if (a < c) {
                navbar.classList.remove("down");
                navbar.classList.add("up");
            }
            else {
                navbar.classList.remove("up");
                navbar.classList.add("down");
            }
        }
        currentScrollTop = a;
        c = currentScrollTop;
    });
}

document.addEventListener('DOMContentLoaded', start);
