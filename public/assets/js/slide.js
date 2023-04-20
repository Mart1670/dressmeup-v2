var slideIndex = 0;
var slides = document.getElementsByClassName("cards-style");
var dots = document.getElementsByClassName("dot");
var dotsList = document.getElementById("dot-list");

function slider(){
    console.log(window.innerWidth);
    if ( window.innerWidth <= 768 ) {
        dotsList.style.display = "flex";

        for (i = 1; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }

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
    } else {

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "block";  
        }

        dotsList.style.display = "none";
    }

}

window.addEventListener("resize", slider);
slider();