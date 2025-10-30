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
      <div><i class="fa-brands fa-whatsapp"></i> <strong>01-4760909 / 941082289</strong> </div>
      <div><i class="fa-solid fa-magnifying-glass-location"></i> <strong>Av. San Luis 2930, San Borja</strong> </div>
      <div><i class="fa-solid fa-envelope"></i> <strong>ventas@cechriza.com</strong> </div>
    </div>

    
     

   <nav id="menu" class="bg-gray-900">
    <div id="menu-container" class="container container_nav">
    <div  id="logo-container">
        <div class="logo">
          <img src="img/cechriza.png" alt="Logo CECHRIZA" />
        </div>

        <!-- Botón hamburguesa -->
       
        </div>
  <!-- <label for="tm" id="toggle-menu">Navigation <span class="drop-icon">▾</span></label> -->
  <!-- <input type="checkbox" id="tm"> -->
    <div class="menu-toggle" id="tm">
          <span></span>
          <span></span>
          <span></span>
        </div>
  <ul class="main-menu clearfix">
    
    <li class="nav-item"><a href="inicio">Inicio</a></li>
    <li class="nav-item"><a href="nosotros">Nosotros</a></li>
    <li class="nav-item"><a href="#">Soluciones
        <span class="drop-icon">▾</span>
        <label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
      </a>
      <input type="checkbox" id="sm1">
      <ul class="sub-menu">
        <li class="nav-item"><a href="procesamiento_billetes"> Procesamiento
                    de Billetes
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm3">▾</label>
          </a>
          <input type="checkbox" id="sm3">
          <ul class="sub-menu">
         

           <?php
                      require_once 'data/procesamiento_billetes.php';

                      foreach ($equipment_functions_bill as $category) {
                        ?>


                        <li
                          class="nav-item">
                          <a href="<?php echo 'procesamiento_billetes?id=' . $category->id; ?>">
                            <?php echo $category->name; ?>
                          </a>
                        </li>

                      <?php } ?>
                        
          </ul>
        </li>

        <li class="nav-item"><a href="procesamiento_moneda"> Procesamiento
                    de Monedas
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
          </a>
          <input type="checkbox" id="sm2">
          <ul class="sub-menu">
         

           <?php
                      require_once 'data/procesamiento_monedas.php';

                      foreach ($equipment_functions_monedas as $category) {
                        ?>


                        <li
                          class="nav-item">
                          <a href="<?php echo 'procesamiento_moneda?id=' . $category->id; ?>">
                            <?php echo $category->name; ?>
                          </a>
                        </li>

                      <?php } ?>
                        
          </ul>
        </li>
        
      </ul>
    </li>
    <li class="nav-item"><a href="post_mantenimiento_preventivo">Servicios Post Venta</a></li>
    <li class="nav-item"><a href="contacto">Contacto</a></li>
  </ul>
  </div>
 
</nav>

<br>

    <script>
      const links = document.querySelectorAll("#menu a");
      const activeLink = window.location.pathname.split("/").pop();

      const params = new URLSearchParams(window.location.search);
      const id = params.get("id");

      for (const link of links) {
        if (link.getAttribute("href") === activeLink || link.getAttribute("href") === activeLink + "?id=" + id) {
          // link.style.textDecoration = "underline";
          // link.style.textUnderlineOffset = "6px";

          link.style.backgroundColor = "white";
          link.style.color = "#101828";
        }
      }


    </script>


    <style>
      
#menu ul {
  margin: 0;
  padding: 0;
  
}

#menu .main-menu {
  display: none;
 
}

#tm:checked + .main-menu {
  display: block;
}

#menu input[type="checkbox"], 
#menu ul span.drop-icon {
  display: none;
}

#menu li, 
#toggle-menu, 
#menu .sub-menu {
  border-style: solid;
  border-color: rgba(0, 0, 0, .05);
}

#menu li, 
#toggle-menu {
  border-width: 0 0 1px;
}

#menu .sub-menu {
  background-color: #101828;
  border-width: 1px 1px 0;
  margin: 0 1em;
}

#menu .sub-menu li:last-child {
  border-width: 0;
}

#menu li, 
#toggle-menu, 
#menu a {
  position: relative;
  display: block;
  color: white;
  text-shadow: 1px 1px 0 rgba(0, 0, 0, .125);
}



#toggle-menu, 
#menu a {
  padding: 10px 15px;
}

#menu a {
  transition: all .125s ease-in-out;
  -webkit-transition: all .125s ease-in-out;
}

#menu a:hover {
  background-color: white;
  color: #101828;
}

#menu .sub-menu {
  display: none;
}

#menu input[type="checkbox"]:checked + .sub-menu {
  display: block;
}

#menu .sub-menu a:hover {
  color: #101828;
}

#toggle-menu .drop-icon, 
#menu li label.drop-icon {
  position: absolute;
  right: 1.5em;
  top: 1.25em;
}

#menu label.drop-icon, #toggle-menu span.drop-icon {
  border-radius: 50%;
  width: 1em;
  height: 1em;
  text-align: center;
  background-color: #101828;
  text-shadow: 0 0 0 transparent;
  color: rgba(255, 255, 255, .75);
}

#menu .drop-icon {
  line-height: 1;
}



#menu {
  width: 100%;
  /* height: 80px; */
  display: flex;
  position: fixed;
  z-index: 2000;
  padding: 0 0 20px 0;

  
 
  /* top: 0; */

}

#menu .main-menu {
  width: 100%;
  
  z-index: 1000;
  display: none;
  position: relative;
  max-height: calc(100vh - 200px);
  overflow-y: auto;
  


  background-color: var(--bg-gray-900);
}

/* Limpieza de flotantes (en lugar de overflow:hidden) */
#menu .main-menu::after {
  content: "";
  display: table;
  clear: both;
}

#tm span {
  display: block;
  height: 3px;
  width: 25px;
  background: white;
  margin: 4px 0;
}

#menu-container {
  display: flex;
  align-items: center;
  width: 100%;
  
}

#logo-container {
  margin: 0 auto;
}


@media only screen and (max-width: 64em) and (min-width: 52.01em) {

  
  #menu li {
    width: 33.333%;
  }

  #menu .sub-menu li {
    width: auto;
  }

 
}

@media only screen and (min-width: 52em) {


  #menu .main-menu {
    margin-left: auto;
    width: auto;
    top: 0;
    display: flex;
    max-height: none;
    overflow:  visible;
    
  }

  
  #logo-container {
  margin: 0;
}

  #tm {
    display: none;
  }

   /* Asegura que el fondo cubra toda la franja superior */
  #menu::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    
    z-index: -1;
  }

  #toggle-menu, 
  #menu label.drop-icon {
    display: none;
  }

  #menu ul span.drop-icon {
    display: inline-block;
  }

  #menu li {
    float: left;
    border-width: 0 1px 0 0;
  }

  #menu .sub-menu li {
    float: none;
  }

  #menu .sub-menu {
    border-width: 0;
    margin: 0;
    position: absolute;
    top: 100%;
    left: 0;
    width: 12em;
    z-index: 3000;
  }

  #menu .sub-menu, 
  #menu input[type="checkbox"]:checked + .sub-menu {
    display: none;
  }

  #menu .sub-menu li {
    border-width: 0 0 1px;
  }

  #menu .sub-menu .sub-menu {
    top: 0;
    left: 100%;
  }

  #menu li:hover > input[type="checkbox"] + .sub-menu {
    display: block;
  }
}

    </style>


