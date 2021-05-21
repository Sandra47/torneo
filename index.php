
<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos
//	$usuario = "root";
//	$password = "";
//	$servidor = "localhost";
//	$basededatos = "torneo";
	
	// creación de la conexión a la base de datos con mysql_connect()
//	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar el servidor");
	
	// Selección del a base de datos a utilizar
//	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	include 'conexion.php';
	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM match_captain";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "no ha sido posible obtener los datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<a href='ingresar.php'><button>ingresar</button></a>";
	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>Partido #</th>";
	echo "<th>id-equipo</th>";
    echo "<th>capitan</th>";
	echo "<th>Acciones</th>";
	echo "</tr>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array($resultado ))
	{
		echo "<tr>";
  		echo "<td>" . $columna['match_no'] . "</td><td>" . $columna['team_id'] . "</td><td>" . $columna['player_captain'] . "</td>";
  		echo " <td> <a href='modificar.php?match_no=".$columna['match_no']."&team_id=".$columna['team_id']."&player_captain=".$columna['player_captain']."'><button>editar</button></a></td>";
        echo "<td> <a> <button type='button' class='bnt' onClick=confirmDelete(".$columna['match_no'].",".$columna['team_id'].")> Eliminar</button></a></td>";
        echo "</tr>";
	}
	
	echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>
<script type="text/javascript">
	function confirmDelete(match, team){
		let confirmacion = confirm("esta seguro de borrar el registro?");
		if(confirmacion){
			window.location.href=`eliminar.php?match_no= ${match}&team_id=${team}`;
		}
		else{
			window.location.href=`index.php`;
		}

	}
</script>