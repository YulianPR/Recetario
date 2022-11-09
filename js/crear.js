  
document.addEventListener('DOMContentLoaded', function () {
  document.querySelector('.mobile-icon').addEventListener('click', function () {
    document.getElementById('navbar-main').classList.add('show-nav');
  });
  document.querySelectorAll('.nav-link').forEach(function (el) {
    el.addEventListener('click', function () {
      document.getElementById('navbar-main').classList.remove('show-nav');

    });
  });
  document.querySelector('.mobile-icon-serch').addEventListener('click', function () {
    document.getElementById('navbar-serch').classList.add('show-nav');

    document.getElementsByClassName("mobile-serch")[0].classList.add('show-nav');


  });
  document.querySelectorAll('.nav-link').forEach(function (el) {
    el.addEventListener('click', function () {
      document.getElementById('navbar-serch').classList.remove('show-nav');

    });
  });
  
});
