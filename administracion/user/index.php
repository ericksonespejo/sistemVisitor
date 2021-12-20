<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Bienvenido"?>
<?php include_once '../includes/header-user.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $titleSite," ",$_SESSION['name'] ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <!-- Content Row -->
    <divs class="row">

        <!-- Content Column -->
        <divs class="col-lg-12 mb-4">

            <!-- Project Card Example -->
            <divs class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Registro de visitas</h6> 
                          <h6><a href="#" class="btn btn-primary">Añadir visita</a></h6>
                    </div>
                </div>
                <div class="card-body">
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
                        <?php include ('../../includes/config/conexion.php');
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
            </divs>

           
            </divs>

        </divs>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once '../includes/footer.php' ?>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>