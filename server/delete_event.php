<?php
$id =$_POST['id'];
$agenda = new mysqli("localhost","agenda_php","agenda_php","agenda");

if($agenda->errno) {
	$response['msg']="Error de conexion con la BD:"." ".$agenda->error;
	$agenda->close(); 	
	}//FIN IF
	
	else {
	$sql = "DELETE FROM eventos WHERE id=".$id;	
	$agenda->query($sql);		
	$response['msg']="OK";
} // FIN ELSE 

$agenda->close();
 echo json_encode($response);    



 ?>
