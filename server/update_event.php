<?php
session_start();
  $username = $_SESSION['usuario'];
$fecha_inicio = $_POST['start_date'];
$hora_inicio = $_POST['start_hour'];
$fecha_fin = $_POST['end_date'];
$hora_fin = $_POST['end_hour'];
$id = $_POST['id'];



 $agenda = new mysqli("localhost","agenda_php","agenda_php","agenda");

if($agenda->errno) {
	$response['msg']="Error de conexion con la BD:"." ".$agenda->error;
	$agenda->close(); 	
	}//FIN IF
	
	else {
	$sql = "UPDATE eventos SET fecha_inicio='".$fecha_inicio."',hora_inicio='".$hora_inicio."',fecha_fin='".$fecha_fin."',hora_fin='".$hora_fin."'  WHERE id = '".$id."' AND user='".$username."'";	
	$agenda->query($sql);		
}
$agenda->close();
$response['msg']="OK";
echo json_encode($response);

 ?>
