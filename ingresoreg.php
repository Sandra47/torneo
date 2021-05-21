<?php
    include 'conexion.php';
    $match = intval($_POST['match']);
    $team = intval($_POST['team']);
    $capitan = intval($_POST['capitan']);
    try {
        $sentencia="INSERT INTO match_captain VALUES (".$match.", ".$team.", ".$capitan.")";
    $resultado = mysqli_query( $conexion, $sentencia ) or die ( "no ha sido posible obtener los datos");
    } catch (\Throwable $th) {
        throw $th;
    }

    


?>
<script type="text/javascript">
	alert("Producto Ingresado exitosamente");
	window.location.href='index.php';
</script>