<?php 
    include_once '../../includes/config/conexion.php';
    $id= $_GET['id'];
    $sql = "DELETE FROM `oficina` WHERE id = '$id'";
    $resultados = mysqli_query($conn,$sql);
    if ($resultados) {
        echo "<script>alert('Se ha eliminado la oficina con éxito');
        window.location='new-office-edit.php';
        </script>";
    }else {
        echo "<script>alert('No se pudo eliminar la oficina');
        window.history.go(-1);
        </script>";
    }
                              
?>