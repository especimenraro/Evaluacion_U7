<?php

include "conector.php";
$agenda= new ConectorBD("localhost","agenda_php","agenda_php");


if($agenda->initConexion("agenda")=="OK") {
	$usuarios = $agenda->ejecutarQuery("SELECT * FROM usuarios");
	if($usuarios->num_rows ==0) {
$dato1["user"]="'usuario1@gmail.com'";
$dato1["nombre"]="'Ricardo Navia Ibaceta'";
$dato1["fecha_nac"]="'1972-06-29'";
$dato1["pass"]="'".password_hash('12345',PASSWORD_DEFAULT)."'" ;

$dato2["user"]="'usuario2@gmail.com'";
$dato2["nombre"]="'Pedro Tapia Ordena'";
$dato2["fecha_nac"]="'1972-06-29'";
$dato2["pass"]="'".password_hash('67890',PASSWORD_DEFAULT)."'" ;

$dato3["user"]="'usuario3@gmail.com'";
$dato3["nombre"]="'Jose Cifuentes Ibaceta'";
$dato3["fecha_nac"]="'1972-06-29'";
$dato3["pass"]="'".password_hash('123456',PASSWORD_DEFAULT)."'";

if($agenda->insertData("usuarios",$dato1)) {} else {echo "error";} //FIN IF
if($agenda->insertData("usuarios",$dato2)) {} else {echo "error";} //FIN IF
if($agenda->insertData("usuarios",$dato3)) {} else {echo "error";} //FIN IF
$response['msg']="OK";
}
else {
$response['msg']="OK";
}
}//FIN IF

else { 
$response['msg']="Error en la conexion con la base de datos - No se pudieron crear los usuarios";
}

echo json_encode($response);
 ?>
