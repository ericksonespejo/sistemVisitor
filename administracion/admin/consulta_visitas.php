<?php include ('../../includes/config/conexion.php');
    $sql = "SELECT * FROM `visitante`;"; 
    $respuesta = mysqli_query($conn,$sql);
    //$visitas = array();

    while($row =mysqli_fetch_assoc($respuesta)){ 
        //$visitas['TodaVisita'][] = $row;
        $arr[]=$row;
    } 

    $lista=json_encode($arr);
    $conn->close();
?>