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
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        <span class="text-dark">Oficinas más visitadas</span>
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        <span class="text-dark">Visitantes</span>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myBarChart" width="100%" height="40"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <span class="text-dark">Registro de visitas</span>
                            </div>
                            <div class="card-body">
                                <table id="regVisitas" class="table table-hover table-bordered display nowrap" width="100%">
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
                                     <?php include_once 'visitors.list.php' ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include_once '../includes/footer.php' ?>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>