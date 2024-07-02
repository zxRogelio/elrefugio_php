
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo APP_URL; ?>app/views/img/perros.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Adoptalos!</h5>
        <p>Ellos buscan familia</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo APP_URL; ?>app/views/img/gatos.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Adoptalos!</h5>
        <p>Ellos buscan acompañarte.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo APP_URL; ?>app/views/img/mascotas.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Adoptalos!</h5>
        <p>Ellos buscan a alguien con quien estar</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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