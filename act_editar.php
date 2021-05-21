<?php
    include 'conexion.php';
    $match_ini = intval($_POST['ini_match']);
    $team_ini = intval($_POST['ini_team']);
    $match = intval($_POST['match']);
    $team = intval($_POST['team']);
    $capitan = intval($_POST['capitan']);
    $sentencia="UPDATE match_captain SET match_no=".$match.", team_id=".$team.", player_captain=".$capitan." WHERE team_id= ".$team_ini." AND match_no=".$match_ini.";";
    $resultado = mysqli_query( $conexion, $sentencia ) or die ( "no ha sido posible obtener los datos");

?>
<script type="text/javascript">
	alert("Registro Ingresado exitosamente");
	window.location.href='index.php';
</script>