<?php

    include_once '../../includes/config/conexion.php';
    $dni = $_POST['dni'];
    $nombres = $_POST['nombres'];
    $cargo = $_POST['cargo'];

    $sql = "INSERT INTO `personal` (dni, nombres, cargo) VALUES ('$dni', '$nombres', '$cargo');";
    $resultadop = mysqli_query($conn,$sql);
    if ($resultadop) {
        echo "<script>alert('Se ha registrado el trabajador municipal con éxito');
        window.location='personal-update.php';
        </script>";
    }else {
        echo "<script>alert('No se pudo registrar el trabajador municipal');
        window.history.go(-1);
        </script>";
    }





?>