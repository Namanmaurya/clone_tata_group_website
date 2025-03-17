// Function to close the model
function closeModel() {
  const model = document.getElementById("model");
  model.style.display = "none";
}

// ScrollUP

let scrollUp = document.getElementById("scrollUp");
window.onscroll = function () {
  if (
    document.body.scrollTop > 100 ||
    document.documentElement.scrollTop > 100
  ) {
    scrollUp.style.display = "block";
  } else {
    scrollUp.style.display = "none";
  }
};

function topFunction() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}


// slideshow

let slideIndex = 1;

// Function to show the current slide
function showSlides() {
  let slides = document.getElementsByClassName("carousel-item");
  let dots = document.getElementsByClassName("dot");

  
  for (let i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }
  for (let i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }

  
  slides[slideIndex - 1].classList.add("active");
  dots[slideIndex - 1].classList.add("active");
}

// Function to change slide based on the clicked dot
function currentSlide(n) {
  slideIndex = n;
  showSlides();
}


showSlides();


setInterval(function () {
  slideIndex++;
  if (slideIndex > document.getElementsByClassName("carousel-item").length) {
    slideIndex = 1;
  }
  showSlides();
}, 2000);

// slide card
let index = 0;
const slides = document.querySelector(".slides");
const slideElements = document.querySelectorAll(".slide");
const totalSlides = slideElements.length;
const visibleSlides = 3;

function moveSlide(step) {
  index += step;
  slides.style.transition = "transform 0.5s ease-in-out";
  slides.style.transform = `translateX(-${index * (100 / visibleSlides)}%)`;
}

function infiniteLoop() {
  if (index >= totalSlides - visibleSlides) {
    slides.appendChild(slides.firstElementChild);
    slides.style.transition = "none";
    slides.style.transform = `translateX(-${
      (index - 1) * (100 / visibleSlides)
    }%)`;
    setTimeout(() => {
      slides.style.transition = "transform 0.5s ease-in-out";
      slides.style.transform = `translateX(-${index * (100 / visibleSlides)}%)`;
    }, 50);
  }
}

//  Our Clients Section

document.addEventListener("DOMContentLoaded", function () {
  let num = 0; 
  const arry = document.getElementById("clientSlide"); 
  const clients = document.querySelectorAll(".client");
  const totalClients = clients.length;
  
  const slideWidth = clients[0].offsetWidth + 20;

  function updateSlide() {
      arry.style.transition = "transform 0.3s ease-in-out";
      arry.style.transform = `translateX(${-num * slideWidth}px)`;
  }

  function nextSlide() {
      num++;
      if (num >= totalClients) {
          num = 0; 
      }
      updateSlide();
  }

  function prevSlide() {
      num--;
      if (num < 0) {
          num = totalClients - 1; 
      }
      updateSlide();
  }

  
  let slideInterval = setInterval(nextSlide, 3000);

  function resetInterval() {
      clearInterval(slideInterval);
      slideInterval = setInterval(nextSlide, 3000);
  }

  

  // Attach event listeners to buttons
  document.querySelector(".btn-danger:first-of-type").addEventListener("click", function () {
      prevSlide();
      resetInterval();
  });

  document.querySelector(".btn-danger:last-of-type").addEventListener("click", function () {
      nextSlide();
      resetInterval();
  });
});


// testimonial section

const carousel = document.getElementById("carousel");
const testimonials = document.querySelectorAll(".testimonial-card");
const visibleTestimonials = 3;
let currentIndex = 0;


for (let i = 0; i < visibleTestimonials; i++) {
  let clone = testimonials[i].cloneNode(true);
  carousel.appendChild(clone);
}

function updateCarousel() {
  carousel.style.transform = `translateX(-${
    currentIndex * (105 / visibleTestimonials)
  }%)`;
}

function nextSlide() {
  if (currentIndex < testimonials.length - visibleTestimonials) {
    currentIndex++;
  } else {
    currentIndex = 0;
  }
  updateCarousel();
}

function prevSlide() {
  if (currentIndex > 0) {
    currentIndex--;
  } else {
    currentIndex = testimonials.length - visibleTestimonials;
  }
  updateCarousel();
}

setInterval(nextSlide, 3000);



function toggleDropdown() {
  const dropdown = document.querySelector(".dropdown");
  dropdown.classList.toggle("open");
}

// Function to set active link effect
document.querySelectorAll(".sidenav a").forEach(link => {
link.addEventListener("click", function() {
  document.querySelectorAll(".sidenav a").forEach(el => el.classList.remove("active"));
  this.classList.add("active");
});
});


function toggleSideNav() {
  const sideNav = document.getElementById("sideNav");
  const overlay = document.getElementById("overlay");
  const hamburger = document.querySelector(".hamburger-btn");

  if (sideNav.style.right === "0px") {
      sideNav.style.right = "-300px"; 
      overlay.style.display = "none"; 
      hamburger.classList.remove("open"); 
  } else {
      sideNav.style.right = "0"; 
      overlay.style.display = "block"; 
      hamburger.classList.add("open"); 
  }
}


// Function to make the navbar fixed when scrolling
window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");
  if (window.scrollY > 50) {
      navbar.classList.add("fixed-top");
      navbar.classList.add("scrolled");
  } else {
      navbar.classList.remove("fixed-top");
      navbar.classList.remove("scrolled");
  }
});