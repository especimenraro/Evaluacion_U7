<?php
  
  $username = "usuario2@gmail.com";
$agenda = new mysqli("localhost","agenda_php","agenda_php","agenda");

if($agenda->errno) {
	$response['msg']="Error de conexion con la BD:"." ".$agenda->error;
	$agenda->close(); 	
	}//FIN IF
else {
	$sql = "SELECT eventos.id,eventos.titulo,eventos.fecha_inicio,eventos.hora_inicio,eventos.fecha_fin,eventos.hora_fin,eventos.dia_entero,usuarios.user FROM eventos INNER JOIN usuarios ON eventos.user = usuarios.user WHERE usuarios.user='".$username."'";	
	$lista_eventos = 	$agenda->query($sql);		
	if ($lista_eventos->num_rows > 0) {
		
      while($row = $lista_eventos->fetch_assoc()) {
      	
      	echo  $row['fecha_inicio']."-".$row['hora_inicio']."-".$row['titulo']."<br>";
      	echo  $row['fecha_fin']."-".$row['hora_fin']."<br>";
      	
      	
	    } // FIN WHILE
	    
	} // FIN IF 
	else {
    $response['msg']="OK"; 
		} // FIN ELSE
}// FIN ELSE
$agenda->close();
 

 ?>
