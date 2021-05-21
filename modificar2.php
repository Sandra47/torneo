<?php 
 include 'conexion.php';
 $match_no=$_GET['match_no'];
 $team_id=$_GET['team_id'];
 $player_captain=$_GET['player_captain'];
 $consulta = "SELECT * FROM match_captain WHERE match_no = '".$match_no."' AND team_id ='". $team_id."'";
 $resultado = mysqli_query( $conexion, $consulta ) or die ( "no ha sido posible obtener los datos");
while ($columna = mysqli_fetch_array($resultado ))
{
?>
<div>
  <from>
       
       <label> Partido: </label><br>
       <input type="text" value = "<?php echo $columna['match_no']?>"> <br>
  
       
       <label> Equipos: </label><br>
       <input type="text" value = "<?php echo $columna['team_id']?>"><br>

       <label> Capitan: </label><br>
       <input type="text" value = "<?php echo $columna['player_captain']?>"> 
  </from>
   <?php 
   }
   ?>

</div>