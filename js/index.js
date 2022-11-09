
const mobileSearchBar = document.querySelector('.mobile-search');
const mobileNavBar = document.querySelector('#navbar-search');
const mainNavBar = document.querySelector('#navbar-main');
const foodCarousel = document.querySelector('#food-carousel');
const carouselItemWidth = document.querySelector('.multiple-item-carousel .carousel-item').offsetWidth;
const carouselWidth = document.querySelector('.multiple-item-carousel .carousel-inner').offsetWidth;

document.addEventListener('DOMContentLoaded', function () {
  const foodCarouselWrapper = new bootstrap.Carousel(foodCarousel);
  document.querySelector('.mobile-icon').addEventListener('click', function () {
    mainNavBar.classList.add('show-nav');
  });
  document.querySelectorAll('.nav-link').forEach(function (el) {
    el.addEventListener('click', function () {
      mainNavBar.classList.remove('show-nav');
    });
  });
  document.querySelector('.mobile-icon-search').addEventListener('click', function () {
    mobileNavBar.classList.add('show-nav');
    mobileSearchBar.classList.add('show-nav');
  });
  document.querySelectorAll('.nav-link').forEach(function (el) {
    el.addEventListener('click', function () {
      mobileSearchBar.classList.remove('show-nav');
    });
  });
  document.querySelectorAll(".multiple-item-carousel").forEach(function (el) {
    if (window.innerWidth < 768) {
      el.classList.add("slide");
    }
    el.addEventListener("mouseleave", function (el) {
      el.setAttribute("data-bs-interval", "false");
    });
  });
  document.querySelectorAll(".multiple-item-carousel .carousel-control-next").forEach(function (el) {
    el.addEventListener("click", function () {
      carouselNext(el.parentElement.querySelector(".carousel-inner"));
    });
  });
  document.querySelectorAll(".multiple-item-carousel .carousel-control-prev").forEach(function (el) {
    el.addEventListener("click", function () {
      carouselPrev(el.parentElement.querySelector(".carousel-inner"));
    });
  });
});

function carouselNext(carouselInner) {
  let carouselScroll = carouselInner.scrollLeft;
  carouselScroll += carouselItemWidth;
  carouselInner.parentElement.setAttribute("data-bs-interval", "false");
  if (carouselScroll > carouselWidth) {
    carouselScroll = 0;
    carouselInner.scrollBy({ left: -carouselWidth, behavior: 'smooth' });
    return
  }
  carouselInner.scrollBy({ left: carouselScroll, behavior: 'smooth' });
}

function carouselPrev(carouselInner) {
  carouselScroll = carouselInner.scrollLeft;
  carouselScroll -= carouselItemWidth;
  carouselInner.parentElement.setAttribute("data-bs-interval", "false");
  if (carouselScroll < 0) {
    carouselScroll = carouselWidth;
    carouselInner.scrollBy({ left: carouselScroll, behavior: 'smooth' });
    return
  }
  carouselInner.scrollBy({ left: -carouselItemWidth, behavior: 'smooth' });
}