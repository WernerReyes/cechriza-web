<link rel="stylesheet" href="css/procesamiento_moneda.css">
<link rel="stylesheet" href="css/lista_productos_moneda.css">
<link rel="stylesheet" href="css/procesamiento.css">

<?php
require_once 'data/procesamiento_monedas.php';


?>


<div class="fondo_paralelo">

  <div class="">
    <div class="grid fondo_procesamiento_billete">
      <h2 class="text-center text-white titulo">Equipos para Procesamiento de Moneda</h2>
      <h1 class="text-center text-white subtitulo">
        Tecnología de precisión para una gestión eficiente del efectivo
      </h1>
      <p class="text-center text-white">
        Nuestras soluciones para conteo y clasificación de monedas ofrecen rendimiento confiable y exactitud en cada
        operación. <br>
        Ideales para bancos, entidades de transporte, recaudación de peajes y cualquier organización que maneje grandes
        volúmenes de efectivo físico.
      </p>
      <!-- <a href="detalle_equipo">Descargar Presentación</a> -->
    </div>
  </div>

  



  <div class="container">
    <div class="div_procesamiento">

      <div class="item_1">
        <h1 class="titulo_lista">Soluciones para el Procesamiento de Moneda</h1>

        <div class="tabs">
          <?php foreach ($equipment_functions_monedas as $index => $function): ?>
            <div class="tab" data-id="<?php echo $function->id; ?>">
              <i class="fa-solid fa-square-caret-right"></i> <?php echo $function->name; ?>
            </div>
          <?php endforeach; ?>

        </div>
      </div>

      <div class="item_2">
        <div class="grid_search">
          <div>
            <!-- Barra de búsqueda -->
            <div class="busqueda">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input type="text" placeholder="Buscar equipo o modelo..." id="searchInput">
            </div>
          </div>
        </div>

        <div class="tabs_dinamicos">


          <!-- Clasificadoras -->

          <!-- Productos Clasificadora -->
          <div class="grid_products">

            <?php foreach ($equipments_monedas as $equipment): ?>
              <a href="detalle_equipo?id=<?php echo $equipment->id; ?>">
                <div data-function="<?php echo $equipment->function_id; ?>">
                  <div class="item_producto">
                    <div class="imagen">
                      <img src="<?php echo $equipment->image; ?>" alt="<?php echo $equipment->name; ?>"
                        class="w-auto h-48">
                    </div>
                    <h1><?php echo $equipment->name; ?></h1>
                    <p><?php echo $equipment->description; ?></p>
                    <!-- <a href="detalle_equipo?id=<?php echo $equipment->id; ?>">Detalle de Producto</a> -->
                  </div>
                </div>
              </a>
            <?php endforeach; ?>

          </div>
          <!-- END Productos Clasificadora -->


        </div>
      </div>

    </div>
  </div>

  <br/>
  <br/>


  <section class="promocion">
    <div class="container">
      <div class="grid_promocion">

        <!-- Beneficio 1 -->
        <div>
          <div class="div_icono">
            <div class="icono">
              <i class="fa-solid fa-coins"></i>
            </div>
            <h3 class="font-bold text-lg mt-2 titulo">Optimización del Tiempo de Conteo</h3>
            <p class="text-sm mt-1">
              Reduce significativamente el tiempo requerido para clasificar y contabilizar grandes cantidades de monedas
              con equipos de alta velocidad y confiabilidad.
            </p>
          </div>
        </div>

        <!-- Beneficio 2 -->
        <div>
          <div class="div_icono">
            <div class="icono">
              <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h3 class="font-bold text-lg mt-2 titulo">Verificación de Autenticidad Garantizada</h3>
            <p class="text-sm mt-1">
              Detecta monedas falsas o no reconocidas mediante sensores electromagnéticos y de densidad. Aumenta la
              seguridad en cada transacción.
            </p>
          </div>
        </div>

        <!-- Beneficio 3 -->
        <div>
          <div class="div_icono">
            <div class="icono">
              <i class="fa-solid fa-chart-line"></i>
            </div>
            <h3 class="font-bold text-lg mt-2 titulo">Gestión Eficiente del Flujo de Caja</h3>
            <p class="text-sm mt-1">
              Controla el flujo de efectivo con reportes detallados, clasificación por denominación y conexión con
              sistemas administrativos.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <?php
  //  require_once "footer/clients.php";
  require_once "footer/contact.php";
  ?>



  <script>
    const gridProducts = document.querySelector('.grid_products');
    const equipmentFunctions = <?php echo json_encode($equipment_functions_monedas); ?>;
    const equipments = <?php echo json_encode($equipments_monedas); ?>;
    let equipmentFiltered = [];
    let searchTerm = "";

    //* EVENTS

    // Load inicial
    document.addEventListener('DOMContentLoaded', () => {
      const params = new URLSearchParams(window.location.search);
      const activeFunctionId = params.get("id");


      // const activeFunctionId = tabActive ? tabActive.getAttribute('data-id') : null
      filterByFunctionAndSearch(+activeFunctionId);

      console.log("ID recibido:", +activeFunctionId);

      const tabActive = document.querySelector('.tab[data-id="' + activeFunctionId + '"]');
      if (tabActive) {
        tabActive.classList.add('active');
      }
    });


    // Change tab
    document.querySelectorAll('.tab').forEach(tab => {
      tab.addEventListener('click', () => {
        document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
        tab.classList.add('active');

        const functionId = tab.getAttribute('data-id');
        filterByFunctionAndSearch(functionId);
      });
    });


    // Search
    document.getElementById('searchInput').addEventListener('input', function () {
      const filtro = this.value.toLowerCase();

      gridProducts.innerHTML = ""; // Limpia el contenedor antes de agregar nuevos elementos

      searchTerm = filtro;

      const tabActive = document.querySelector('.tab.active');
      const activeFunctionId = tabActive ? tabActive.getAttribute('data-id') : null
      filterByFunctionAndSearch(activeFunctionId);
    })



    //* FUNCTIONS

    function filterByFunctionAndSearch(functionId) {
      equipmentFiltered = [...equipments]; // Reinicia el filtro

      if (functionId) {
        equipmentFiltered = equipmentFiltered.filter(eq => eq.function_id === parseInt(functionId));
      }

      if (searchTerm) {
        equipmentFiltered = equipmentFiltered.filter(eq => {
          const titulo = eq.name.toLowerCase();
          const descripcion = eq.description.toLowerCase();
          return titulo.includes(searchTerm) || descripcion.includes(searchTerm);
        });
      }

      gridProducts.innerHTML = ""; // Limpia el contenedor antes de agregar nuevos elementos

      equipmentFiltered.forEach(eq => {
        const itemDiv = document.createElement('div');
        itemDiv.setAttribute('data-function', eq.function_id);

         itemDiv.innerHTML = `
        <a style="background-color: transparent;" href="detalle_equipo?id=${eq.id}&amp;type=moneda">
          <div class="wrapper">
    <div class="container">
      <div class="top"
        style="background: url(${eq.image}) no-repeat center center; -webkit-background-size: 100%; -moz-background-size: 100%; -o-background-size: 100%; background-size: 100%;"
      ></div>
      <h1 class="title">${eq.name}</h1>
    </div>
    <div class="inside">
      <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
      <div class="contents">
        <div>

          Sistema automático de clasificación y enfajado de billetes Kisan (K6 Strapper).
        </div>
      </div>
    </div>
  </div>
        </a>
        `;

        gridProducts.appendChild(itemDiv);
      });
    }

  </script>