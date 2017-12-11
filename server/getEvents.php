<?php
  
$agenda = new mysqli("localhost","agenda_php","agenda_php","agenda");

if($agenda->errno) {
	$response['msg']="Error de conexion con la BD:"." ".$agenda->error;
	$agenda->close(); 	
	}//FIN IF
else {
	$sql = "SELECT * FROM eventos WHERE 1";	
	$lista_eventos = 	$agenda->query($sql);		
	if ($lista_eventos->num_rows > 0) {
		$response['msg']="OK";
		$indice = 0;
      while($row = $lista_eventos->fetch_assoc()) {
      	
      	$start = $row['fecha_inicio']."T".$row['hora_inicio'];
      	$end = $row['fecha_fin']."T".$row['hora_fin'];
      	$eventos[$indice]['id']= $row['id'];
      	$eventos[$indice]['title']=$row['titulo'];
      	$eventos[$indice]['start']=$start;
      	$eventos[$indice]['end']=$end;
      	$eventos[$indice]['allDay']=$row['dia_entero'];
      	$indice +=1;
	    } // FIN WHILE
	    $response['eventos']=$eventos;
	} // FIN IF 
	else {
    $response['msg']="OK"; 
		} // FIN ELSE
}// FIN ELSE
$agenda->close();
 echo json_encode($response);   

 ?>
