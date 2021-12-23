<?php include ('includes/cabeceras/header.php');?>
<div class="container mt-5">
    <div class="card"></div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                <table id="visitas" class="table table-hover table-bordered display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Hora de ingreso</th>
                            <th>Nombre y apellidos</th>
                            <th>Tipo documento</th>
                            <th>Motivo de visita</th>
                            <th>Nombre del empleado público</th>
                            <th>Cargo</th>
                            <th>Oficina</th>
                            <th>Hora de salida</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Fecha</th>
                            <th>Hora de ingreso</th>
                            <th>Nombre y apellidos</th>
                            <th>Tipo documento</th>
                            <th>Motivo de visita</th>
                            <th>Nombre del empleado público</th>
                            <th>Cargo</th>
                            <th>Oficina</th>
                            <th>Hora de salida</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php include ('includes/config/conexion.php');
                        $sql = "SELECT * FROM `visitante`;"; 
                        $respuesta = mysqli_query($conn,$sql);
                        ?>
                        <?php while($row =mysqli_fetch_assoc($respuesta)){ ?> 
                        <tr>
                            <td><?php echo $row['fecha'] ?></td>
                            <td><?php echo $row['hora_ingreso'] ?></td>
                            <td><?php echo $row['nombre_apellido'] ?></td>
                            <td><?php echo $row['documento'] ?></td>
                            <td><?php echo $row['motivo_visita'] ?></td>
                            <td><?php echo $row['empleado_publico'] ?></td>
                            <td><?php echo $row['cargo'] ?></td>
                            <td><?php echo $row['oficina'] ?></td>
                            <td><?php echo $row['hora_salida'] ?></td>
                        </tr>
                        <?php } mysqli_free_result($resultadop);?>
                    </tbody>
                </table>
                
                </div>
             </div>
        </div>
    </div>
</div>
<?php include ('includes/cabeceras/footer.php');?>

