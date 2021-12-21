<?php $title="Administración del sistemas de visitas";?>
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Dashboard"?>
<?php include_once '../includes/header.php'; ?>

<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Registro de visitas
                            </div>
                            <div class="card-body">
                                <table id="visitas" class="table table-hover table-bordered display nowrap">
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
                                    <tbody id="tbody">
                                     <?php include_once 'visitors.list.php' ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <script type="text/javascript">
                    $.ajax({
                        type: 'POST',
                        url: 'consulta_visitas.php',
                        data:{
                        },
                        success: function (data) {
                            //console.log(data);
                            var a = data.split(' ');
                            //console.log(a);
                            var trStr = '';// tabla de costura dinámica
                            for (var i = 0; i < a.length-1; i++) {
                                trStr += '<tr>';
                                trStr += '<td>' + JSON.parse(a[i]).fecha + '</td>';
                                trStr += '<td>' + JSON.parse(a[i]).hora_ingreso + '</td>';
                                trStr += '<td>' + JSON.parse(a[i]).nombre_apellido + '</td>';
                                trStr += '<td>' + JSON.parse(a[i]).documento + '</td>';
                                trStr += '<td>' + JSON.parse(a[i]).motivo_visita + '</td>';
                                trStr += '<td>' + JSON.parse(a[i]).empleado_publico + '</td>';
                                trStr += '<td>' + JSON.parse(a[i]).cargo + '</td>';
                                trStr += '<td>' + JSON.parse(a[i]).oficina + '</td>';
                                trStr += '<td>' + JSON.parse(a[i]).hora_salida + '</td>';
                                trStr += '</tr>';  
                            } 
                            $("#tbody").html(trStr);
                        }
                    });
                </script>
<?php include_once '../includes/footer.php' ?>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>