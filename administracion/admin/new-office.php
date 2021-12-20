<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Crear / añadir oficina"?>
<?php include_once '../includes/header.php'; ?>
  
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image  pt-5 pb-5"></div>
                    <div class="col-lg-7  pt-5 pb-5">
                        <div class="p-5  pt-5 pb-5">
                            <div class="text-center  pt-5 pb-5">
                                <h1 class="h4 text-gray-900 mb-4">Crear oficina nueva <a href="new-office-edit.php">Editar / Eliminar Oficina</a></h1>
                            </div>
                            
                            <form class="row g-3 needs-validation" novalidate action="newOffice.php" method="post">
                                <div class="col-md-12 position-relative">
                                    <label for="validationTooltip01" class="form-label">Nombre de oficina</label>
                                    <input type="text" class="form-control" id="validationTooltip01" placeholder="Nombre de la oficina" name="new_office" required>
                                    <div class="valid-tooltip">
                                    Se ve bien!
                                    </div>
                                    <div class="invalid-tooltip">
                                    Ingresa el nombre de la oficina.
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button class="btn btn-primary" type="submit">Crear Oficina</button>
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