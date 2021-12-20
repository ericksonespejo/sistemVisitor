<?php
include_once '../../includes/config/conexion.php';
$id=$_POST['id'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$name = $_POST['name'];
$rol = $_POST['rolUsuario'];
$sql = "UPDATE users SET user_name='$user_name', password= MD5('$password '), name = '$name', rol= '$rol' WHERE id = '$id';";
$respuesta = mysqli_query($conn,$sql);
if ($respuesta) {
    echo "<script>alert('Se ha actualizado el usuario con éxito');
    window.location='register-user-update.php';
    </script>";
}else {
    echo "<script>alert('No se pudo actualizar el usuario por favor intentalo de nuevo');
    window.history.go(-1);
    </script>";
}




?>