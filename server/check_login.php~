<?php

$username =$_POST['username'];
$clave = $_POST['password'];


$agenda = new mysqli("localhost","agenda_php","agenda_php","agenda");

if($agenda->errno) {
	$response['msg']="Error de conexion con la BD:"." ".$agenda->error;
	$agenda->close(); 	
	}//FIN IF
	
	else {
	$sql = "SELECT user,pass FROM usuarios WHERE user = '".$username."'";	
	$usuarios = 	$agenda->query($sql);		
	if ($usuarios->num_rows > 0) {
      while($row = $usuarios->fetch_assoc()) {
      	$response['msg']="OK";
      if($row['pass']==$clave) {
        	$response['msg']="OK";
        	
        } else {
		   $response['msg']="Clave Incorrecta"; 
		   
        }
    } // FIN WHILE
   
 
} // FIN IF 
else {
    $response['msg']="Usuario No Existe"; 
		  
		} // FIN ELSE
	

}// FIN ELSE
$agenda->close();
 echo json_encode($response);    







 ?>
