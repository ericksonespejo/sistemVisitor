<?php
    require_once '../../includes/config/conexion.php';
    $Usuario = $_POST['Usuario'];
    $password = $_POST['password'];
    $Nombre = $_POST['Nombre'];
    $rolUsuario = $_POST['rolUsuario'];
    $sqlinsert = "INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `rol`) VALUES (NULL, '$Usuario', MD5('$password'), '$Nombre', '$rolUsuario');";
    $resultado = mysqli_query($conn,$sqlinsert);
    if ($resultado) {
        echo "<script>alert('Se ha registrado el usuario con éxito');
        window.location='register-user.php';
        </script>";
    }else {
        echo "<script>alert('No se pudo registrar el usuario');
        window.history.go(-1);
        </script>";
    }
?>