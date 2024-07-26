<h2 class="text-center mt-3">Mascotas</h2>
<div class="container mt-5">
    <div class="row">
        <?php 
            require_once "./app/views/inc/head.php";
            require_once "./config/server.php";
            use app\controllers\mascotasController;
            
            $cpropiedad = new mascotasController();
            $Consulta = $cpropiedad->ConsultaMascotas();
            
            foreach($Consulta as $dato){
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card text-center">';
                echo '<img src="'.$dato["url_img"].'" class="card-img-top img-fluid custom-img" alt="Imagen">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$dato["nombre"].'</h5>';
                echo '<p class="card-text">'.$dato["descripcion"].'</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        ?>
    </div>
</div>