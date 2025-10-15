<div class="fondo_paralelo">
  <link rel="stylesheet" href="css/nosotros.css">



  <div class="banner_nosotros">
    <div class="item_interno">
      <h1 class="titulo_general">Nosotros</h1>
      <!-- <h2 class="subtitulo">Desde 2023 <strong>Cechriza S.A.C.</strong> transformando la gestión del efectivo</h2> -->
      <p class="parrafo">
        Con más de 30 años de experiencia, en CECHRIZA somos especialistas en gestión de efectivo en el Perú, brindando
        soluciones respaldadas por tecnología de última generación. Nuestro portafolio incluye equipos de procesamiento
        y valorizadores de efectivo, sistemas de depósito, recicladores y cajas inteligentes para transporte de dinero,
        diseñados para optimizar la seguridad y eficiencia de tu negocio. Además, contamos con un servicio postventa a
        nivel nacional, respaldado por mantenimiento preventivo y correctivo, y un equipo técnico comprometido en
        atender a nuestros clientes en el menor tiempo posible.
      <div class="destacado">
        <i class="fa-solid fa-angles-right"></i>
        <span>EXCELENCIA</span>
        <i class="fa-solid fa-angles-left"></i>
      </div>

      <h2 class="subtitulo">Experiencia y tecnología a su alcance</h2>
      <p class="parrafo">
        Nos esforzamos por brindar la más alta calidad en nuestro servicio postventa.
      </p>
    </div>

    <div class="imagen_interna">
      <img src="img/fondos/fondo_nosotros.png" alt="Fondo Nosotros" />
    </div>
  </div>


  <div class="seccion_nosotros text-white">
    <div class="container">
      <div class="div_titulos">
        <h1 class="text-center">CECHRIZA S.A.C.</h1>
        <p class="text-center">Soluciones integrales para el procesamiento, control y gestión segura del dinero en tu
          empresa.</p>
      </div>


      <div class="grid_section_nosotros">
        <div>
          <div class="section_icono"><i class="fa-solid fa-coins"></i></div>
          <h1>Procesamiento de Monedas</h1>
          <p>Ofrecemos equipos confiables para el conteo, clasificación y verificación rápida de monedas, ideales para
            bancos y comercios.</p>
        </div>

        <div>
          <div class="section_icono"><i class="fa-solid fa-money-bill"></i></div>
          <h1>Procesamiento de Billetes</h1>
          <p>Contamos con tecnología avanzada para contar, validar y clasificar billetes con precisión y eficiencia.</p>
        </div>

        <div>
          <div class="section_icono"><i class="fa-solid fa-passport"></i></div>
          <h1>Software e Integración</h1>
          <p>Desarrollamos soluciones a medida para integrar equipos a sistemas operativos, reportes y plataformas
            contables.</p>
        </div>

        <div>
          <div class="section_icono"><i class="fa-solid fa-business-time"></i></div>
          <h1>Servicio de Mantenimiento</h1>
          <p>Brindamos soporte técnico preventivo y correctivo con repuestos originales, cobertura nacional y atención
            personalizada.</p>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="grid_visiones">
      <div class="item_1">
        <h1 class="titulo"><strong>En CECHRIZA, tenemos presencia en todo el Perú</strong> </h1>
        <p class="sub">
          Atendemos a nivel nacional con soluciones tecnológicas en procesamiento de efectivo. Nuestro compromiso abarca
          desde Lima hasta las regiones más alejadas, brindando soporte y asesoría especializada.
        </p>

        <div class="grid_icon">
          <i class="fa-solid fa-greater-than"></i>
          <h1><strong>Visión</strong> </h1>
        </div>

        <p class="tit_vis">
          Ser la empresa líder en automatización y gestión de efectivo en el país, ofreciendo soluciones tecnológicas
          confiables, innovadoras y sostenibles, que contribuyan a la eficiencia de nuestros clientes.
        </p>

        <div class="grid_icon">
          <i class="fa-solid fa-greater-than"></i>
          <h1><strong>Misión</strong> </h1>
        </div>

        <p class="tit_vis">
          Brindar productos y servicios de alta calidad para el procesamiento de dinero, acompañados de asesoramiento
          técnico profesional y cobertura en todo el territorio nacional, garantizando satisfacción y confianza.
        </p>

        <!-- Botones -->
      </div>

      

      


      

      <style>
        .svg-container {
          width: 100%;
          max-width: 1200px;
          /* puedes cambiarlo o quitarlo */
          margin: 0 auto;

        }
      </style>


      <!-- <div id="content" class="svg-container">
      </div> -->


      <div class="page-container">

        <div class="map-container">
          <div id="content" class="svg-container">
          </div>
        </div>

        <div id="info-box">
          <h2>Información</h2>
          <p>Pasa el cursor sobre un departamento...</p>
        </div>

      </div>

      <script>
        document.addEventListener('DOMContentLoaded', async function () {
          const svgDoc = await getSVGContent();

          const svgContainer = document.getElementById('content');
          const infoBox = document.getElementById('info-box');
          const defaultInfoHTML = infoBox.innerHTML;



          if (!svgDoc) {
            console.error("No se pudo acceder al contenido del SVG. Asegúrate de estar usando un servidor local (Live Server).");
            infoBox.innerHTML = `<h3>Error de Carga</h3><p>No se pudo acceder al SVG. Por favor, abre este archivo usando un servidor local.</p>`;
            infoBox.classList.add('visible');
            return;
          }




          const departamentos = svgDoc.querySelectorAll('#features path');
          console.log(departamentos);
          const featuresGroup = svgDoc.getElementById('features');

          departamentos.forEach(depto => {
            depto.addEventListener('mouseover', (event) => {
              const targetPath = event.currentTarget;
              const nombre = targetPath.dataset.nombre;

              console.log("Departamento:", nombre);

              if (nombre) {
                const clientes = targetPath.dataset.clientes || 'No disponible';
                const equipos = targetPath.dataset.equipos || 'No disponible';

                infoBox.innerHTML = `
                                <h3>${nombre}</h3>
                                <p><strong>Equipos Vendidos:</strong> ${equipos}</p>
                                <p><strong>Número de Clientes:</strong> ${clientes}</p>
                            `;
                infoBox.classList.add('visible');
              }
            });
          });

          if (featuresGroup) {
            featuresGroup.addEventListener('mouseout', () => {
              infoBox.classList.remove('visible');
              setTimeout(() => {
                if (!infoBox.classList.contains('visible')) {
                  infoBox.innerHTML = defaultInfoHTML;
                }
              }, 300);
            });
          }
        });


        function getSVGContent() {
          return fetch('img/fondos/pe.svg')
            .then(res => res.text())
            .then(svg => {
              const container = document.getElementById('content');
              container.innerHTML = svg;

              // Obtener el SVG insertado
              const svgElement = container.querySelector('svg');


              // Quitar width y height fijos, si los tiene
              // svgElement.removeAttribute('width');
              // svgElement.removeAttribute('height');

              // Asegurar que el SVG se escale correctamente
              svgElement.setAttribute('preserveAspectRatio', 'xMidYMid meet');
              svgElement.style.width = '100%';
              svgElement.style.height = 'auto';
              svgElement.style.display = 'block';
              return svgElement;
            })
            .catch(err => console.error('Error cargando SVG:', err));
        }

      </script>


      <style>
        /* Contenedor principal para organizar el layout de la página */
        .page-container {
          display: flex;
          justify-content: flex-start;
          /* Cambia de center a flex-start */
          align-items: flex-start;
          gap: 30px;
          padding: 20px;
          flex-wrap: wrap;
          align-items: center;
          position: relative;
        }



        #info-box {
          flex-grow: 0;
          flex-shrink: 0;
          flex-basis: 280px;

          padding: 25px;
          background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
          color: #2c3e50;
          border-radius: 8px;
          border: 1px solid #e1e8ed;
          border-left: 5px solid #3498db;
          /* Borde de acento azul */
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
          text-align: left;
          /* margin-left: -360px; */
          /* margin-bottom: 240px; */
          position: absolute;
          /* Animación de entrada */
          opacity: 0;
          visibility: hidden;
          transform: translateY(15px);
          transition: opacity 0.3s ease, transform 0.3s ease;


        }

        #info-box.visible {
          opacity: 1;
          visibility: visible;
          transform: translateY(0);

          /* Para la opción 6 de posicionamiento absoluto centrado */
          /* transform: translateX(-50%) translateY(0); */
        }

        /* Estilos para el contenido de la caja */
        #info-box h2,
        #info-box h3 {
          margin-top: 0;
          margin-bottom: 20px;
          padding-bottom: 10px;
          border-bottom: 1px solid #3498db;
          color: #2c3e50;
          font-weight: 600;
        }

        #info-box p {
          margin: 0 0 12px 0;
          color: #34495e;
          line-height: 1.6;
          font-size: 14px;
        }

        #info-box p:last-child {
          margin-bottom: 0;
        }

        #info-box p strong {
          color: #2c3e50;
          font-weight: 600;
        }

        #info-box h2+p {
          color: #7f8c8d;
          font-style: italic;
          font-size: 13px;
        }

        /* Estilos responsivos para móviles */
        @media (max-width: 768px) {
          .page-container {
            flex-direction: column;
            align-items: center;
            gap: 20px;
            padding: 15px;
          }

          .map-container {
            min-width: 100%;
            max-width: 100%;
          }

          #info-box {
            flex-basis: auto;
            width: 100%;
            max-width: 500px;
            order: -1;
            /* Coloca la info box arriba en móviles */
          }

          /* Anular posicionamiento absoluto en móviles */
          #info-box {
            position: static !important;
            transform: none !important;
          }
        }

        /* Estilos para el objeto SVG dentro del mapa */
        #mapa-svg {
          width: 100%;
          height: auto;
          display: block;
        }
      </style>
    </div>
  </div>