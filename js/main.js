// SlideshoW
if (document.querySelector(".mySlides")) {
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let i;
    let slides = document.querySelectorAll(".mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 10000);
  }
}

// Header
const nav = document.querySelector("#nav");
const img = document.querySelector("#logoImg");
const buttonsDiv = document.querySelector(".header-buttons");
const buttons = document.querySelectorAll(".buttons");
const socials = document.querySelectorAll(".fa");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    nav.style.backgroundColor = "white";

    if (document.URL.includes("index.php")) {
      img.src = "images/logo_black.png";
    } else {
      img.src = "../images/logo_black.png";
    }

    buttonsDiv.style.backgroundColor = "white";

    buttons.forEach((button) => {
      button.style.color = "black";
    });

    socials.forEach((social) => {
      social.style.color = "black";
    });
  } else {
    nav.style.backgroundColor = "unset";

    if (document.URL.includes("index.php")) {
      img.src = "images/logo.png";
    } else {
      img.src = "../images/logo.png";
    }

    buttonsDiv.style.backgroundColor = "unset";

    buttons.forEach((button) => {
      button.style.color = "white";
    });

    socials.forEach((social) => {
      social.style.color = "white";
    });
  }
}

function toggleMenu() {
  if (buttonsDiv.style.display === "none") {
    buttonsDiv.style.display = "block";
  } else {
    buttonsDiv.style.display = "none";
  }
}

// Wanneer formulier
const wanneer = document.querySelector(".wanneer");
const innerForm = document.querySelector(".innerForm");
const hoeveelTekst = document.querySelector(".hoeveelTekst");
const hoeveel = document.querySelector(".hoeveel");
const boekenSubmit = document.querySelector(".boekenSubmit");

let openedWanneer = 0;

wanneer.addEventListener("click", () => {
  if (openedWanneer == 0) {
    openedWanneer = 1;
    innerForm.style.display = "block";
    hoeveelTekst.style.display = "none";
    hoeveel.style.display = "none";
    boekenSubmit.style.display = "none";
  } else if (openedWanneer == 1) {
    openedWanneer = 0;
    innerForm.style.display = "none";
    hoeveelTekst.style.display = "block";
    hoeveel.style.display = "block";
    boekenSubmit.style.display = "block";
  }
});

//Reviews
const reviews = document.querySelector(".reviews");
const review = document.querySelectorAll(".review");

let openedReviews = 0;

reviews.addEventListener("click", () => {
  if (openedReviews == 0) {
    openedReviews = 1;
    review.forEach((review) => {
      review.style.display = "block";
    });
  } else if (openedReviews == 1) {
    openedReviews = 0;
    review.forEach((review) => {
      review.style.display = "none";
    });
  }
});
