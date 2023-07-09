var slides = document.getElementsByClassName("slide");
var dots = document.getElementsByClassName("dot");
var slideIndex = 0;

function showSlide(n) {
  if (n < 0) {
    slideIndex = slides.length - 1;
  } else if (n >= slides.length) {
    slideIndex = 0;
  } else {
    slideIndex = n;
  }

  for (var i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }
  for (var i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }

  slides[slideIndex].classList.add("active");
  dots[slideIndex].classList.add("active");
}

function changeSlide(n) {
  showSlide(slideIndex + n);
}

function currentSlide(n) {
  showSlide(n - 1);
}

showSlide(slideIndex);

