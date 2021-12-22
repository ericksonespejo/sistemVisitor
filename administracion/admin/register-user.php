<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Registrar usuario"?>
<?php include_once '../includes/header.php'; ?>
  
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7  pt-5 pb-5">
                            <div class="p-5  pt-5 pb-5">
                              <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear nuevo usuario</h1>
                            </div>
                            
                            <form class="row g-3 needs-validation" novalidate action="registrarUsuario.php" method="post">
                                <div class="col-md-4 position-relative">
                                    <label for="validationTooltip01" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="validationTooltip01" placeholder="Usuario" name="Usuario" required>
                                    <div class="valid-tooltip">
                                    Se ve bien!
                                    </div>
                                    <div class="invalid-tooltip">
                                    Ingresa el usuario.
                                    </div>
                                </div>
                                <div class="col-md-4 position-relative">
                                    <label for="validationTooltip02" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="validationTooltip01" placeholder="Nombre" name="Nombre" required>
                                    <div class="valid-tooltip">
                                    Se ve bien!
                                    </div>
                                    <div class="invalid-tooltip">
                                    Ingresa tu nombre.
                                    </div>
                                </div>
                                <div class="col-md-4 position-relative">
                                    <label for="validationTooltipUsername" class="form-label">Contraseña</label>
                                    <div class="input-group has-validation">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-key" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" id="validationTooltipUsername" placeholder="Contraseña" name="password" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Ingresa la contraseña.
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6 position-relative mt-5">
                                    <label for="validationTooltip04" class="form-label">Rol de usuario</label>
                                    <select class="form-control form-select form-select-lg mb-3" id="validationTooltip04" name="rolUsuario" required>
                                    <option selected disabled value="">Seleccionar...</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Usuario</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                    Selecciona un rol de usuario.
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button class="btn btn-primary" type="submit">Crear Usuario</button>
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