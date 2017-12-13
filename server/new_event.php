<?php
session_start();
  $username = $_SESSION['usuario'];
$titulo = $_POST['titulo'];
$fecha_inicio = $_POST['start_date'];
$hora_inicio = $_POST['start_hour'];
$fecha_fin = $_POST['end_date'];
$hora_fin = $_POST['end_hour'];
$dia_entero = $_POST['allDay'];
/*
$titulo = "hola";
$fecha_inicio = "2017-12-10";
$hora_inicio = "12:00";
$fecha_fin = "2017-12-10";
$hora_fin = "14:00";
$dia_entero = "false";
*/
  $agenda = new mysqli("localhost","agenda_php","agenda_php","agenda");

if($agenda->errno) {
	$response['msg']="Error de conexion con la BD:"." ".$agenda->error;
	$agenda->close(); 	
	}//FIN IF
else {
	$sql = "INSERT INTO eventos (titulo,fecha_inicio,hora_inicio,fecha_fin,hora_fin,dia_entero,user) VALUES ('".$titulo."','".$fecha_inicio."','".$hora_inicio."','".$fecha_fin."','".$hora_fin."','".$dia_entero."','".$username."')";	
	$status =	$agenda->query($sql);		
	$response['msg']="OK";
	} // FIN ELSE
	
$agenda->close();
echo json_encode($response);   



 ?>
