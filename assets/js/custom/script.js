var element = document.getElementById('navbarMain');
var trigger = document.getElementById('toggleMenu'); // or whatever triggers the toggle

trigger.addEventListener('click', function (e) {
    e.preventDefault();
    element.classList.toggle('show'); // or whatever your active class is
});

// When the user scrolls the page, execute myFunction
window.onscroll = function () {
    myFunction()
};

// Get the header
var header = document.getElementById("site-header");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("fixed-header");
    } else {
        header.classList.remove("fixed-header");
    }
}

var menu = document.querySelector(".dropdown-menu");

function dropdown(evt) {
    // Only if a click on a dropdown trigger happens, either close or open it.
    if (evt.target.hasAttribute("data-dropdown-trigger")) {
        if (menu.classList.contains("show")) {
            menu.classList.remove("show");
        } else {
            menu.classList.add("show");
        }

        return;
    }

}

window.addEventListener("click", dropdown);

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slide-item");
    // var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    // for (i = 0; i < dots.length; i++) {
    //     dots[i].className = dots[i].className.replace(" active", "");
    // }
    slides[slideIndex - 1].style.display = "block";
    // dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 2000);
}