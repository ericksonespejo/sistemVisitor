<?php 
    include_once '../../includes/config/conexion.php';
    $id= $_POST['id'];
    $nombre_oficina = $_POST['nombre_oficina'];
    $sql = "UPDATE oficina SET nombre_oficina = '$nombre_oficina' WHERE id = '$id';";
    $resultados = mysqli_query($conn,$sql);
    if ($resultados) {
        echo "<script>alert('Se ha actualizado la oficina con éxito');
        window.location='new-office-edit.php';
        </script>";
    }else {
        echo "<script>alert('No se pudo actualizar la oficina por favor intentalo de nuevo');
        window.history.go(-1);
        </script>";
    }
                              
?>