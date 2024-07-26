
<main>
<div class="seccion-slider">

<?php require_once "./app/views/content/slider-view.php"?>
</div>

<div class="seccion-crud">
    <?php require_once  "./app/views/content/mascotasmostrar-view.php"?>
</div>

<footer class="footer text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>El Rebaño</h5>
        <p>Somos un refugio de animales dedicado a rescatar, rehabilitar y reubicar a mascotas necesitadas. Únete a nuestra causa y ayuda a cambiar vidas.</p>
      </div>

      <div class="col-md-4">
        <h5>Enlaces Útiles</h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo APP_URL; ?>body/">Inicio</a></li>
          <li><a href="<?php echo APP_URL; ?>sobrenosotros/">Acerca de Nosotros</a></li>
          <li><a href="<?php echo APP_URL; ?>servicios/">Servicios</a></li>
          <li><a href="<?php echo APP_URL; ?>contacto/">Contacto</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Síguenos</h5>
        <div class="social-icons">
          <a href="#"><i class="facebook"></i></a>
          <a href="#"><i class=""></i></a>
          <a href="#"><i class=""></i></a>
          <a href="#"><i class=""></i></a>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <p>&copy; 2024 El Rebaño. Todos los derechos reservados.</p>
      </div>
    </div>
  </div>
</footer>

</main>
