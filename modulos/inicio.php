<?php

// require_once "data/procesamiento_billetes.php";
require_once "modulos/slider_principal.php";
?>


<link rel="stylesheet" href="css/estilo.index.css">

<div class="fondo_paralelo">


  <div
   style="padding: 60px 0;"
  class="flex flex-col items-center justify-center container">

    <!-- Bloque principal -->
    <div class="titulo_cuatro">
      <div class="flex flex-col items-center justify-center text-center">
        <h1 class="titulo_elegirnos">¿Por qué elegirnos?</h1>
        <h1 class="unico"> <strong>Aliados en la Gestión del Efectivo</strong> </h1>
        <p class="">Ofrecemos tecnología confiable, soporte técnico a nivel nacional y soluciones adaptadas a tu operación</p>

      </div>
    </div>

    <!-- Calidad y Seguridad -->
    <div class="flex gap-3 flex-wrap justify-center">
      <div class="">
        <div class="borde_elegirnos  shadow-xl shadow-blue-950">
          <div class="p-10 flex flex-col items-center justify-center text-center">
            <i class="fas fa-lock icono"></i>
            <h1 class="subtitulo_elegirnos"> <strong>Confianza y Certificación</strong></h1>
            <p>Distribuimos equipos certificados por las marcas más reconocidas del Sector  Financiero y Grandes Empresas</p>
          </div>
        </div>
      </div>

      <!-- Variedad de Equipos -->
      <div class="">
        <div class="borde_elegirnos shadow-xl shadow-blue-950">
          <div class="p-10 flex flex-col items-center justify-center text-center">
            <i class="fa-solid fa-server icono"></i>
            <h1 class="subtitulo_elegirnos"> <strong>Soluciones Diversificadas</strong></h1>
            <p>Desde contadoras hasta recicladores de efectivo inteligentes, para Bancos, Empresas y Retail.</p>
          </div>
        </div>
      </div>

      <!-- Mantenimiento Especializado -->
      <div class="">
        <div class="borde_elegirnos shadow-xl shadow-blue-950">
          <div class="p-10 flex flex-col items-center justify-center text-center">
            <i class="fas fa-tools icono"></i>
            <h1 class="subtitulo_elegirnos"><strong>Soporte Técnico a Nivel Nacional</strong> </h1>
            <p>Ingenieros especializados brindan atención y mantenimiento preventivo y correctivo.</p>
          </div>
        </div>
      </div>

      <!-- Asesoría Personalizada -->
      <div class="">
        <div class="borde_elegirnos shadow-xl shadow-blue-950">
          <div class="p-10 flex flex-col items-center justify-center text-center">
            <i class="fa-solid fa-users-viewfinder icono"></i>
            <h1 class="subtitulo_elegirnos"> <strong>Consultoría Especializada</strong></h1>
            <p>Analizamos el flujo de efectivo para recomendar e implementar la mejor solución.</p>
          </div>
        </div>
      </div>

      <!-- Alquiler y Venta -->
      <div class="">
        <div class="borde_elegirnos shadow-xl shadow-blue-950">
          <div class="p-10 flex flex-col items-center justify-center text-center">
            <i class="fa-solid fa-user-gear icono"></i>
            <h1 class="subtitulo_elegirnos"><strong>Venta Flexibles y Arrendamiento</strong> </h1>
            <p>Planes a medida según tus necesidades operativas y ajustadas a tu presupuesto.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Cobertura -->
    <!-- <div>
      <div class="borde_elegirnos shadow-xl shadow-blue-950">
        <div class="p-10">
          <i class="fa-solid fa-plane-arrival icono"></i>
          <h1 class="subtitulo_elegirnos"> <strong>Cobertura Nacional</strong></h1>
          <p>Presencia en todo el Perú para atenderte donde estés.</p>
        </div>
      </div>
    </div> -->

  </div>



  <div class="container borde_superior_grilla">

  
    <div class="grilla">

      <div>
        <h1>
         En CECHRIZA , impulsamos la eficiencia en la Gestión del Efectivo con equipos de alta tecnología, procesos seguros y atención especializada en todo el Perú.
        </h1>
      </div>

      <!-- <div>
        <a href="nosotros" class="shadow-xl shadow-blue-950">
          Conoce más sobre nuestra propuesta de valor
        </a>
      </div> -->

    </div>
  </div>




  <div class="container">
    <!-- <div class="grid_doble">

      <div class="item">
        <div class="shadow-xl shadow-blue-950 coin">
          <i class="fas fa-coins"></i>
        </div>
        <h1 class="pt-10 text-blue-900">EQUIPOS PARA PROCESAMIENTO DE</h1>
        <h1 class="text-blue-900"> <strong>MONEDAS</strong> </h1>
        <a href="procesamiento_billetes" class="mt-10 boton_informativo">Mas información</a>

      </div>

      <div class="item">
        <div class="shadow-xl shadow-blue-950 dollar">
          <i class="fas fa-dollar-sign"></i>
        </div>
        <h1 class="pt-10 text-blue-900">EQUIPOS PARA PROCESAMIENTO DE</h1>
        <h1 class="text-blue-900"> <strong>BILLETES</strong> </h1>
        <a href="procesamiento_moneda" class="mt-10 boton_informativo">Mas información</a>
      </div>

    

    </div> -->



    

<!-- From Uiverse.io by Bodyhc --> 
 <div
  style="margin-bottom: 10px"
 class="w-fit flex flex items-center justify-end gap-3">
   <label class="toggle-switch">
    <input type="checkbox" id="myToggle">
    <span class="slider"></span>
  </label>
  <h2 id="toggleLabel">Billetes </h2>
 </div>


     <div id="bills" class="swiper mySwiper">
       <?php
$categoriesById = [];
foreach ($equipment_functions_bill as $fun) {

    $categoriesById[intval($fun->id)] = $fun;
  
}
?>
    <div class="swiper-wrapper">

     <?php foreach ($equipments_bill as $item): ?>
          <?php $category = $categoriesById[$item->function_id] ?? null; ?>
          <div class="swiper-slide">
            <a class="producto" href="detalle_equipo?id=<?=$item->id?>&type=billete">
      <img src="<?= $item->image ?>" class="w-auto h-48" alt="KD10">
      <h2><?= $item->name ?></h2>
      <p><?= $item->description ?></p>
      <div class="etiquetas">
        
      <span class="etiqueta"><?= $category ? $category->name : 'Sin categoría' ?></span>
        <span class="etiqueta">
          <i class="fa-solid fa-money-bill"></i>
        </span>
      </div>
     </a>
     </div>
        <?php endforeach; ?>
  </div>
  </div>


  <div id="coins" style="display: none;" class="swiper mySwiper">
     <?php
$categoriesById = [];
foreach ($equipment_functions_monedas as $fun) {

    $categoriesById[intval($fun->id)] = $fun;
  
}
?>
    <div class="swiper-wrapper">

     <?php foreach ($equipments_monedas as $item): ?>
          <?php $category = $categoriesById[$item->function_id] ?? null; ?>
          <div class="swiper-slide">
            <a class="producto" href="detalle_equipo?id=<?=$item->id?>&type=moneda">
      <img src="<?= $item->image ?>"  alt="KD10">
      <h2><?= $item->name ?></h2>
      <p><?= $item->description ?></p>
      <div class="etiquetas">
        
      <span class="etiqueta"><?= $category ? $category->name : 'Sin categoría' ?></span>
        <span class="etiqueta">
          
<i class="fa-solid fa-coins"></i>
        </span>
      </div>
     </a>
     </div>
        <?php endforeach; ?>
  </div>
  </div>


    
 <script>
  const toggle = document.getElementById("myToggle");
  const label = document.getElementById("toggleLabel");
  const bills = document.getElementById("bills");
  const coins = document.getElementById("coins");
  toggle.addEventListener("change", () => {
    label.textContent = toggle.checked ? "Monedas" : "Billetes";
    if (toggle.checked) {
      bills.style.display = "none";
      coins.style.display = "block";
    } else {
       bills.style.display = "block";
      coins.style.display = "none";
    }
  });
</script>
    


  <!-- <div class="swiper-slide">Slide 9</div>  -->
  
  <style>

    

  
    .catalogo {
    display: flex;
    flex-wrap: wrap;
    gap: 0;
    max-width: 900px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }

  .producto {
    flex: 1 1 50%;
    background-color: #f0f0f0;
    padding: 40px 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: left;
    box-sizing: border-box;
    transition: all 0.4s ease; /* transición suave */
    position: relative;
    overflow: hidden;
  }

  .producto img {
    width: 200px;
    height: 200px;
    margin: 0 auto 20px;
    display: block;
    object-fit: cover;
    transition: transform 0.4s ease, box-shadow 0.4s ease; /* animación en imagen */
     filter: drop-shadow(0 0 0 rgba(0, 0, 0, 0)); /* sin sombra inicial */
  }
/* width: 100%;
    height: 100%;
    object-fit: contain; */
  .producto h2 {
    font-size: 1.8rem;
    margin: 10px 0;
    color: #222;
    transition: color 0.4s ease;
  }

  .producto p {
    color: #444;
    margin-bottom: 20px;
    transition: color 0.4s ease;
  }

  .etiquetas {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
  }

  .etiqueta {
    border: 1px solid #ccc;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 0.85rem;
    background-color: #fff;
    transition: all 0.4s ease;
  }

  /* --- Efectos al hacer hover --- */
  .producto:hover {
    background-color: #4b7cc7ff;
    color: #fff;
    transform: translateY(-6px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  }

  .producto:hover h2 {
    color: #fff;
  }

  .producto:hover p {
    color: #e0e0e0;
  }

  .producto:hover .etiqueta {
    background-color: transparent;
    border: 1px solid #fff;
    color: #fff;
  }

  .producto:hover img {
    transform: scale(1.05);
    filter: drop-shadow(0 0 25px black); /* halo azul acoplado */
  }

  @media (max-width: 768px) {
    .producto {
      flex: 1 1 100%;
    }
  }


.toggle-switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
 
}

.toggle-switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 34px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #043399;
}

input:focus + .slider {
  box-shadow: 0 0 1px #043399;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

  

  </style>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
       breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    });
  </script>
  </div>





  <!-- <section class="section_slider_billete">
    <div class="container p-10">
      <div class="titulo_sliders">
        <h6 class="subtitulo">Máquinas Contadoras de Billetes</h6>
        <h1 class="titulo">Soluciones confiables para el conteo eficiente de efectivo</h1>
        <p class="descripcion">
          En CECHRIZA SAC ofrecemos equipos de conteo de billetes de última generación, diseñados para optimizar tus procesos, reducir errores y brindar seguridad en cada operación. Ideales para bancos, empresas financieras, y negocios que manejan grandes volúmenes de efectivo.
        </p>
        <a href="procesamiento_billetes" class="btn_info">Más información sobre nuestras contadoras de billetes →</a>
      </div>

      <div class="swiper mySwiperBilletes">
        <div class="swiper-wrapper">
     
          <div class="swiper-slide">
            <div class="tarjeta_producto">
              <h1>Kisan KD 100</h1>
              <div class="div_imagen_billete">
                <img src="img/kisan_kd_100.png" alt="Kisan KD 100" />
              </div>
              <p>Contadora de billetes compacta y precisa, ideal para tareas de conteo rápido en espacios reducidos.</p>
              <a href="detalle_equipo">Más información →</a>
            </div>
          </div>

  
          <div class="swiper-slide">
            <div class="tarjeta_producto">
              <h1>Magner 165</h1>
              <div class="div_imagen_billete">
                <img src="img/MG165_cechriza.png" alt="Magner 165" />
              </div>
              <p>Alta velocidad y fiabilidad. Detecta billetes falsos con tecnología avanzada de autenticación.</p>
              <a href="detalle_equipo">Más información →</a>
            </div>
          </div>

     
          <div class="swiper-slide">
            <div class="tarjeta_producto">
              <h1>Kisan Newton 3</h1>
              <div class="div_imagen_billete">
                <img src="img/newton_30_cechriza.png" alt="Kisan Newton 3" />
              </div>
              <p>Tecnología de conteo mixto multimoneda con clasificación inteligente. Precisión y eficiencia garantizadas.</p>
              <a href="detalle_equipo">Más información →</a>
            </div>
          </div>

     
          <div class="swiper-slide">
            <div class="tarjeta_producto">
              <h1>Kisan K6</h1>
              <div class="div_imagen_billete">
                <img src="img/familia_kisan_cechriza.png" alt="Kisan K6" />
              </div>
              <p>Modelo avanzado para entidades financieras. Clasifica y valida billetes en tiempo real con interfaz intuitiva.</p>
              <a href="detalle_equipo">Más información →</a>
            </div>
          </div>


            <div class="swiper-slide">
            <div class="tarjeta_producto">
              <h1>Kisan K6</h1>
              <div class="div_imagen_billete">
                <img src="img/familia_kisan_cechriza.png" alt="Kisan K6" />
              </div>
              <p>Modelo avanzado para entidades financieras. Clasifica y valida billetes en tiempo real con interfaz intuitiva.</p>
              <a href="detalle_equipo">Más información →</a>
            </div>
          </div>

        </div>
       
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

 -->

  <div class="boletin !p-0">
    <div class="container">
      <h1 class="titulo_boletin">
        Propuesta de Valor
      </h1>

      <div class="grid_boletin">
        <div class="item_boletin">
          <div class="contenedor_boletin">
            <h1 class="font-bold text-lg">Garantía</h1>
            <h6 class="text-sm mt-2">
              En CECHRIZA garantizamos la calidad de nuestros equipos y servicios. Cada producto cuenta con respaldo
              técnico y cobertura postventa que asegura su correcto funcionamiento desde el primer día.
            </h6>
            <p>
              <i class="fa fa-angle-right" aria-hidden="true"></i> Equipos con garantía extendida y soporte permanente.
            </p>
          </div>
        </div>

        <div class="item_boletin">
          <div class="contenedor_boletin">
            <h1 class="font-bold text-lg">Innovación</h1>
            <h6 class="text-sm mt-2">
              Apostamos por la tecnología más avanzada del mercado para ofrecer soluciones modernas, eficientes y
              adaptadas a las necesidades reales de nuestros clientes.
            </h6>
            <p>
              <i class="fa fa-angle-right" aria-hidden="true"></i> Equipos con sistemas inteligentes y conectividad
              total.
            </p>
          </div>
        </div>

        <div class="item_boletin">
          <div class="contenedor_boletin">
            <h1 class="font-bold text-lg">Transparencia</h1>
            <h6 class="text-sm mt-2">
              Nuestro compromiso es brindar asesoría honesta, información clara y procesos abiertos. Nos enfocamos en
              construir relaciones duraderas basadas en la confianza y la responsabilidad.
            </h6>
            <p>
              <i class="fa fa-angle-right" aria-hidden="true"></i> Comunicación directa y asesoría personalizada en cada
              etapa.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- <div class="section_slider_moneda">
  <div class="container p-10">
    <div class="titulo_sliders">
      <h6 class="subtitulo">
        Máquinas Contadoras de Moneda
      </h6>

      <h1 class="titulo">
        Tecnología precisa para agilizar la gestión de efectivo
      </h1>

      <p class="descripcion">
        En <strong>CECHRIZA SAC</strong>, contamos con soluciones especializadas para el conteo eficiente de monedas. Nuestros equipos destacan por su velocidad, precisión y capacidad de clasificación, optimizando las operaciones en bancos, supermercados, cooperativas y entidades con alto flujo de efectivo.
      </p>
        <a href="procesamiento_moneda" class="btn_info">        Descubre nuestras contadoras de monedas →</a>
     
    </div>

    <div class="mt-10">
      <div class="swiper mySwiperMonedas">
        <div class="swiper-wrapper">
          
          <div class="swiper-slide">
            <div class="tarjeta_producto">
              <h1>SCAN COIN CDS9</h1>
              <div class="div_imagen_billete shadow-xl shadow-blue-950">
                <img src="img/scan_coin_cds9_cechriza.png" alt="SCAN COIN CDS9" />
              </div>
              <p>Sistema compacto de alto rendimiento. Ideal para tareas de conteo rápido y clasificación básica.</p>
              <a href="detalle_equipo">Más información →</a>
            </div>
          </div>

         
          <div class="swiper-slide">
            <div class="tarjeta_producto">
              <h1>SCAN COIN 303</h1>
              <div class="div_imagen_billete shadow-xl shadow-blue-950">
                <img src="img/scan_coin_303.png" alt="SCAN COIN 303" />
              </div>
              <p>Ideal para puntos de cobro. Detecta monedas falsas y realiza separación automática.</p>
              <a href="detalle_equipo">Más información →</a>
            </div>
          </div>

        
          <div class="swiper-slide">
            <div class="tarjeta_producto">
              <h1>CT COIN PELICAN 301</h1>
              <div class="div_imagen_billete shadow-xl shadow-blue-950">
                <img src="img/ct_coin_pelican_301.png" alt="CT COIN PELICAN 301" />
              </div>
              <p>Contadora y clasificadora multimoneda. Rendimiento óptimo para tareas intensivas.</p>
              <a href="detalle_equipo">Más información →</a>
            </div>
          </div>

     
          <div class="swiper-slide">
            <div class="tarjeta_producto">
              <h1>SCAN COIN DTC6</h1>
              <div class="div_imagen_billete shadow-xl shadow-blue-950">
                <img src="img/scan_coin_dtc6.png" alt="SCAN COIN DTC6" />
              </div>
              <p>Modelo premium con interfaz táctil, clasificación por denominación y almacenamiento automático.</p>
              <a href="detalle_equipo">Más información →</a>
            </div>
          </div>

          
          <div class="swiper-slide">
            <div class="tarjeta_producto">
              <h1>SCAN COIN DTC6</h1>
              <div class="div_imagen_billete shadow-xl shadow-blue-950">
                <img src="img/scan_coin_dtc6.png" alt="SCAN COIN DTC6" />
              </div>
              <p>Modelo premium con interfaz táctil, clasificación por denominación y almacenamiento automático.</p>
              <a href="detalle_equipo">Más información →</a>
            </div>
          </div>


        </div>



        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
</div> -->



  <!-- <section class="py-12 px-4 text-center  seccion_boletin">
    <h2 class=" font-bold text-gray-900 mb-4">Suscríbete al boletín de CECHRIZA</h2>
    <p class="description">
      Recibe noticias, promociones y las últimas novedades sobre nuestros equipos de conteo, detección y mantenimiento
      técnico.
    </p>

    <form class="flex flex-col sm:flex-row items-center justify-center gap-3 max-w-md mx-auto p-6">
   
      <div class="input-container">
        <span class="input-icon">
          <svg viewBox="0 0 20 20">
            <path d="M2.94 6.34A1.5 1.5 0 014.5 5h11a1.5 1.5 0 011.56 1.34L10 11.33 2.94 6.34z"></path>
            <path d="M2 8.38v5.12A1.5 1.5 0 003.5 15h13a1.5 1.5 0 001.5-1.5V8.38l-8 5.33-8-5.33z"></path>
          </svg>
        </span>
        <input type="email" placeholder="Ingresa tu correo">
      </div>

     
      <button type="submit"
        class="bg-blue-600  text-white font-semibold px-5 py-2.5 rounded-lg transition duration-300 w-full sm:w-auto">
        Suscribirse
      </button>
    </form>

    <p class="text-sm  mt-4">
      Regístrate en segundos. o.
      <a href="#" class="text-blue-600 ">Términos del servicio</a> y
      <a href="#" class="text-blue-600 ">Política de privacidad</a>.
    </p>
  </section> -->



  <div class="div_matenimiento">
    <div class="container">
      <div class="grid_mantenimiento">
        <div>
          <video id="video_cechriza" height="auto" muted loop autoplay playsinline>
            <source src="img/video_cechriza.mp4" type="video/mp4">
            Tu navegador no soporta el video.
          </video>
        </div>
        <div>
          <h1>Servicio de Mantenimiento Técnico Especializado</h1>
          <p>En CECHRIZA brindamos mantenimiento preventivo y correctivo para asegurar el óptimo funcionamiento de tus
            equipos. Nuestro equipo técnico capacitado garantiza intervenciones seguras, rápidas y eficientes.</p>
          <ul>
            <li>Diagnóstico integral y mantenimiento de hardware especializado.</li>
            <li>Revisión y calibración de sensores, bandejas y mecanismos internos.</li>
            <li>Soporte técnico post-servicio con repuestos originales y garantía.</li>
          </ul>
          <a href="" class="mas_info_mantenimiento">Conocer acerca de los mantenimientos</a>
        </div>
        <div>
          <img src="img/banner_cechriza.png" alt="">
          <a href="" class="descargar_brochure">Descargar Brochure</a>
        </div>
      </div>
    </div>
  </div>


  <?php
  require_once "footer/clients.php";
  require_once "footer/contact.php";
  ?>






  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const video = document.getElementById("video_cechriza");

      // Requiere muted y playsinline para que algunos navegadores permitan autoplay
      video.muted = true;
      video.play()
        .then(() => {
          console.log("🎬 Video autoplay iniciado");
        })
        .catch((error) => {
          console.warn("⚠️ Autoplay bloqueado por el navegador:", error);
        });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <script>
    const configSwiper = {
      loop: true,
      spaceBetween: 30,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 4 }
      }
    };

    // Inicializar ambos sliders con la misma configuración
    new Swiper(".mySwiperBilletes", configSwiper);
    new Swiper(".mySwiperMonedas", configSwiper);
  </script>