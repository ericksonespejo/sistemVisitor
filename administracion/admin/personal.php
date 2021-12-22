<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Añadir empleado público"?>
<?php include_once '../includes/header.php'; ?>
  
    <div class="container">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between bd-highlight mb-3">
                <div class="p-2 bd-highlight">Para ver los usuarios registrados y realizar cambios por favor dale click al siguiente botón</div>
                <div class="p-2 bd-highlight"><a href="personal-update.php" class="btn btn-primary">Editar / Eliminar personal</a> </div>
                </div>
            </div>
        </div>
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Añadir un nuevo empleado</h1>
                            </div>
                            <?php
                                // Datos
                                $token = 'apis-token-1.aTSI1U7KEuT-6bbbCguH-4Y8TI6KS73N';
                                $dni = $_POST['buscarDni'];

                                // Iniciar llamada a API
                                $curl = curl_init();

                                // Buscar dni
                                curl_setopt_array($curl, array(
                                CURLOPT_URL => 'https://api.apis.net.pe/v1/dni?numero=' . $dni,
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => '',
                                CURLOPT_MAXREDIRS => 2,
                                CURLOPT_TIMEOUT => 0,
                                CURLOPT_FOLLOWLOCATION => true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => 'GET',
                                CURLOPT_HTTPHEADER => array(
                                    'Referer: https://apis.net.pe/consulta-dni-api',
                                    'Authorization: Bearer ' . $token
                                ),
                                ));

                                $response = curl_exec($curl);
                                echo "<br>";
                                curl_close($curl);
                                // Datos listos para usar
                                $persona = json_decode($response, JSON_PRETTY_PRINT);
                                /*var_dump($persona);*/
                                header("Location: personal.php");

                                ?>
                            <form class="row g-3" novalidate action="" method="post">
                                    <div class="col-md-12 position-relative">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <label for="validationTooltip01" class="form-label">Nro de DNI</label>
                                                <input type="number" class="form-control" id="buscarDni" placeholder="Ingrese DNI" name="buscarDni" required>
                                                
                                            </div>
                                            <div class="col-md-4 pt-3">
                                            <input type="submit" value="Buscar persona" class="btn btn-primary">
                                            </div>
                                        
                                        </div>
                                        
                                    </div>
                            </form>
                            <form class="row g-3 needs-validation" novalidate action="personal-add.php" method="post">
                                <div class="col-md-12 position-relative">
                                    
                                            <label for="validationTooltip01" class="form-label">Nro de DNI del personal</label>
                                            <input type="text" class="form-control" id="validationTooltip01" placeholder="Nro de DNI" name="dni" value="<?php echo $persona['numeroDocumento'];?>" >
                                      
                                </div>
                                
                                <div class="col-md-12 position-relative">
                                    <label for="validationTooltip01" class="form-label">Nombres</label>
                                    <input type="text" class="form-control" id="validationTooltip01" placeholder="Nombres y Apellidos" name="nombres" value="<?php echo $persona['nombre'];?>" >
                                    
                                </div>
                                <div class="col-md-12 position-relative">
                                    <label for="validationTooltip01" class="form-label">Cargo</label>
                                    <?php include_once '../../includes/config/claseConeccion.php;' ?>
                                    <select name="cargo" id="cargo" class="form-control" required>
                                        <option selected>Selecciona un cargo</option>
                                            <?php include_once 'listCargo.php'; ?>
                                    </select>
                                    <?php ?>
                                    <div class="invalid-tooltip">
                                    Ingresa el cargo de la persona.
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button class="btn btn-primary" type="submit">Añadir empleado</button>
                                </div>
                                </form>
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
<?php include_once '../includes/footer.php'; ?>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>