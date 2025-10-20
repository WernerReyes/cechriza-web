<?php
require_once 'data/procesamiento_billetes.php';
?>


<link rel="stylesheet" href="css/procesamiento_billete.css">
<link rel="stylesheet" href="css/procesamiento.css">


<div class="fondo_paralelo">


  <div class="">
    <div class="grid fondo_procesamiento_billete">
      <h2 class="text-center text-white titulo">Equipos Clasificadores de Billetes</h2>
      <h1 class="text-center text-white subtitulo">
        Precisión, velocidad y seguridad en cada conteo
      </h1>
      <p class="text-center text-white">
        Nuestros clasificadores de billetes están diseñados para optimizar el flujo de trabajo en instituciones
        financieras, <br> incrementando la eficiencia y reduciendo errores operativos. Perfectos para bancos, casas de
        cambio y empresas que requieren alto rendimiento.
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

            <?php foreach ($equipments_bill as $equipment): ?>
              <div data-function="<?php echo $equipment->function_id; ?>">
                <div class="item_producto">
                  <div class="imagen">
                    <img src="<?php echo $equipment->image; ?>" alt="<?php echo $equipment->name; ?>">
                  </div>
                  <h1><?php echo $equipment->name; ?></h1>
                  <p><?php echo $equipment->description; ?></p>
                  <a href="detalle_equipo?id=<?php echo $equipment->id; ?>">Detalle de Producto</a>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
          <!-- </div> -->



        </div>



      </div>

    </div>
  </div>

  <br>
  <br>
  <section class="promocion container flex-container grid_promocion">



    <!-- Beneficio 1 -->
    <div class="item ">
      <div class="div_icono">
        <div class="icono ">
          <i class="fa-solid fa-coins  "></i>
        </div>
        <h3 class="font-bold text-lg mt-2 titulo">Ahorro de Tiempo Operativo</h3>
        <p class="text-sm mt-1">
          Automatiza el conteo y clasificación de billetes con equipos de alta velocidad. Reduce significativamente
          los tiempos de cierre de caja y conciliaciones.
        </p>
      </div>

    </div>

    <!-- Beneficio 2 -->
    <div class="item">
      <div class="div_icono">
        <div class="icono">
          <i class="fa-solid fa-shield-halved"></i>
        </div>
        <h3 class="font-bold text-lg mt-2 titulo">Detección Avanzada de Billetes Sospechosos</h3>
        <p class="text-sm mt-1">
          Integra sistemas con sensores UV, MG, IR y CIS que aseguran autenticidad en cada transacción y protegen tu
          negocio contra pérdidas.
        </p>
      </div>
    </div>

    <!-- Beneficio 3 -->
    <div class="item">
      <div class="div_icono">
        <div class="icono">
          <i class="fa-solid fa-chart-line"></i>
        </div>
        <h3 class="font-bold text-lg mt-2 titulo">Eficiencia y Control en tus Operaciones</h3>
        <p class="text-sm mt-1">
          Mejora la trazabilidad y control del flujo de efectivo con estadísticas en tiempo real y conectividad con
          sistemas contables.
        </p>
      </div>
    </div>

    <!-- Beneficio 4 -->
    <div class="item">
      <div class="div_icono">
        <div class="icono">
          <i class="fa-solid fa-stopwatch"></i>
        </div>
        <h3 class="font-bold text-lg mt-2 titulo">Mejora de Procesos y Reducción de Tiempos</h3>
        <p class="text-sm mt-1">
          Optimiza cada etapa del manejo de efectivo, minimizando errores y acelerando el procesamiento. Obtén
          resultados más rápidos y precisos en tus operaciones diarias.
        </p>
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

        itemDiv.innerHTML = `
        <a style="background-color: transparent;" href="detalle_equipo?id=${eq.id}&amp;type=billete">
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





  <div class="wrapper">
    <div class="container">
      <div class="top"></div>
      <h1 class="title">Kisan - K5-A</h1>
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



  <style>
    .wrapper {
      width: 300px;
      height: 290px;
      background: white;
      margin: auto;
      position: relative;
      overflow: hidden;
      border-radius: 10px 10px 10px 10px;
      box-shadow: 0;
      transform: scale(0.95);
      transition: box-shadow 0.5s, transform 0.5s;

      &:hover {
        transform: scale(1);
        box-shadow: 5px 20px 30px rgba(0, 0, 0, 0.2);
      }

      .container {
        width: 100%;
        height: 100%;

        .top {
          height: 250px;
          width: 100%;
          background: url(${eq.image}) no-repeat center center;
          -webkit-background-size: 100%;
          -moz-background-size: 100%;
          -o-background-size: 100%;
          background-size: 100%;
        }

        .title {
          font-size: 1.1rem;
          color: #333;
          margin-bottom: 10px;
          font-weight: 600;
          text-align: center;
        }

        .bottom {
        
          width: 200%;
          height: 20%;
          transition: transform 0.5s;

          &.clicked {
            transform: translateX(-50%);
          }

          h1 {
            margin: 0;
            padding: 0;
          }

          p {
            margin: 0;
            padding: 0;
          }




        }
      }

      .inside {
        z-index: 9;
        background-color:	rgba(0, 0, 0, 0.6);
	opacity:1;
	backdrop-filter:				blur(0px);
	-webkit-backdrop-filter:	blur(0px);
	filter:						blur(0px);
        width: 140px;
        height: 140px;
        position: absolute;
        top: -70px;
        right: -70px;
        ;
        border-radius: 0px 0px 200px 200px;
        transition: all 0.5s, border-radius 2s, top 1s;
        overflow: hidden;

        .icon {
          
          position: absolute;
          right: 85px;
          top: 85px;
          color: white;
          opacity: 1;
        }

        &:hover {
          
          width: 100%;
          right: 0;
          top: 0;
          border-radius: 0;
          height: 80%;

          .icon {
            opacity: 0;
            right: 15px;
            top: 15px;
          }

          .contents {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
            transform: translateY(0);
          }
        }

        .contents {
          padding: 5%;
          opacity: 0;
          visibility: hidden;
          transform: scale(0.5);
          transform: translateY(-200%);
          transition: opacity 0.2s, transform 0.8s;

          div {
         
            text-align: center;
            color: white;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
          }
        }

           
      }
    }
  </style>

  