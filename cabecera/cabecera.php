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
    <div class="grid-personal p-6 bg-gray-900 text-center text-white">
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
            <div class="dropdown-toggle">Soluciones ▾</div>
            <div class="dropdown-menu">
              <div><a href="procesamiento_billetes">Procesamiento de Billetes</a></div>
              <div><a href="procesamiento_moneda">Procesamiento de Monedas</a></div>
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
      
      for (const link of links) {
        if (link.getAttribute("href") === activeLink) {
          link.classList.add("text-blue-800");
        }
      }


    </script>