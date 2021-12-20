<?php 
    include_once '../../includes/config/conexion.php';
    $id= $_GET['id'];
    $sql = "DELETE FROM `users` WHERE id = '$id'";
    $resultados = mysqli_query($conn,$sql);
    if ($id>0) {
        echo "<script>
        confirm('¿Estas seguro de querer eliminar el usuario?');
        return true;
        </script>";

        
    }
    if ($resultados) {
        echo "<script>alert('Se ha eliminado el usuario con éxito');
        window.location='register-user-update.php';
        </script>";
    }else {
        echo "<script>alert('No se pudo eliminar el usuario');
        window.history.go(-1);
        </script>";
    }
                              
?>