<?php
include "conector.php";

$username = $_POST['username'];
$clave = $_POST['password'];
$response['msg']="OK";
echo json_encode($response);



 ?>
