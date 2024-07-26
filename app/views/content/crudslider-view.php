<?php 
require_once "./app/views/inc/head.php";
require_once "./config/server.php";

use app\controllers\sliderController;

//Crear instancia del controlador
$sliderController = new sliderController();
$imagenesSlider = $sliderController->seleccionarImgSlider();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Texto alternativo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($imagenesSlider as $imagen): { ?>
        <tr>
            <td><?php echo $imagen['slider_id']; ?></td>
            <td><img width="88px" height="50px" src="<?php echo $imagen['slider_url']; ?>"></td>
            <td><?php echo $imagen['slider_alt']; ?></td>
            <td><?php echo $imagen['status']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $imagen['slider_id']; ?>" class="btn btn-sm btn-primary">
                    <i class="fas fa-edit"></i> Editar
                </a>
                |
                <a href="delete.php?id=<?php echo $imagen['slider_id']; ?>" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i> Eliminar
                </a>
            </td>
        </tr>
    <?php } endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Texto alternativo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </tfoot>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#example').DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "No hay datos disponibles en la tabla",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
                "infoFiltered": "(filtrado de _MAX_ entradas totales)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "No se encontraron registros coincidentes",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": activar para ordenar la columna de manera descendente"
                }
            }
        });
    });
</script>
</body>
</html>

