<?php

include "conector.php";
$agenda= new ConectorBD("localhost","agenda_php","agenda_php");
if($agenda->initConexion("agenda")=="OK") {
	
$dato1["user"]="'usuario1@gmail.com'";
$dato1["nombre"]="'Ricardo Navia Ibaceta'";
$dato1["fecha_nac"]="'1972-06-29'";
$dato1["pass"]="'12345'";

$dato2["user"]="'usuario2@gmail.com'";
$dato2["nombre"]="'Pedro Tapia Ordena'";
$dato2["fecha_nac"]="'1972-06-29'";
$dato2["pass"]="'12345'";

$dato3["user"]="'usuario3@gmail.com'";
$dato3["nombre"]="'Jose Cifuentes Ibaceta'";
$dato3["fecha_nac"]="'1972-06-29'";
$dato3["pass"]="'12345'";

if($agenda->insertData("usuarios",$dato1)) {} else {echo "error";} //FIN IF
if($agenda->insertData("usuarios",$dato2)) {} else {echo "error";} //FIN IF
if($agenda->insertData("usuarios",$dato3)) {} else {echo "error";} //FIN IF

}//FIN IF
else { echo "error en la conexion";}





 ?>
