function start() {
    navbar();
    burger();
}

function burger() {
    const navbar = document.getElementById("navbar"),
    navbar_burger = document.getElementById("navbar-burger"),
    dropdowns = document.querySelectorAll(".navbar .has-dropdown");

    navbar_burger.addEventListener('click', function() {
        navbar.classList.toggle("is-active");
    });

    dropdowns.forEach(function(dropdown) {
        dropdown.addEventListener('click', function() {
            dropdown.classList.toggle("is-active");
        });
    });
}

function navbar() {
    var a = 0,
    currentScrollTop = 0;
    const navbar = document.querySelector("nav");

    window.addEventListener('scroll', function() {
        var b = window.scrollY;

        if (b == 0) {
            navbar.classList.remove("down");
            navbar.classList.add("top");
            navbar.classList.add("up");
        }
        else {
            navbar.classList.remove("top");
            if (b < a) {
                navbar.classList.remove("down");
                navbar.classList.add("up");
            }
            else {
                navbar.classList.remove("up");
                navbar.classList.add("down");
            }
        }
        currentScrollTop = b;
        a = currentScrollTop;
    });
}

document.addEventListener('DOMContentLoaded', start);
