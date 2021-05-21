<form action="ingresoreg.php" method="post">
<?php 
    include 'conexion.php';

    $consulta = "SELECT * FROM match_mast";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "no ha sido posible obtener los datos");
    echo "<label for='match_no'>partido</label>";
    echo "<br>";
    echo "<select name = 'match'>";

    while ($columna = mysqli_fetch_array($resultado ))
	{
        echo "<option value=".$columna['match_no'].">".$columna['match_no']."</option>";
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
        echo "<option value=".$columna['country_id'].">".$columna['country_id']."</option>";

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
            echo "<option value=".$columna['player_id'].">".$columna['player_id']."</option>";	
	}
    echo "</select>";
?>
        <br>
        <input type="submit" name="" id="">