
<link rel="stylesheet" href="css/postventa.css">

<div class="fondo_paralelo">
<section class="postventa">

  <div class="container">

    <!-- Introducción -->
    <h2 class="titulo_postventa text-center">Servicio Postventa Integral</h2>
    <p class="subtitulo_postventa text-center">
      En CECHRIZA no solo vendemos equipos, ofrecemos confianza. Nuestro servicio técnico está diseñado para acompañarte en cada etapa, asegurando que tu inversión funcione con eficiencia y respaldo continuo.
    </p>
    
    <!-- Frase destacada -->
    <div  class="frase_destacada text-center">
      <h3>Mantenimientos preventivos, mantenimientos correctivos y mantenimientos a todo costo</h3>
    </div>

    <!-- Sección Destacada: Beneficios principales -->
    <div class="grid_destacada">
      <div class="item_destacada">
        <i class="fa-solid fa-headset icono_destacada"></i>
        <h3>Soporte Técnico</h3>
        <p>Asistencia remota y presencial con técnicos especializados en todo el Perú.</p>
      </div>
      <div class="item_destacada">
        <i class="fa-solid fa-calendar-check icono_destacada"></i>
        <h3>Planes Programados</h3>
        <p>Mantenimientos periódicos para asegurar un rendimiento óptimo y continuo.</p>
      </div>
      <div class="item_destacada">
        <i class="fa-solid fa-tools icono_destacada"></i>
        <h3>Repuestos y Garantía</h3>
        <p>Stock permanente de piezas originales y garantía extendida en todos nuestros equipos.</p>
      </div>
    </div>

    <!-- Cuadro destacado: Mantenimiento a Todo Costo -->
    <div class="cuadro_todo_costo">
      <div class="contenido_todo_costo">
        <div class="icono_todo_costo">
          <i class="fa-solid fa-infinity"></i>
        </div>
        <div class="info_todo_costo">
          <h3>Mantenimiento a Todo Costo</h3>
          <p class="descripcion_todo_costo">
            Nuestro plan más completo que garantiza el funcionamiento continuo de tus equipos sin límite de intervenciones. 
            Incluye todo tipo de reparaciones, repuestos y mano de obra por una cuota fija mensual.
          </p>
          <!-- <ul class="beneficios_todo_costo">
            <li><i class="fa-solid fa-check"></i> Reparaciones ilimitadas</li>
            <li><i class="fa-solid fa-check"></i> Repuestos incluidos</li>
            <li><i class="fa-solid fa-check"></i> Prioridad en atención</li>
            <li><i class="fa-solid fa-check"></i> Cuota fija mensual</li>
          </ul>
          <a href="#contacto" class="btn_todo_costo">Conocer Plan Completo</a> -->
        </div>
      </div>
    </div>

   <!-- Mantenimiento Preventivo y Correctivo -->
<div class="grid_postventa">
  
  <!-- Imagen -->
  <div class="item_postventa_img">
    <img src="img/20250613_1217_Mantenimiento de Contadoras Kisan_simple_compose_01jxn4mpm6em6sgcxs859ajjpn.png" alt="Servicio Técnico CECHRIZA">
  </div>

  <!-- Detalles -->
  <div class="item_postventa_info">

    <div class="bloque_servicio">
      <h3><i class="fa-solid fa-shield-heart mr-2"></i> Mantenimiento Preventivo</h3>
      <p>Realizamos inspecciones técnicas periódicas para prevenir fallos y prolongar la vida útil de tus equipos. Nuestro plan preventivo incluye:</p>
      <ul style="padding-left: 1rem; list-style-type: disc;">
        <li>Limpieza interna y externa de sensores, rodillos y compartimentos.</li>
        <li>Revisión de firmware y calibración de precisión.</li>
        <li>Informe técnico de cada intervención.</li>
      </ul>
      <p>Con este servicio, evitamos paradas inesperadas, optimizamos tu operatividad diaria y minimizamos costos por fallas acumulativas.</p>
    </div>

    <div class="bloque_servicio">
      <h3><i class="fa-solid fa-screwdriver-wrench mr-2"></i> Mantenimiento Correctivo</h3>
      <p>Cuando ocurre una falla, nuestro equipo actúa con rapidez y precisión. El mantenimiento correctivo incluye:</p>
      <ul style="padding-left: 1rem; list-style-type: disc;">
        <li>Diagnóstico técnico especializado en menos de 4 horas.</li>
        <li>Reposición de piezas defectuosas con repuestos originales.</li>
        <li>Pruebas funcionales post-reparación con validación del cliente.</li>
      </ul>
      <p>Nos comprometemos a restablecer el funcionamiento de tus equipos en el menor tiempo posible, garantizando continuidad operativa.</p>
    </div>

    <div class="beneficios_postventa mt-4">
      <h4 class="font-semibold mb-2">Beneficios de nuestro servicio técnico:</h4>
      <ul>
        <li><i class="fa-solid fa-check-circle"></i> Cobertura nacional con técnicos capacitados</li>
        <li><i class="fa-solid fa-check-circle"></i> Protocolos certificados de mantenimiento</li>
        <li><i class="fa-solid fa-check-circle"></i> Registro histórico de cada equipo por cliente</li>
        <li><i class="fa-solid fa-check-circle"></i> Soporte remoto complementario 24/7</li>
      </ul>
    </div>

    <a href="#contacto" class="btn_postventa">Solicitar Servicio</a>
  </div>
</div>

    </div>
  </div>
</section>
<?php 
 require_once "footer/clients.php";
  require_once "footer/contact.php";
 ?>

<style>
/* Estilos para la frase destacada */
.frase_destacada {
  margin: 2rem 0;
  padding: 1.5rem;
  background: linear-gradient(135deg, #181ca0, #1e40af);
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(30, 64, 175, 0.2);
}

.frase_destacada h3 {
  color: white;
  font-size: 1.5rem;
  font-weight: 600;
  margin: 0;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

/* Estilos para el cuadro de mantenimiento a todo costo */
.cuadro_todo_costo {
  margin: 3rem 0;
  background: linear-gradient(135deg, #059669, #10b981);
  border-radius: 16px;
  padding: 2rem;
  box-shadow: 0 8px 24px rgba(5, 150, 105, 0.2);
  position: relative;
  overflow: hidden;
}

.cuadro_todo_costo::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -50%;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
  pointer-events: none;
}

.contenido_todo_costo {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 2rem;
  align-items: center;
  position: relative;
  z-index: 1;
}

.icono_todo_costo {
  background: rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  width: 80px;
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
  backdrop-filter: blur(10px);
}

.icono_todo_costo i {
  font-size: 2.5rem;
  color: white;
}

.info_todo_costo h3 {
  color: white;
  font-size: 2rem;
  font-weight: 700;
  margin: 0 0 1rem 0;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.descripcion_todo_costo {
  color: rgba(255, 255, 255, 0.95);
  font-size: 1.1rem;
  line-height: 1.6;
  margin-bottom: 1.5rem;
}

.beneficios_todo_costo {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 0.8rem;
  margin-bottom: 2rem;
  list-style: none;
  padding: 0;
}

.beneficios_todo_costo li {
  color: white;
  font-weight: 500;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.beneficios_todo_costo i {
  color: #34d399;
  font-size: 1.1rem;
}

.btn_todo_costo {
  background: white;
  color: #059669;
  padding: 12px 24px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: 600;
  display: inline-block;
  transition: all 0.3s ease;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.btn_todo_costo:hover {
  background: #f0fdf4;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
}

/* Responsive */
@media (max-width: 768px) {
  .contenido_todo_costo {
    grid-template-columns: 1fr;
    text-align: center;
    gap: 1.5rem;
  }
  
  .icono_todo_costo {
    margin: 0 auto;
  }
  
  .beneficios_todo_costo {
    grid-template-columns: 1fr;
  }
  
  .frase_destacada h3 {
    font-size: 1.2rem;
  }
  
  .info_todo_costo h3 {
    font-size: 1.6rem;
  }
}
</style>

</div>