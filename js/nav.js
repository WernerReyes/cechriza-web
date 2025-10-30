// Sticky nav + ocultar sección al hacer scroll
const nav = document.querySelector('.nav');
const menu = document.querySelector('#menu');
const gridPersonal = document.querySelector('.grid-personal');
const logoContainer = document.querySelector('#logo-container');

document.addEventListener('DOMContentLoaded', () => {
  if (window.scrollY > 50) {
    menu.style.top = '0';
    menu.style.paddingTop = '20px';
  } else {
     menu.style.paddingTop = '0';
  }
});

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    // nav.classList.add('fixed');
    menu.style.top = '0';
    menu.style.paddingTop = '20px';
    // gridPersonal.classList.add('hidden');
  } else {
    // nav.classList.remove('fixed');
    menu.style.top = '';
    menu.style.paddingTop = '0';
    // gridPersonal.classList.remove('hidden');
  }
});

// Toggle menú responsive
document.getElementById("tm").addEventListener("click", function () {
  const mainMenu = document.querySelector(".main-menu");
  if (mainMenu.style.display === "block") {
    mainMenu.style.display = "none";
    // menu.style.height = "80px";
    
  } else {
    mainMenu.style.display = "block";
    // menu.style.height = "100%";
   
  }
  // mainMenu.style.display =
  //   mainMenu.style.display === "block"
  //     ? "none"
  //     : "block";
});

// Dropdown toggle para múltiples menús
const dropdowns = document.querySelectorAll(".dropdown");

dropdowns.forEach(dropdown => {
  dropdown.addEventListener("click", function (e) {
    e.stopPropagation();

    // Cierra los demás
    dropdowns.forEach(d => {
      if (d !== dropdown) d.classList.remove("open");
    });

    // Abre/cierra el actual
    dropdown.classList.toggle("open");
  });
});

// Cierra todos los dropdowns si haces clic fuera
window.addEventListener("click", function () {
  dropdowns.forEach(d => d.classList.remove("open"));
});
