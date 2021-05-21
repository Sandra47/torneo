<form action="act_editar.php" method="post">
<?php 
    include 'conexion.php';
    $match_no=$_GET['match_no'];
    $team_id=$_GET['team_id'];
    $player_captain=$_GET['player_captain'];

    $sentenciaSeleccionado = "SELECT * FROM match_captain WHERE match_no = '".$match_no."' AND team_id ='". $team_id."'";

    $seleccionado = mysqli_query( $conexion, $sentenciaSeleccionado ) or die ( "no ha sido posible obtener los datos");
    $consulta = "SELECT * FROM match_mast";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "no ha sido posible obtener los datos");
    $sel = mysqli_fetch_array($seleccionado );
    echo "<input style='display:none' readonly type=text' name='ini_match' value=".$match_no.">";
    echo "<br>";
    echo "<input style='display:none' readonly type=text' name='ini_team' value=".$team_id.">";
    echo "<br>";
    echo "<label for='match_no'>partido</label>";
    echo "<br>";
    echo "<select name = 'match'>";

    while ($columna = mysqli_fetch_array($resultado ))
	{
	//	echo "<option value=".$columna['match_no'].">".$columna['match_no']."</option>";
        if($columna['match_no'] == $sel['match_no']){
            echo "<option selected='selected' value=".$columna['match_no'].">".$columna['match_no']."</option>";
        }
        else{
            echo "<option value=".$columna['match_no'].">".$columna['match_no']."</option>";
        }
	}
    echo "</select>";
    echo "<br>";
    $consulta = "SELECT country_id FROM soccer_country";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "no ha sido posible obtener los datos");
    echo "<label for='team'>Equipo</label>";
    echo "<br>";
    echo "<select name = 'team'>";
    while ($columna = mysqli_fetch_array($resultado ))
	{
        if($columna['country_id'] == $sel['team_id']){
            echo "<option selected='selected' value=".$columna['country_id'].">".$columna['country_id']."</option>";
        }
        else{
            echo "<option value=".$columna['country_id'].">".$columna['country_id']."</option>";
        }
	//	echo "<option value=".$columna['country_id'].">".$columna['country_id']."</option>";	
	}
    echo "</select>";
    echo "<br>";
    $consulta = "SELECT * FROM player_mast";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "no ha sido posible obtener los datos");
    echo "<label for='capitan'>Capitan</label>";
    echo "<br>";
    echo "<select name = 'capitan'>";
    while ($columna = mysqli_fetch_array($resultado ))
	{
        if($columna['player_id'] == $sel['player_captain']){
            echo "<option selected='selected' value=".$columna['player_id'].">".$columna['player_id']."</option>";	
        }
        else{
            echo "<option value=".$columna['player_id'].">".$columna['player_id']."</option>";	
        }
	}
    echo "</select>";
    echo ""
?>
        <br>
        <button>guardar</button>


</form>