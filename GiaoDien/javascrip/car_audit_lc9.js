var slideIndex = 0;
var slideq = document.getElementsByClassName("quote-slide");
var daus = document.getElementsByClassName("dau");

function portSlide(m) {
  if (m >= slideq.length) {
    slideIndex = 0;
  } else if (m < 0) {
    slideIndex = slideq.length - 1;
  }

  for (var j = 0; j < slideq.length; j++) {
    slideq[j].classList.remove("show");
    daus[j].classList.remove("show-dau");
  }

  slideq[slideIndex].classList.add("show");
  daus[slideIndex].classList.add("show-dau");
}

function nextSlide(m) {
  slideIndex += m;
  portSlide(slideIndex);
}

function prevSlide(m) {
  slideIndex = m - 1;
  portSlide(slideIndex);
}

portSlide(slideIndex);