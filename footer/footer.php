

<link rel="stylesheet" href="css/footer.css">










</div>


<div class="linia_footer">

</div>





<section class="footer">
  <div class="container">
    <div class="grid_enlaces">
        <div>
        <a href=""><p class="text-footer_ruta">Inicio</p></a>
        </div>
        <div>   <a href=""><p class="text-footer_ruta">Nosotros</p></a></div>
        <div>   <a href=""><p class="text-footer_ruta">Productos</p></a></div>
        <div>   <a href=""><p class="text-footer_ruta">Servicios</p></a></div>
        <div class="item_footer_enlace">   <a href=""><p class="text-footer_ruta">Contacto</p></a></div>
    </div>
    
    <!-- Logo centrado -->
    <div class="logo-footer">
      <img src="img/cechriza.png" alt="Logo CECHRIZA" />
    </div>

    <!-- Grilla de datos -->
    <div class="grid_footer">
      <div>
        <p class="text-footer">Para ponerse en contacto escriba o llame 014760909 / 014760348</p>
      </div>
      <div>
        <p class="text-footer">Dirección: Av. San luis N° 2930, San Borja, Lima 41, Perú.</p>
      </div>
      <div>
      <p class="text-footer">Email:  ventas@cechriza.com</p>  
      </div>
      <div class="item_footer"><p class="text-footer">Copyright © 2025 - Cechriza. All rights reserved</p></div>
    </div>

  </div>
</section>

<div class="whats">
  <div id="whatsapp-button">
    <i class="fab fa-whatsapp"></i>
  </div>

  <div id="whatsapp-chat" class="hidden">
    <img src="img/icono.png" alt="Icono" class="chat-icono">
    <textarea id="whatsapp-message" placeholder="Escribe tu mensaje..."></textarea>
    <button id="send-whatsapp">Enviar</button>
  </div>
</div>




</body>



<script src="js/nav.js"></script>
<script src="js/flowbite.min.js"></script>
<!-- Swiper JS -->



</html>



<script>
  document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("whatsapp-button");
    const chat = document.getElementById("whatsapp-chat");
    const sendBtn = document.getElementById("send-whatsapp");

    btn.addEventListener("click", () => {
      // Mostrar el formulario si está oculto, ocultarlo si está visible
      if (chat.style.display === "none" || chat.style.display === "") {
        chat.style.display = "flex";
        btn.style.animation = "none"; // Detener la animación
        btn.classList.add("whatsapp-button-clicked");
      } else {
        btn.classList.remove("whatsapp-button-clicked");
        chat.style.display = "none";
        btn.style.animation = "bounce 3.5s infinite"; 
      }
    });

    sendBtn.addEventListener("click", () => {
      const message = document.getElementById("whatsapp-message").value.trim();
      if (message) {
        const phone = "51999999999"; // Reemplaza con tu número
        const url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
        window.open(url, "_blank");
        chat.style.display = "none"; // Ocultar después de enviar
        document.getElementById("whatsapp-message").value = "";
      }
    });
  });
</script>
