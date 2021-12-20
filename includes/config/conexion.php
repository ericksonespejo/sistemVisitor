<?php

$sname= "localhost";
$unmae= "root";
$password = "der45der";

$db_name = "sistemaAquia";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if ($conn) {
	echo "";
}else{
    echo "No se pudo realizar conexion con la base de datos";
}
?>