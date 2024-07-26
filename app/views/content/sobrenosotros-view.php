<h2 class="text-center mt-3">Nosotros Somos</h2>
<div class="container mt-5 d-flex justify-content-center">
    <div class="row justify-content-center">
        <?php 
            require_once "./app/views/inc/head.php";
            require_once "./config/server.php";
            use app\controllers\nosotrosController;

            $nosotrosController = new nosotrosController();
            $nosotros = $nosotrosController->obtenerNosotros();

            foreach($nosotros as $dato){
                echo '<div class="col-md-8 mb-4">';
                echo '<div class="card text-center">';
                if (!empty($dato["url_logo"])) {
                    echo '<img src="'.$dato["url_logo"].'" class="card-img-top img-fluid custom-img" alt="Imagen">';
                }
                echo '<div class="card-body">';
                echo '<h5 class="card-title">Lo que somos</h5>';
                echo '<p class="card-text">'.$dato["mision"].'</p>';
                echo '<p class="card-text">'.$dato["vision"].'</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        ?>
    </div>
</div>