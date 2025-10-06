// Sticky nav + ocultar sección al hacer scroll
const nav = document.querySelector('.nav');
const gridPersonal = document.querySelector('.grid-personal');

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    nav.classList.add('fixed');
    gridPersonal.classList.add('hidden');
  } else {
    nav.classList.remove('fixed');
    gridPersonal.classList.remove('hidden');
  }
});

// Toggle menú responsive
document.getElementById("toggleMenu").addEventListener("click", function () {
  document.getElementById("navMenu").classList.toggle("active");
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
