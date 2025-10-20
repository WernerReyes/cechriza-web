<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="dist/output.css">
  <link rel="stylesheet" href="css/estilo.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

  </head>

  <body>



    <!-- Grid superior -->
    <div class="grid-personal pt-20 bg-gray-900 text-center text-white">
      <div><i class="fa-brands fa-whatsapp"></i> <strong>014760909 / 014760348</strong> </div>
      <div><i class="fa-solid fa-magnifying-glass-location"></i> <strong>Av. San Luis 2930, San Borja</strong> </div>
      <div><i class="fa-solid fa-envelope"></i> <strong>ventas@cechriza.com</strong> </div>
    </div>

    <div class="nav bg-gray-900">
      <div class="container container_nav bg-gray-900">
        <div class="logo">
          <img src="img/cechriza.png" alt="Logo CECHRIZA" />
        </div>

        <!-- Botón hamburguesa -->
        <div class="menu-toggle" id="toggleMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <!-- Menú principal -->
        <div class="navegador" id="navMenu">
          <div class="nav-item"><a href="inicio">Inicio</a></div>
          <div class="nav-item"><a href="nosotros">Nosotros</a></div>

          <!-- Dropdown 1 -->
          <div class="nav-item dropdown">
            <!-- <div class="dropdown-toggle">Soluciones ▾</div>
            <div class="dropdown-menu">
              <div><a href="procesamiento_billetes" class="dropdown-toggle">Procesamiento de Billetes</a></div>
              <div><a href="procesamiento_moneda" class="dropdown-item">Procesamiento de Monedas</a></div>
            </div> -->

            <!-- class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800" -->
            <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown" type="button">
              <div class="flex items-center gap-2">

                Soluciones <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
                </svg>
              </div>
            </button>

            <!-- Dropdown menu -->
            <div id="multi-dropdown"
              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 bg-gray-700">
              <ul class="p-10 text-sm" aria-labelledby="multiLevelDropdownButton">

                <li>
                  <a id="doubleDropdownButton1" data-dropdown-toggle="doubleDropdown1"
                    data-dropdown-placement="right-start" type="button"
                    class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 hover:bg-gray-600 hover:text-white">

                    Procesamiento
                    de Billetes


                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                    </svg>
                  </a>






                  <div id="doubleDropdown1"
                    class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow-sm w-44 bg-gray-700">



                    <ul class="p-10 flex flex-col gap-2 text-sm text-gray-700 text-gray-200" aria-labelledby="doubleDropdownButton1">
                      <?php
                      require_once 'data/procesamiento_billetes.php';

                      foreach ($equipment_functions_bill as $category) {
                        ?>

                        <li>
                          <a href=<?php echo "procesamiento_billetes?id=" . $category->id; ?>
                            class="block px-4 py-2 hover:bg-gray-100 hover:bg-gray-600 hover:text-white">
                            <?php echo $category->name; ?>
                          </a>
                        </li>

                      <?php } ?>
                    </ul>
                  </div>
                </li>


                <li>
                  <a id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                    data-dropdown-placement="right-start" type="button"
                    class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 hover:bg-gray-600 hover:text-white">

                    Procesamiento
                    de Monedas


                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                    </svg>
                  </a>




                  <div id="doubleDropdown"
                    class="z-10 hidden  divide-y divide-gray-100 rounded-lg shadow-sm w-44 bg-gray-700">
                    <ul class="p-10 text-sm flex flex-col gap-2 text-gray-700 text-gray-200" aria-labelledby="doubleDropdownButton">
                      <?php
                      require_once 'data/procesamiento_monedas.php';

                      foreach ($equipment_functions_monedas as $category) {
                        ?>

                        <li>
                          <a href=<?php echo "procesamiento_moneda?id=" . $category->id; ?>
                            class="block px-4 py-4 hover:bg-gray-100 bg-gray-600 text-white">
                            <?php echo $category->name; ?>
                          </a>
                        </li>

                      <?php } ?>
                    </ul>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <!-- Dropdown 2 -->
          <!-- <div class="nav-item dropdown">
            <div class="dropdown-toggle">Servicios Post Venta ▾</div>
            <div class="dropdown-menu">
              <div><a href="post_mantenimiento_preventivo">Mantenimiento Preventivo</a></div>
            </div>
          </div> -->

          <div class="nav-item"><a href="post_mantenimiento_preventivo">Servicios Post Venta</a></div>

          <!-- <div class="nav-item"><a href="noticias">Noticias</a></div> -->
          <div class="nav-item"><a href="contacto">Contacto</a></div>
        </div>
      </div>
    </div>


    <script>
      const links = document.querySelectorAll("#navMenu a");
      const activeLink = window.location.pathname.split("/").pop();

      const params = new URLSearchParams(window.location.search);
      const id = params.get("id");

      for (const link of links) {
        if (link.getAttribute("href") === activeLink || link.getAttribute("href") === activeLink + "?id=" + id) {
          link.style.textDecoration = "underline";
          link.style.textUnderlineOffset = "6px";
        }
      }


    </script>