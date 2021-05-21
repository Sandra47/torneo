<?php
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "torneo";
    $conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar el servidor");
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

?>