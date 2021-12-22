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
                                <h1 class="h4 text-gray-900 mb-4">Añadir un nuevo cargo</h1>
                        </div>
                            <form class="row g-3 needs-validation" novalidate>
                              <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nombre del cargo</label>
                                <input type="text" class="form-control" id="validationCustom01" name="cargo" required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                              <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
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