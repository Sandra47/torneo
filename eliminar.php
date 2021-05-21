
<?php
    include 'conexion.php';
    $match_no=intval($_GET['match_no']) ;
    $team_id=intval($_GET['team_id']) ;
    $consulta = "DELETE FROM match_captain WHERE match_no=".$match_no." AND team_id= ".$team_id."";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "no ha sido posible obtener los datos");
    
?>
<script type="text/javascript">
	alert("Registro eliminado exitosamente");
	window.location.href='index.php';
</script>

