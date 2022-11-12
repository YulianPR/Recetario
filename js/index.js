// variable con el mobileSearchBar
const mobileSearchBar = document.querySelector('.mobile-search');
// Variable con el navBar del mobile
const mobileNavBar = document.querySelector('#navbar-search');
// Variable con el navbar de desktop
const mainNavBar = document.querySelector('#navbar-main');
// Variable con el carousel de comida
const foodCarousel = document.querySelector('#food-carousel');
// Variable con el grueso de cada elemento de un carousel
const carouselItemWidth = document.querySelector('.multiple-item-carousel .carousel-item').offsetWidth;

/*Función que se ejecuta cuando la página se ha cargado por completo */
document.addEventListener('DOMContentLoaded', function () {
  // Se utiliza la libreria de javascript de bootstrap para darle el funcionamiento al primer carusel
  new bootstrap.Carousel(foodCarousel);

  // Se obtiene el icono de mobile para darle la funcionalidad de mostrar el navbar de mobile
  // Otorgandole al navbar la clase .show-nav que lo muestra
  document.querySelector('.mobile-icon').addEventListener('click', function () {
    mainNavBar.classList.add('show-nav');
  });

  // Se obtiene cada link del navbar para ocultar el navbar cuando se le da click a alguno
  document.querySelectorAll('.nav-link').forEach(function (el) {
    el.addEventListener('click', function () {
      mainNavBar.classList.remove('show-nav');
    });
  });


  document.querySelector("#search-btn").addEventListener('click', function () {
    document.getElementById("check-search").checked = false;
  });
  // Se obtiene el botón de busqueda de mobile para mostrar el navbar de busqueda cuando se le da click
  // document.querySelector('.mobile-icon-search').addEventListener('click', function () {
  //   mobileNavBar.classList.add('show-nav');
  //   mobileSearchBar.classList.add('show-nav');
  // });

  // Cada vez que se presiona un link se oculta el navbar de busqueda
  document.querySelectorAll('.nav-link').forEach(function (el) {
    el.addEventListener('click', function () {
      mobileSearchBar.classList.remove('show-nav');
    });
  });

  // Se seleccionan todos los carouseles utilizando la clase multiple-item-carousel
  // para darle la funcionalidad correspondiente a cada uno
  document.querySelectorAll(".multiple-item-carousel").forEach(function (el) {

    // Si se está en mobile (el grueso de la página es menor a 768 pixeles) se le da la funcionalidad por defecto de boostrap
    if (window.innerWidth < 768) {
      el.classList.add("slide");
    }
    // No queremos que las slides se muevan automaticamente, entonces desactivamos el evento que reanuda
    // el movimiento de las slides cuando el mouse deja el carousel
    el.addEventListener("mouseleave", function (el) {

      el.target.setAttribute("data-bs-interval", "false");
    });
  });

  // Se obtiene el botón de siguiente de cada carousel para darle la funcionalidad de pasar a la siguiente slide

  document.querySelectorAll(".multiple-item-carousel .carousel-control-next").forEach(function (el) {
    el.addEventListener("click", function () {
      carouselNext(el.parentElement.querySelector(".carousel-inner"));
    });
  });

  // Se obtiene el botón de anterior de cada carousel para darle la funcionalidad de pasar a la anterior slide
  document.querySelectorAll(".multiple-item-carousel .carousel-control-prev").forEach(function (el) {
    el.addEventListener("click", function () {
      carouselPrev(el.parentElement.querySelector(".carousel-inner"));
    });
  });
});

/* Esta funcion se ejecuta cada vez que se le da siguiente en un carousel de item multiple, toma por parametro
  el interior del carousel (carouselInner), para poder obtener el ancho del carousel y poder hacer el scroll
  */
function carouselNext(carouselInner) {
  let carouselWidth = carouselInner.offsetWidth;
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
/* Esta funcion se ejecuta cada vez que se le da anteropr en un carousel, toma por parametro el interior del carousel
  (carouselInner), para poder obtener el ancho del carousel y poder hacer el scroll
*/
function carouselPrev(carouselInner) {
  let carouselWidth = carouselInner.offsetWidth;
  carouselScroll = carouselInner.scrollLeft;
  carouselScroll -= carouselItemWidth;
  carouselInner.parentElement.setAttribute("data-bs-interval", "false");
  if (carouselScroll < 0) {
    carouselScroll = carouselWidth;

    // ScrollBy es una función que permite mover desde programación el scroll de un contenedor
    // Le ponemos behaviour smooth para que haga scroll de forma bonita
    carouselInner.scrollBy({ left: carouselScroll, behavior: 'smooth' });
    return
  }
  carouselInner.scrollBy({ left: -carouselItemWidth, behavior: 'smooth' });
}


 