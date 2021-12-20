<?php
    require_once '../../includes/config/conexion.php';
    $new_office = $_POST['new_office'];
    $sqlinsert = "INSERT INTO `oficina` (nombre_oficina) VALUES ('$new_office');";
    $resultado = mysqli_query($conn,$sqlinsert);
    if ($resultado) {
        echo "<script>alert('Se ha registrado la oficina con éxito');
        window.location='new-office-edit.php';
        </script>";
    }else {
        echo "<script>alert('No se pudo registrar la oficina');
        window.history.go(-1);
        </script>";
    }
?>