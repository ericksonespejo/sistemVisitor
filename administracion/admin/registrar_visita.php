<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Registrar visita"?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registrar nueva visita</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include_once '../../includes/cabeceras/navegacion.php'; ?>
        <div id="layoutSidenav">
            <?php include_once '../../includes/cabeceras/sidebarnav.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registrar nueva visita</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Registrar Visitas</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                 Si tienes dudas por favor llamar al <b><i>921 096 086</i></b> o escribenos un correos a <small style="text-decoration: underline wavy #b9b7b7  ; color:#b9b7b7">soporte@bussineswebsite.com</small>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Registrar Visita
                            </div>
                            <div class="card-body">
                                <form class="row g-3 needs-validation" novalidate method="post">
                                    <div class="col-md-2">
                                        <label for="dni" class="form-label">DNI:</label>
                                        <input type="number" class="form-control" id="dni" value="dni" required>
                                        <div class="valid-feedback">
                                        Se ve bien!
                                        </div>
                                    </div>
                                    <div class="col-md-2"><br>
                                    <button type="button" class="btn btn-outline-primary mt-2 " data-bs-toggle="button" autocomplete="off">Buscar persona</button>
                                    </div>
                                    <div class="col-md-8">
                                      <label for="validationCustomUsername" class="form-label">Visitante</label>
                                      <input type="text" class="form-control" id="nombre" placeholder="Nombre completo" required>
                                    </div>
                                  <div class="col-md-3">
                                    <label for="tipo_persona" class="form-label">Tipo de persona</label>
                                    <select class="form-select" id="validationCustom04" required>
                                      <option selected disabled value="">Seleccionar...</option>
                                      <option>Persona Natural</option>
                                      <option>Empresa</option>
                                    </select>
                                    <div class="invalid-feedback">
                                      Parece bien.
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <label for="motivo" class="form-label">Motivo</label>
                                    <input class="form-control" id="motivo" placeholder="Escribe el motivo de la visita" required>
                                    <div class="invalid-feedback">
                                      Parece bien.
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="oficina" class="form-label">Oficina</label>
                                    <select class="form-select" name="oficina" id="oficinas">
                                      <option selected disabled value="">Seleccionar...</option>
                                      <option value="ALCALDIA">ALCALDIA</option>
                                      <option value="GERENCIA MUNICIPAL">GERENCIA MUNICIPAL</option>
                                      <option value="OFICINA DE PLANIFICACIÓN Y PRESUPUESTO">OFICINA DE PLANIFICACIÓN Y PRESUPUESTO</option>
                                      <option value="OFICINA DE ASESORIA JURIDICA">OFICINA DE ASESORIA JURIDICA</option>
                                      <option value="OFICINA DE ADMINISTRACIÓN Y FINANZAS">OFICINA DE ADMINISTRACIÓN Y FINANZAS</option>
                                      <option value="UNIDAD DE RECURSOS HUMANOS">UNIDAD DE RECURSOS HUMANOS</option>
                                      <option value="UNIDAD DE TESORERIA">UNIDAD DE TESORERIA</option>
                                      <option value="OFICINA DE REGISTRO CIVIL">OFICINA DE REGISTRO CIVIL</option>
                                      <option value="SECRETARIA GENERAL E IMAGEN INSTITUACIONAL">SECRETARIA GENERAL E IMAGEN INSTITUACIONAL</option>
                                      <option value="UNIDAD DE OBRAS Y CATASTRO">UNIDAD DE OBRAS Y CATASTRO</option>
                                      <option value="SUB GERENCIA DE OBRAS, DESARROLLO URBANO Y RURAL">SUB GERENCIA DE OBRAS, DESARROLLO URBANO Y RURAL</option>
                                      <option value="UNIDAD DE GESTIÓN DE RIESGOS Y DESASTRES">UNIDAD DE GESTIÓN DE RIESGOS Y DESASTRES</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="empleado_publico" class="form-label">Empleado Publico</label>
                                    <input type="text" class="form-control" id="empleado_publico" >
                                  </div>
                                  <div class="col-md-2">
                                    <label for="oficina" class="form-label">Entrada</label>
                                    <input type="time" class="form-control" value="hora de entrada">
                                  </div>
                                  <div class="col-md-2">
                                    <label for="oficina" class="form-label">Salida</label>
                                    <input type="time" class="form-control" value="hora de entrada">
                                  </div>
                                  <div class="col-md-2">
                                    <label for="oficina" class="form-label">Fecha</label>
                                    <input type="date" class="form-control" value="hora de entrada">
                                  </div>
                                  <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Guardar Visita</button>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <?php
                include_once '../../includes/cabeceras/footer.php';
                ?>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>