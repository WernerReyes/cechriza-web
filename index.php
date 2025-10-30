<?php
require_once 'config.php';
require_once 'cabecera/cabecera.php';

$url = $_GET['url'] ?? 'inicio'; // por defecto 'inicio'

// lista blanca de rutas permitidas
$rutas_permitidas = [
  'inicio',
  'nosotros',
  'contacto',
  'procesamiento_moneda',
  'procesamiento_billetes',
  'post_mantenimiento_preventivo',
  'noticias',
  'detalle_equipo',
];

if (in_array($url, haystack: $rutas_permitidas)) {
  require_once RUTA_MODULOS . $url . '.php';
} else {
  // 404 o redirección segura
  echo "<main class='text-center p-10 text-red-600'>Página no encontrada</main>";
}

require_once 'footer/footer.php';
?>