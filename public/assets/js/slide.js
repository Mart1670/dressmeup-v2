var slideIndex = 0;
var slides = document.getElementsByClassName("cards-style");
var dots = document.getElementsByClassName("dot");

function showSlides(e) {
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }

    slideIndex = e.currentTarget.dataset["index"];

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex].style.display = "block";

    dots[slideIndex].className += " active";
}

for(i=0; i<dots.length; i++){
    dots[i].addEventListener("click", showSlides);
}