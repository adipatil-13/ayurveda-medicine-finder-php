// script.js
let slideIndex = 0;
const slides = document.querySelectorAll('.slideshow-container');

function showSlide(n) {
    slides[slideIndex].style.display = 'none';
    slideIndex = (n + slides.length) % slides.length;
    slides[slideIndex].style.display = 'flex';
}

function nextSlide() {
    showSlide(slideIndex + 1);
}

function prevSlide() {
    showSlide(slideIndex - 1);
}

// Initially show the first slide
showSlide(slideIndex);
