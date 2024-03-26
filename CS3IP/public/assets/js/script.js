// Scroller Connected To Header
const header = document.querySelector("nav");

window.onscroll = function () {
    var top = window.scrollY;
    console.log(top);
    if (top >= 5) {
        header.classList.add("active");
    } else {
        header.classList.remove("active");
    }
};


// Menu Toggle
const menuToggle = document.querySelector(".menu-toggle");
const links = document.querySelector(".links");
const right = document.querySelector(".right");

menuToggle.addEventListener("click", () => {
    menuToggle.classList.toggle("active");
    links.classList.toggle("active");
    right.classList.toggle("active");
});

$(document).ready(function () {
    $("nav .menu-toggle").click(function () {
        $("nav ul").toggleClass("toggled");
    });
});


// Home page gallery
document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll('.slide');
  const autoBtns = document.querySelectorAll('.auto-btn');
  const manualBtns = document.querySelectorAll('.manual-btn');
  let currentIndex = 0;

  function showSlide(index) {
      slides.forEach((slide, i) => {
          slide.style.transform = `translateX(-${index * 20}%)`;
      });
  }

  function activateBtns(index) {
      autoBtns.forEach((btn, i) => {
          btn.classList.remove('active');
          if (i === index) {
              btn.classList.add('active');
          }
      });
      manualBtns.forEach((btn, i) => {
          btn.classList.remove('active');
          if (i === index) {
              btn.classList.add('active');
          }
      });
  }

  function autoSlide() {
      currentIndex++;
      if (currentIndex === slides.length) {
          currentIndex = 0;
      }
      showSlide(currentIndex);
      activateBtns(currentIndex);
  }

  autoBtns.forEach((btn, index) => {
      btn.addEventListener('click', () => {
          currentIndex = index;
          showSlide(currentIndex);
          activateBtns(currentIndex);
      });
  });

  manualBtns.forEach((btn, index) => {
      btn.addEventListener('click', () => {
          currentIndex = index;
          showSlide(currentIndex);
          activateBtns(currentIndex);
      });
  });

  setInterval(autoSlide, 5000); // Change slide every 5 seconds
});

  