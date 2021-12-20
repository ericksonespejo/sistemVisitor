<?php 
    include_once '../../includes/config/conexion.php';
    $id= $_POST['id'];
    $dni = $_POST['dni'];
    $nombres =$_POST['nombres'];
    $cargo = $_POST['cargo'];
    $sql = "UPDATE personal SET dni = '$dni', nombres = '$nombres', cargo = '$cargo' WHERE id_personal = '$id';";
    $resultados = mysqli_query($conn,$sql);
    if ($resultados) {
        echo "<script>alert('Se ha actualizado el trabajador municipal con éxito');
        window.location='personal-update.php';
        </script>";
    }else {
        echo "<script>alert('No se pudo actualizar el trabajador municipal');
        window.history.go(-1);
        </script>";
    }
                              
?>