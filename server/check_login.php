<?php
include "conector.php";

$username = $_POST['username'];
$clave = $_POST['password'];

//$agenda= new ConectorBD("localhost","agenda_php","agenda_php");
$agenda = new mysqli("localhost","agenda_php","agenda_php","agenda");
if($agenda->initConexion("agenda")=="OK") {
	$usuarios = 	$agenda->consultar("usuarios","user");
	echo $usuarios;
}//FIN IF
else { echo "error en la conexion";}




//$response['msg']="OK";
//echo json_encode($response);



 ?>
