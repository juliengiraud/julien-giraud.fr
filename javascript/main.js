function start() {
    navbar();
    burger();
}

function burger() {
    const navbar = document.getElementById("navbar"),
          navbar_burger = document.getElementById("navbar-burger"),
          dropdowns = document.querySelectorAll(".navbar .has-dropdown");

    if (navbar_burger)
        navbar_burger.addEventListener('click', function() {
            navbar.classList.toggle("is-active");
        });

    if (dropdowns)
        dropdowns.forEach(function(dropdown) {
            dropdown.addEventListener('click', function() {
                dropdown.classList.toggle("is-active");
            });
        });
}

function navbar() {
    var a = window.scrollY,
    currentScrollTop = 0,
    lastPoint = window.scrollY,
    lastHeight;
    const navbar = document.querySelector("nav");

    navbar.style.transform = "translateY(0)";

    window.addEventListener('scroll', function() {
        var b = window.scrollY,
        c = b - lastPoint,
        h = navbar.clientHeight;

        if (h == 0)
            h = lastHeight;
        else
            lastHeight = h;

        if (c > h) {
            navbar.classList.add("display-none");
            lastPoint = b - h;
        }
        else {
            navbar.classList.remove("display-none");
            if (c < 0) {
                lastPoint = b;
                navbar.style.transform = "translateY(0px)";
            }
            else {
                navbar.style.transform = "translateY(" + -c + "px)";
            }
        }

        currentScrollTop = b;
        a = currentScrollTop;
    });
}

document.addEventListener('DOMContentLoaded', start);
