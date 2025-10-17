<link rel="stylesheet" href="css/procesamiento_billete.css">
<link rel="stylesheet" href="css/detalle_equipo.css">
<link rel="stylesheet" href="css/procesamiento.css">


<?php
// require_once "data/procesamiento_billetes.php";
// URL: ejemplo.com/producto.php?id=123

$id = $_GET['id'] ?? null;
$type = $_GET['type'] ?? null;
if ($id && $type) {
  $equipmentsList = [];
  $functionsList = [];
  if ($type === 'billete') {
    require_once "data/procesamiento_billetes.php";
    $equipmentsList = $equipments_bill; // Equipos de billetes
    $functionsList = $equipment_functions_bill;
  } elseif ($type === 'moneda') {
    require_once "data/procesamiento_monedas.php";
    $equipmentsList = $equipments_monedas; // Equipos de monedas
    $functionsList = $equipment_functions_monedas;
  } else {
    // Tipo no válido, manejar el error según sea necesario
    die("Tipo de equipo no válido.");
  }
  $equipment = array_filter($equipmentsList, fn($eq) => $eq->id == $id);
  $equipmentSelected = reset($equipment);
  $equipmentFunction = array_filter($functionsList, fn($fn) => intval($fn->id) == intval($equipmentSelected->function_id));
  $efSelected = reset($equipmentFunction);

  $equipmentsType = array_filter($equipmentsList, fn($eq) => $eq->function_id == $equipmentSelected->function_id && intval($eq->id) != intval($equipmentSelected->id));
}

$typeText = $type === 'billete' ? 'Billetes' : 'Monedas';
?>

<div class="fondo_paralelo">


  <div class="">
    <div class="grid fondo_procesamiento_billete">
      <h2 class="text-center text-white titulo">Equipos <?php echo $efSelected->name; ?> de <?php echo $typeText; ?>
      </h2>
      <h1 class="text-center text-white subtitulo">
        Precisión, velocidad y seguridad en cada conteo
      </h1>
      <p class="text-center text-white">
        Nuestros clasificadores de <?php echo strtolower($typeText); ?> están diseñados para optimizar el flujo de
        trabajo en instituciones
        financieras, <br> incrementando la eficiencia y reduciendo errores operativos. Perfectos para bancos, casas de
        cambio y empresas que requieren alto rendimiento.
      </p>
      <a href="">Descargar Presentación</a>
    </div>
  </div>


  <div class="container">
    <div class="grilla_detalle">
      <!-- Sección de imágenes -->
      <div>
        <img src="<?php echo $equipmentSelected->image; ?>" alt="<?php echo $equipmentSelected->name; ?>"
          class="imagen_principal">
        <div class="grilla_imagenes">
          <div><img src="<?php echo $equipmentSelected->image; ?>" alt="<?php echo $equipmentSelected->name; ?>"
              class="miniatura"></div>
          <!-- <div><img src="img/scan_coin_303.png" alt="Vista lateral Newton 30" class="miniatura"></div> -->
          <!-- <div><img src="img/scan_coin_dtc6.png" alt="Panel de control Newton 30" class="miniatura"></div> -->
        </div>
      </div>

      <!-- Información del producto -->
      <div>
        <h1><?php echo $equipmentSelected->name; ?></h1>
        <p>
          <!-- La <strong>Newton 30</strong> es una contadora y valorizadora de billetes de alta velocidad, ideal para
          entornos bancarios, casas de cambio y retail. Ofrece detección avanzada de billetes falsos mediante sensores
          UV, MG, IR y CIS, asegurando precisión en cada conteo. Su diseño ergonómico y pantalla intuitiva facilitan el
          uso diario, mejorando la productividad de tu equipo. -->
          <?php echo $equipmentSelected->long_description; ?>
        </p>
        <!-- <ul class="caracteristicas_producto">
          <li><i class="fa-solid fa-check"></i> Velocidad de conteo de hasta 1,200 billetes por minuto</li>
          <li><i class="fa-solid fa-check"></i> Capacidad para múltiples divisas</li>
          <li><i class="fa-solid fa-check"></i> Detección automática de denominaciones mixtas</li>
          <li><i class="fa-solid fa-check"></i> Pantalla táctil a color y conectividad USB</li>
        </ul> -->
        <div class="grup_button">
          <a href="brochure/newton_30.pdf" target="_blank">📄 Descargar brochure</a>
          <a href="#contacto">💬 Cotizar</a>
        </div>
      </div>

    </div>
  </div>


  <div class="container">
    <section class="seccion_especificaciones">
      <h1 class="titulo_especificaciones">Especificaciones Técnicas de <?php echo $equipmentSelected->name; ?></h1>
      <!-- <p class="intro_especificaciones">
        La Newton 30 integra tecnología avanzada para el procesamiento eficiente de billetes. A continuación, se
        detallan sus principales características técnicas que la convierten en una solución confiable para entornos
        bancarios, comerciales y corporativos.
      </p> -->

      <div class="tab-especificaciones-header" id="toggleEspecificaciones">
        📋 Detalles Técnicos del Producto <i class="fa-solid fa-chevron-down icono-toggle"></i>
      </div>

      <div class="detalle_especificaciones" id="contenidoEspecificaciones">
        <table class="tabla_especificaciones">
          <tbody>
            <?php
            if ($equipmentSelected->tecnical_specifications) {
              $especificaciones = $equipmentSelected->tecnical_specifications;
              foreach ($especificaciones as $clave => $valor) {
                // echo "<strong>" . $clave . ":</strong> " . $valor . "<br>";
                echo "<tr><th>" . $clave . "</th><td>" . $valor . "</td></tr>";
              }
            }
            ?>

            <!-- <tr>
              <th>Velocidad de Procesamiento</th>
              <td>1,200 billetes/minuto</td>
              <th>Cantidad de Bolsillos</th>
              <td>2 principales + 1 rechazo</td>
            </tr>
            <tr>
              <th>Capacidad del Alimentador</th>
              <td>500 billetes</td>
              <th>Bolsillos de Recepción</th>
              <td>200 billetes cada uno</td>
            </tr>
            <tr>
              <th>Bolsillo de Rechazo</th>
              <td>100 billetes</td>
              <th>Divisas Habilitadas</th>
              <td>Soles, Dólares, Euros</td>
            </tr>
            <tr>
              <th>Funciones de Conteo</th>
              <td>Mixto, Clasificación, Agrupamiento</td>
              <th>Modos de Operación</th>
              <td>Auto, Manual, Batch</td>
            </tr>
            <tr>
              <th>Clasificación de Billetes</th>
              <td>Estado de uso y denominación</td>
              <th>Lectura de Billete</th>
              <td>Frontal y posterior</td>
            </tr>
            <tr>
              <th>Sensores de Autenticación</th>
              <td>UV, MG, IR, CIS</td>
              <th>Captura de Número de Serie</th>
              <td>Automática</td>
            </tr>
            <tr>
              <th>Sistema</th>
              <td>Firmware integrado</td>
              <th>Actualización de Software</th>
              <td>USB / Red</td>
            </tr>
            <tr>
              <th>Pantalla</th>
              <td>Táctil a color de 5"</td>
              <th>Mensajes de Alarma</th>
              <td>Visuales y auditivos</td>
            </tr>
            <tr>
              <th>Puertos de Comunicación</th>
              <td>USB, LAN, RS232</td>
              <th>Peso Neto</th>
              <td>14.5 kg</td>
            </tr>
            <tr>
              <th>Dimensiones</th>
              <td>280 x 340 x 300 mm</td>
              <th>Sistema Operativo</th>
              <td>Embebido</td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </section>
  </div>

  <?php if (count($equipmentsType) > 0): ?>

    <div class="container">
      <div class="contenedor_slider">
        <h1 class="titulo">
          Descubre mas de nuestros Equipos <?php echo $efSelected->name; ?>
          <!-- Nuestros Equipos Destacados -->
        </h1>
        <p class="parrafo">
          En CECHRIZA ofrecemos una selección de equipos de procesamiento de
          <strong><?php echo strtolower($typeText); ?></strong> con tecnología de punta.
          Diseñados para brindar eficiencia, seguridad y alto rendimiento, nuestros productos se adaptan a las exigencias
          de bancos, empresas de transporte de valores y comercios que buscan optimizar sus operaciones.
        </p>

        <div class="swiper mySwiper">
          <div class="swiper-wrapper">

            <?php foreach ($equipmentsType as $equipment): ?>

              <!-- Slide 1 -->
              <div class="swiper-slide">
                <a style="background-color: transparent;"
                  href="detalle_equipo?id=<?php echo $equipment->id; ?>&amp;type=<?php echo $type; ?>">
                  <div class="wrapper">
                    <div class="container">
                      <div class="top"
                        style="background: url(<?php echo $equipment->image; ?>) no-repeat center center; -webkit-background-size: 100%; -moz-background-size: 100%; -o-background-size: 100%; background-size: 100%;">
                      </div>
                      <h1 class="title"><?php echo $equipment->name; ?></h1>
                    </div>
                    <div class="inside">
                      <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                      <div class="contents">
                        <div>

                          <?php echo $equipment->description; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                <!-- </div> -->
              </div>
            <?php endforeach; ?>





          </div>

          <!-- Flechas de navegación -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>
      </div>
    </div>

  <?php endif; ?>
  <?php
  //  require_once "footer/clients.php";
  require_once "footer/contact.php";
  ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.mySwiper', {
      loop: true,
      spaceBetween: 20,
      slidesPerView: 1,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        768: {
          slidesPerView: 2
        },
        1024: {
          slidesPerView: 4
        }
      }
    });
  </script>



  <script>
    document.querySelectorAll('.miniatura').forEach(img => {
      img.addEventListener('click', function () {
        const src = this.getAttribute('src');
        document.querySelector('.imagen_principal').setAttribute('src', src);

        // opcional: resaltar miniatura activa
        document.querySelectorAll('.miniatura').forEach(mini => mini.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>


  <script>
    document.getElementById('toggleEspecificaciones').addEventListener('click', function () {
      const contenido = document.getElementById('contenidoEspecificaciones');
      const icono = this.querySelector('.icono-toggle');

      const estaVisible = contenido.style.display === 'block';

      // Toggle visibilidad
      contenido.style.display = estaVisible ? 'none' : 'block';

      // Cambiar ícono
      icono.classList.toggle('icono-rotado', !estaVisible);
    });
  </script>