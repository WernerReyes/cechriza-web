<div class="container mt-10">
  <h1 class="text-center titulo_slider_cliente">Nuestros Clientes</h1>
  <p class="text-center sub_slider_parrafo">
    Empresas líderes a nivel nacional confían en nuestra tecnología para mejorar la gestión de su efectivo.
  </p>

  <div class="swiper swiper-clientes">
    <div class="swiper-wrapper">
      <div class="swiper-slide item_cliente"><img src="img/clientes/bcp-logo.png" alt="BCP"></div>
      <div class="swiper-slide item_cliente"><img src="img/clientes/bbva-logo.png" alt="BBVA"></div>
      <div class="swiper-slide item_cliente"><img src="img/clientes/scotiabank-logo.png" alt="Scotiabank"></div>
      <div class="swiper-slide item_cliente"><img src="img/clientes/santander-logo.png" alt="Santander"></div>
      <div class="swiper-slide item_cliente"><img src="img/clientes/hermes-logo.png" alt="Hermes"></div>
      <div class="swiper-slide item_cliente"><img src="img/clientes/atlantic-city-logo.png" alt="Atlantic City"></div>
      <div class="swiper-slide item_cliente"><img src="img/clientes/golden-palace-logo.png" alt="Golden Palace"></div>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
 const swiperClientes = new Swiper('.swiper-clientes', {
  slidesPerView: 2,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true
  },
  breakpoints: {
    640: { slidesPerView: 2 },
    768: { slidesPerView: 3 },
    1024: { slidesPerView: 4 } // máximo 4
  }
});


  // Reactivar autoplay después de interacción manual (seguro)
  swiperClientes.el.addEventListener('mouseleave', () => {
    swiperClientes.autoplay.start();
  });
</script>


