function start() {
    navbar();
    burger();
    active();
}

function active() {
    const activator = document.querySelectorAll(".activator");
    const active = document.querySelectorAll(".active");

    if (!activator || !active || // pas besoin sur la page
            activator.length != active.length) { // erreur d'utilisation
        return;
    }

    active.forEach( (e, i) => {
        var a = activator.item(i);

        e.classList.add("active-transition");
        a.addEventListener('click', () => {
            a.classList.toggle("active-activator");

            if (!e.classList.contains("is-active")) {
                e.classList.add("is-active");
                e.classList.add("to-active");
                var style = getComputedStyle(e);
                var height = e.offsetHeight + parseInt(style.marginTop) + parseInt(style.marginBottom) + 12;
                e.classList.remove("to-active");
                e.classList.remove("is-active");
                setTimeout( () => {
                    e.style.maxHeight = (1.1 * height) + "px";
                    e.classList.add("is-active");
                }, 10);
            } else {
                e.style.maxHeight = null;
                e.classList.remove("is-active");
            }
        });
    });

    window.addEventListener('resize', () => {
        active.forEach( e => {
            if (e.classList.contains("is-active")) {
                e.style.maxHeight = null;
                e.classList.add("to-active");
                var style = getComputedStyle(e);
                var height = e.offsetHeight + parseInt(style.marginTop) + parseInt(style.marginBottom) + 12;
                e.style.maxHeight = (1.1 * height) + "px";
                e.classList.remove("to-active");
            }
        });
    });
}

function burger() {
    const navbar = document.getElementById("navbar");
    const navbar_burger = document.getElementById("navbar-burger");
    const dropdowns = document.querySelectorAll(".navbar .has-dropdown");

    if (navbar_burger) {
        navbar_burger.addEventListener('click', () => {
            navbar.classList.toggle("is-active");
        });
    }

    dropdowns.forEach( d => {
        d.addEventListener('click', () => {
            d.classList.toggle("is-active");
        });
    });
}

function navbar() {
    const navbar = document.querySelector("nav");
    var a = window.scrollY;
    var currentScrollTop = 0;
    var lastPoint = window.scrollY;
    var lastHeight;

    navbar.style.transform = "translateY(0)";

    window.addEventListener('scroll', () => {
        var b = window.scrollY;
        var c = b - lastPoint;
        var h = navbar.clientHeight;

        if (h == 0) {
            h = lastHeight;
        } else {
            lastHeight = h;
        }

        if (c > h) {
            navbar.classList.add("display-none");
            lastPoint = b - h;
        } else {
            navbar.classList.remove("display-none");
            if (c < 0) {
                lastPoint = b;
                navbar.style.transform = "translateY(0px)";
            } else {
                navbar.style.transform = "translateY(" + -c + "px)";
            }
        }

        currentScrollTop = b;
        a = currentScrollTop;
    });
}

window.addEventListener('load', start);
