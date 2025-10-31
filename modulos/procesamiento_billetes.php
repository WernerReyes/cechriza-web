<?php
require_once 'data/procesamiento_billetes.php';
?>


<link rel="stylesheet" href="css/procesamiento_billete.css">
<link rel="stylesheet" href="css/procesamiento.css">


<div class="fondo_paralelo">


  <div class="">
    <div class="grid fondo_procesamiento_billete">
      <h2 class="text-center text-white titulo">Equipos para el procesamiento de Billetes</h2>
      <h1 class="text-center text-white subtitulo">
        Precisión, velocidad y seguridad en cada conteo
      </h1>
      <p class="text-center text-white mx-auto" style="max-width: 800px;">
        Nuestros equipos están diseñados para optimizar el flujo del efectivo en instituciones financieras y grandes
        empresas. incrementando la eficiencia y reduciendo errores operativos. Perfectos para bancos, casas de cambio y
        empresas que requieren un alto rendimiento y seguridad.
      </p>
      <!-- <a href="">Descargar Presentación</a> -->
    </div>
  </div>








  <div class="container">
    <div class="div_procesamiento">

      <div class="item_1">
        <h1 class="titulo_lista">Soluciones para el Procesamiento de Billetes</h1>

        <div class="tabs">
          <?php foreach ($equipment_functions_bill as $index => $function): ?>
            <div class="tab " data-id="<?php echo $function->id; ?>">
              <!-- <div > -->
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

          <!-- Contadoras y Valorizadoras -->
          <!-- <div class="tab_content"> -->
          <div class="grid_products">
          </div>
          <!-- </div> -->



        </div>



      </div>

    </div>
  </div>


  <section class="promocion">
    <div class="container">
      <div class="grid_promocion">

        <div class="item">
          <div class="div_icono">
            <div class="icono">
              <i class="fa-solid fa-coins"></i>
            </div>
            <h3 class="titulo">Ahorro de Tiempo Operativo</h3>
            <p>
              Automatiza el conteo y clasificación de billetes con equipos de alta velocidad. Reduce significativamente
              los tiempos de cierre de caja y conciliaciones.
            </p>
          </div>
        </div>

        <div class="item">
          <div class="div_icono">
            <div class="icono">
              <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h3 class="titulo">Detección Avanzada de Billetes Sospechosos</h3>
            <p>
              Integra sistemas con sensores UV, MG, IR y CIS que aseguran autenticidad en cada transacción y protegen tu
              negocio contra pérdidas.
            </p>
          </div>
        </div>

        <div class="item">
          <div class="div_icono">
            <div class="icono">
              <i class="fa-solid fa-chart-line"></i>
            </div>
            <h3 class="titulo">Eficiencia y Control en tus Operaciones</h3>
            <p>
              Mejora la trazabilidad y control del flujo de efectivo con estadísticas en tiempo real y conectividad con
              sistemas contables.
            </p>
          </div>
        </div>

        <div class="item">
          <div class="div_icono">
            <div class="icono">
              <i class="fa-solid fa-stopwatch"></i>
            </div>
            <h3 class="titulo">Mejora de Procesos y Reducción de Tiempos</h3>
            <p>
              Optimiza cada etapa del manejo de efectivo, minimizando errores y acelerando el procesamiento. Obtén
              resultados más rápidos y precisos en tus operaciones diarias.
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
    const equipmentFunctions = <?php echo json_encode($equipment_functions_bill); ?>;
    const equipments = <?php echo json_encode($equipments_bill); ?>;
    let equipmentFiltered = [];
    let searchTerm = "";

    //* EVENTS

    // Load inicial
    document.addEventListener('DOMContentLoaded', () => {
      const params = new URLSearchParams(window.location.search);
      const activeFunctionId = params.get("id");


      // const activeFunctionId = tabActive ? tabActive.getAttribute('data-id') : null
      filterByFunctionAndSearch(+activeFunctionId);

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
        filterByFunctionAndSearch(+functionId);
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

        // itemDiv.innerHTML = `
        //   <a style="background-color: transparent;" href="detalle_equipo?id=${eq.id}&amp;type=billete">
        //   <div class="item_producto">
        //     <div class="imagen">
        //       <img src="${eq.image}" alt="${eq.name}">
        //     </div>
        //     <h1>${eq.name}</h1>
        //     <p>${eq.description}</p>
        //     <a href="detalle_equipo?id=${eq.id}&amp;type=billete">Detalle de Producto</a>
        //   </div>
        //   </a>
        // `;

        // Dentro de la función filterByFunctionAndSearch, en el bucle forEach...

        itemDiv.innerHTML = `
  <a class="product-link" href="detalle_equipo?id=${eq.id}&type=billete">
    <div class="wrapper">
      <div class="container">
        <div class="top">
          <img src="${eq.image}" alt="${eq.name}">
        </div>
        <h1 class="title">${eq.name}</h1>
      </div>
      <div class="inside">
        <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
        <div class="contents">
          <div>
            ${eq.description}
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