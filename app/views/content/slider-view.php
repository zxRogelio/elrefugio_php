<?php 
require_once "./app/views/inc/head.php";
require_once "./config/server.php";

use app\controllers\sliderController;

//Crear instancia del controlador
$sliderController = new sliderController();
$imagenesSlider = $sliderController->seleccionarImgSlider();
?>


<section class="middle">
            <div class="slider-frame">
                <ul>
                    <?php foreach ($imagenesSlider as $imagen): { ?>
                    <li><img width="880px" height="750px" src="<?php echo $imagen ['slider_url']?>"></li>
                    <div class="carousel-caption">
                <h5>Bienvenidos a Huellitas</h5>
                <p>
                    Necesitas un amigo peludo, ¡ADOPTA UNO!
                <p>
                    <a href="#" class="btn btn-primary mt-3">Adopta</a>
                </p>
            </div>
                    <?php } endforeach; ?>
                </ul>
</section>

