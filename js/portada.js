
  // Carrusel y miniaturas sincronizadas
  const carousel = document.getElementById('carousel');
  const slides = Array.from(carousel.querySelectorAll('.img_1, .img_2, .img_3 , .img_4'));
  const thumbnails = Array.from(document.querySelectorAll('.carrousel_miniatura > div'));
  let index = 0;

  // Animación secuencial del contenido de texto
  function animateSlideText(slide) {
    const content = slide.querySelector('.slide-content');
    if (content) {
      [...content.children].forEach(el => {
        el.classList.remove('animate');
        el.style.opacity = '0';
      });

      setTimeout(() => {
        [...content.children].forEach((el, i) => {
          setTimeout(() => {
            el.classList.add('animate');
            el.style.opacity = '1';
          }, i * 150);
        });
      }, 300);
    }
  }

  // Actualizar miniatura activa
  function updateMiniaturaActive(i) {
    thumbnails.forEach(thumb => thumb.classList.remove('active'));
    if (thumbnails[i]) thumbnails[i].classList.add('active');
  }

  // Mostrar slide y sincronizar miniatura
  function showSlide(idx) {
    carousel.scrollTo({
      left: carousel.clientWidth * idx,
      behavior: 'smooth'
    });
    animateSlideText(slides[idx]);
    updateMiniaturaActive(idx);
  }

  // Avance automático
  setInterval(() => {
    index = (index + 1) % slides.length;
    showSlide(index);
  }, 5000);

  // Activación manual con miniaturas
  thumbnails.forEach((thumb, i) => {
    thumb.addEventListener('click', () => {
      index = i;
      showSlide(i);
    });
  });

  // Cargar animación inicial
  window.addEventListener('DOMContentLoaded', () => {
    animateSlideText(slides[0]);
    updateMiniaturaActive(0);
  });

