<?php

class Noticias
{
  public $img;
  public $title;
  public $description;
  public $category;

  public function __construct(string $img, string $title, string $description, string $category)
  {
    $this->img = $img;
    $this->title = $title;
    $this->description = $description;
    $this->category = $category;
  }
}

$noticias = [
  new Noticias("img/scan_coin_dtc6.png", "DTC6", "Valorización con alta capacidad y detección automática de billetes falsos.", "data-newton"),
  new Noticias("img/kisan_kd_100.png", "KD-100", "Contadora de billetes compacta y precisa, ideal para tareas de conteo rápido en espacios reducidos.", "data-newton"),
  new Noticias("img/newton_30_cechriza.png", "Newton 30", "Contadora y valorizadora de alta precisión, ideal para operaciones exigentes.", "data-newton"),
  new Noticias("img/scan_coin_dtc6.png", "DTC6", "Valorización con alta capacidad y detección automática de billetes falsos.", "data-newton"),
  new Noticias("img/kisan_kd_100.png", "KD-100", "Contadora de billetes compacta y precisa, ideal para tareas de conteo rápido en espacios reducidos..", "data-newton"),
  new Noticias("img/newton_30_cechriza.png", "Newton 30", "Contadora y valorizadora de alta precisión, ideal para operaciones exigentes.", "data-newton"),
  new Noticias("img/scan_coin_dtc6.png", "DTC6", "Valorización con alta capacidad y detección automática de billetes falsos.", "data-newton"),
  new Noticias("img/kisan_kd_100.png", "KD-100", "Contadora de billetes compacta y precisa, ideal para tareas de conteo rápido en espacios reducidos..", "data-kisan"),
  new Noticias("img/newton_30_cechriza.png", "Newton 30", "Contadora y valorizadora de alta precisión, ideal para operaciones exigentes.", "data-newton"),
];

// $noticias = array_merge($noticias, $noticias);

?>
<link rel="stylesheet" href="css/noticias.css">


<div class="fondo_paralelo">

  <div class="container">
    <h1 class="titulo_noticias">Noticias</h1>

    <div class="grid_noticias">
      <div>

        <div class="group_input">
          <i class="fa-brands fa-sistrix"></i>
          <input type="text" class="" id="input_search" name="input_search">
        </div>

        <div class="group_categorias">
          <h1 class="titulo_categorias">Categorias</h1>
          <ul>
            <li class="data_newton">Newton </li>
            <li class="data_kisan">Kisan</li>
          </ul>
        </div>

        <div class="destacados">
          <h1 class="titulo_categorias">Destacados</h1>

          <div class="grid_destacado flex flex-col">
            <div>
              <img src="img/kisan_kd_100.png" alt="">
            </div>
            <div>
              <h1>Contadora de billetes compacta y precisa, ideal para tareas de conteo rápido en espacios reducidos.
              </h1>
              <a href="">Mas informacion</a>
            </div>
          </div>

          <div class="grid_destacado flex flex-col">
            <div>
              <img src="img/scan_coin_dtc6.png" alt="">
            </div>
            <div>
              <h1>Valorización con alta capacidad y detección automática de billetes falsos.
              </h1>
              <a href="">Mas informacion</a>
            </div>
          </div>

        </div>


      </div>
      <div class="item_section">
        <div class="grid_data_noticias">
          <?php foreach ($noticias as $noticia): ?>
            <div data="<?php echo $noticia->category; ?>">
              <div class="group_noticia">
                <img src="<?php echo $noticia->img; ?>" alt="">
                <h1><?php echo $noticia->title; ?></h1>
                <p><?php echo $noticia->description; ?></p>
                <a href="">Mas informacion</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div id="paginador" class="paginador">
          <button id="btnPrev">◀ Anterior</button>
          <span id="paginaActual">1</span>
          <button id="btnNext">Siguiente ▶</button>
        </div>



      </div>
    </div>

  </div>


<?php 
 require_once "footer/clients.php";
  require_once "footer/contact.php";
 ?>




  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const categoriaItems = document.querySelectorAll('.group_categorias li');
      const input = document.getElementById('input_search');
      const noticiasWrapper = document.querySelector('.grid_data_noticias');
      const allNoticias = Array.from(noticiasWrapper.children);

      const btnPrev = document.getElementById('btnPrev');
      const btnNext = document.getElementById('btnNext');
      const paginaActualSpan = document.getElementById('paginaActual');

      let noticiasFiltradas = [...allNoticias]; // por defecto, todas
      let paginaActual = 1;
      const noticiasPorPagina = 6;

      function actualizarPaginacion() {
        const totalPaginas = Math.ceil(noticiasFiltradas.length / noticiasPorPagina);
        paginaActual = Math.min(Math.max(1, paginaActual), totalPaginas);

        noticiasWrapper.innerHTML = ''; // limpiar noticias mostradas

        const inicio = (paginaActual - 1) * noticiasPorPagina;
        const fin = inicio + noticiasPorPagina;

        if (noticiasFiltradas.length === 0) {
          const p = document.createElement('p');
          p.className = 'text-center text-red-500 text-2xl bg-red-100 border border-1 rounded-2';
          p.textContent = 'No se encontraron noticias.';
          noticiasWrapper.appendChild(p);

        } else {

          noticiasFiltradas.slice(inicio, fin).forEach(noticia => {
            noticiasWrapper.appendChild(noticia);
          });

        }

        paginaActualSpan.textContent = paginaActual;
        btnPrev.disabled = paginaActual <= 1;
        btnNext.disabled = paginaActual === totalPaginas;
      }

      function aplicarFiltros() {
        const query = input.value.toLowerCase().trim();
        const categoriaActiva = [...categoriaItems].find(i => i.classList.contains('active'));
        const categoria = categoriaActiva?.classList.contains('data_newton') ? 'data-newton' :
          categoriaActiva?.classList.contains('data_kisan') ? 'data-kisan' : null;


        noticiasFiltradas = allNoticias.filter(n => {
          const texto = n.textContent.toLowerCase();
          const coincideTexto = texto.includes(query);
          const coincideCategoria = categoria ? n.getAttribute('data') === categoria : true;
          return coincideTexto && coincideCategoria;
        });

        paginaActual = 1;
        actualizarPaginacion();
      }

      categoriaItems.forEach(item => {
        item.addEventListener('click', () => {
          categoriaItems.forEach(i => i.classList.remove('active'));
          item.classList.add('active');
          input.value = '';
          aplicarFiltros();
        });
      });

      input.addEventListener('input', () => {
        categoriaItems.forEach(i => i.classList.remove('active'));
        aplicarFiltros();
      });

      btnPrev.addEventListener('click', () => {
        if (paginaActual > 1) {
          paginaActual--;
          actualizarPaginacion();
        }
      });

      btnNext.addEventListener('click', () => {
        const totalPaginas = Math.ceil(noticiasFiltradas.length / noticiasPorPagina);
        if (paginaActual < totalPaginas) {
          paginaActual++;
          actualizarPaginacion();
        }
      });

      // Inicializar
      aplicarFiltros();
    });
  </script>