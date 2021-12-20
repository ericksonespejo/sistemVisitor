<?php 
    include_once '../../includes/config/conexion.php';
    $id= $_GET['id'];
    $sql = "DELETE FROM `personal` WHERE `personal`.`id_personal` = '$id'";
    $resultados = mysqli_query($conn,$sql);
    if ($resultados) {
        echo "<script>alert('Se ha eliminado el trabajador municipal con éxito');
        window.location='personal-update.php';
        </script>";
    }else {
        echo "<script>alert('No se pudo eliminar el trabajador municipal');
        window.history.go(-1);
        </script>";
    }
                              
?>