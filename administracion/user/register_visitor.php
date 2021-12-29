<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Bienvenido"?>
<?php include_once '../includes/header-user.php'; ?>
  
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7  pt-5 pb-5">
                        <div class="p-5  pt-5 pb-5">
                           <!--  <div class="text-center hidden">
                                <h1 class="h4 text-gray-900 mb-4"><a href="index.php" class="btn btn-primary btn-lg btn-block col-sm- 12 col-md-6">Ver visitas</a></h1>
                            </div> -->
                            <form action="registerVisitor.php" method="post">
                            <div class="row g-3">
                              <div class="col">
                              <label for="inputEmail4" class="form-label">Fecha</label>
                                <input type="date" name="fecha" class="form-control" value="<?= date('Y-m-d')?>">
                              </div>
                              <div class="col">
                              <label for="inputEmail4" class="form-label">Hora de entrada</label>
                                <input type="text" name="hora_ingreso" class="form-control" value="<?php
                                date_default_timezone_set("America/New_York");
                                echo date("h:i:s");
                                ?>">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <label for="inputEmail4" class="form-label">Nombre y apellido</label>
                              <input type="text" name="nombre_apellido" class="form-control">
                            </div>
                            <div class="row g-3">
                              <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Número de DNI</label>
                                <input type="number" name="documento" class="form-control">
                              </div>
                              <div class="col-6">
                                <label for="inputAddress" class="form-label">Motivo de visita</label>
                                <input type="text" name="motivo_visita" class="form-control" id="inputAddress" >
                              </div>
                            </div>
                            
                            <div class="col-12">
                              <label for="inputAddress2" class="form-label">Nombre del empleado público</label>
                              <select class="form-select form-control" name="empleado_publico">
                                <option selected>Selecciona el nombre del empleado</option>
                                <option value="1">ROSA IMELDA RODRIGUEZ RODRIGUEZ</option>
                                <option value="2">DANIEL JUAN GIRALDO RAMIREZ</option>
                                <option value="3">EDWIN HEMERGILDO RIVERA VALDERRAMA </option>
                                <option value="4">SANTOS EMILIANO ROBLES REYES</option>
                                <option value="5">ANGEL ABIMAEL CALLUPE OCROSPOMA</option>
                                <option value="6">NOEL RICHAR  SANCHEZ DAMIAN</option>
                                <option value="7">DANIEL CONSTANTINO RAMIREZ SOLIS</option>
                                <option value="8">YOMAR KENY BRAVO OCAÑA</option>
                                <option value="9">ELIZABETH LIDIA CRISTOBAL ORTIZ</option>
                                <option value="10">GLIDEN JESUS CAMPOS CHAVEZ</option>
                                <option value="11">DORIS YULIZA ALDAVE GAMARRA</option>
                                <option value="12">LENIN ZOSIMO DAMIAN TUPIÑO</option>
                                <option value="13">OFELIA DAMIAN LAZO</option>
                                <option value="14">IVETH YESICA PACHA BARRETO</option>
                                <option value="15">TIOFILO ALEXANDER MALLQUI REYNALDO</option>
                                <option value="16">ALFREDO DIONICIO RIMAC SIGUEÑAS</option>
                              </select>
                            </div>
                            <div class="col-12">
                              <label for="inputAddress2" class="form-label">Cargo</label>
                              <select class="form-select form-control" name="cargo">
                                <option selected>Selecciona el cargo del empleado</option>
                                <option value="Contador Externo">Contador Externo</option>
                                <option value="Abogado Externo">Abogado Externo</option>
                                <option value="Jefe de Registro Civil">Jefe de Registro Civil</option>
                                <option value="Responsable de Demuna-Omaped-CIAM">Responsable de Demuna-Omaped-CIAM</option>
                                <option value="Responsable de Imagen Institucional">Responsable de Imagen Institucional</option>
                                <option value="Responsable de Almacen y Apoyo en Seguridad Ciudadana">Responsable de Almacen y Apoyo en Seguridad Ciudadana</option>
                                <option value="Chofer">Chofer</option>
                                <option value="Secretaria">Secretaria</option>
                                <option value="Apoyo en Logistica">Apoyo en Logistica</option>
                                <option value="SecretarioaTesoreria">SecretarioaTesoreria</option>
                                <option value="Guardian">Guardian</option>
                                <option value="Limpieza">Limpieza</option>
                                <option value="Archivo Central">Archivo Central</option>
                                <option value="Limpieza puesto de salud">Limpieza puesto de salud</option>
                                <option value="Enfermero puesto de salud">Enfermero puesto de salud</option>
                              </select>
                            </div>
                            <div class="col-12">
                              <label for="inputAddress2" class="form-label">Oficina</label>
                              <select class="form-select form-control" name="oficina">
                                <option selected>Selecciona una oficina</option>
                                <option value="Contador">Contador</option>
                                <option value="Abogado">Abogado</option>
                                <option value="Registro Civil">Registro Civil</option>
                                <option value="Demuna-Omaped-CIAM">Demuna-Omaped-CIAM</option>
                                <option value="Imagen Institucional">Imagen Institucional</option>
                                <option value="Almacen y Apoyo en Seguridad Ciudadana">Almacen y Apoyo en Seguridad Ciudadana</option>
                                <option value="Chofer">Chofer</option>
                                <option value="Secretaria">Secretaria</option>
                                <option value="Logistica">Logistica</option>
                                <option value="Tesoreria">Tesoreria</option>
                                <option value="Archivo Central">Archivo Central</option>
                                <option value="Gerencia">Gerencia</option>
                                <option value="Alcaldia">Alcaldia</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label class="form-label">Hora de salida</label>
                              <input type="text" name="hora_salida" class="form-control" value="<?php
                                date_default_timezone_set("America/New_York");
                                echo date("h:i:s");
                                ?>">
                            
                            </div>
                              <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary">Registrar visita</button>
                              </div>
                              
                            
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
                })
            })()
    </script>
<?php include_once '../includes/footer-user.php' ?>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>