<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Dashboard"?>
<?php include_once '../includes/header.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $titleSite?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Personal</h6>
                </div>
                <div class="card-body">
                    <table class="table table-hover  table-responsive">
                        <thead class="thead-inverse|thead-default">
                            <tr>
                                <th>DNI</th>
                                <th>NOMBRE</th>
                                <th>CARGO</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php include_once '../../includes/config/conexion.php';
                                    $sql = "SELECT * FROM `personal` WHERE 1;";
                                    $resultados = mysqli_query($conn,$sql);
                                ?>
                                
                                <?php while($row =mysqli_fetch_assoc($resultados)){ ?> 
                                    <tr>
                                        <td scope="row"><?php echo $row["dni"]; ?></td>
                                        <td><?php echo $row["nombres"]; ?></td>
                                        <td><?php echo $row["cargo"]; ?></td>
                                    </tr>
                                <?php } mysqli_free_result($resultados);?>
                            </tbody>
                    </table>
                    
                </div>
            </div>

            <!-- Color System -->
            <div class="row">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
                    </div>
                        <div class="card-body">
                            <table class="table table-hover table-hover table-inverse table-responsive">
                            <thead class="thead-inverse|thead-default">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Usuario</th>
                                    <th>Rol</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $sqlu = "SELECT * FROM `users` WHERE 1;";
                                        $resultadou = mysqli_query($conn,$sqlu);
                                    ?>
                                    
                                    <?php while($row =mysqli_fetch_assoc($resultadou)){ ?> 
                                        <tr>
                                            <td scope="row"><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["user_name"]; ?></td>
                                            <td><?php 
                                            $_SESSION['rol'] = $row['rol'];
                                            if($_SESSION['rol'] ==2){
                                                echo "usuario";
                                            }else {
                                                echo "Administrador";
                                            } ?></td>
                                        </tr>
                                    <?php } mysqli_free_result($resultadou);?>
                                </tbody>
                        </table>
                        </div>
                    </div>
            </div>

        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Oficinas</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
<!--                         <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="../assets/img/undraw_posting_photo.svg" alt="...">
 -->                    </div>
                    <table class="table table-hover table-hover table-inverse table-responsive">
                                            
                                                <tbody>
                                                    <?php $sqlp = "SELECT * FROM `oficina` WHERE 1;";;
                                                        $resultadop = mysqli_query($conn,$sqlp);
                                                    ?>
                                                    
                                                    <?php while($row =mysqli_fetch_assoc($resultadop)){ ?> 
                                                        <tr>
                                                            <td><?php echo $row["nombre_oficina"]; ?></td>
                                                        </tr>
                                                    <?php } mysqli_free_result($resultadop);?>
                                                </tbody>
                                        </table>
                    
                </div>
            </div>

        </div>
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