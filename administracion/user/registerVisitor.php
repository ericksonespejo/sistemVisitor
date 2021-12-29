<?php
    require_once '../../includes/config/conexion.php';
    $fecha = $_POST['fecha'];
    $hora_ingreso = $_POST['hora_ingreso'];
    $nombre_apellido = $_POST['nombre_apellido'];
    $documento = $_POST['documento'];
    $motivo_visita = $_POST['motivo_visita'];
    $empleado_publico = $_POST['empleado_publico'];
    $cargo = $_POST['cargo'];
    $oficina = $_POST['oficina'];
    $horaSalida = $_POST['hora_salida'];
    
    $sql = "INSERT INTO `visitante` (`fecha`, `hora_ingreso`, `nombre_apellido`, `documento`, `motivo_visita`, `empleado_publico`, `cargo`, `oficina`, `hora_salida`) VALUES ('$fecha', '$hora_ingreso', '$nombre_apellido', '$documento', '$motivo_visita', '$empleado_publico', '$cargo', '$oficina', '$horaSalida');";


    $resultado = mysqli_query($conn,$sql);
    if ($resultado) {
        echo "<script>alert('Se ha registrado la visita con éxito');
        window.location='index.php';
        </script>";
    }else {
        echo "<script>alert('No se pudo registrar la visita');
        window.history.go(-1);
        </script>";
    }
?>