<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Editar usuario"?>
<?php include_once '../includes/header.php'; ?>
  
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                   
                    <div class="col-lg-12  pt-5 pb-5">
                        <div class="p-5  pt-5 ">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Actualizar datos de usuario</h1>
                            </div>
                            <form class="row gy-2 gx-3 align-items-center" action="register-user-edit-procesar.php" method="post">
                            
                                    <?php 
                                        include_once '../../includes/config/conexion.php';
                                        $id = $_GET['id'];
                                        $sqlu = "SELECT * FROM `users` WHERE id='$id';";
                                        $resultadou = mysqli_query($conn,$sqlu);
                                    ?>
                                        
                                    <?php while($row =mysqli_fetch_assoc($resultadou)){ ?> 
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $row["id"]; ?>">
                                        <div class="col-auto">
                                            <label class="visually-hidden" for="autoSizingInput">Nombre de usuario</label>
                                            <input type="text" class="form-control" id="autoSizingInput" value="<?php echo $row["user_name"]; ?>" name="user_name">
                                        </div>
                                        <div class="col-auto">
                                            <label class="visually-hidden" for="autoSizingInputGroup">Contraseña</label>
                                            <div class="input-group">
                                            <input type="password" class="form-control" id="autoSizingInputGroup" value="<?php echo $row["password"]; ?>" name="password">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <label class="visually-hidden" for="autoSizingInputGroup">Nombre</label>
                                            <div class="input-group">
                                            <input type="text" class="form-control" id="autoSizingInputGroup" value="<?php echo $row["name"]; ?>" name="name">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <label class="visually-hidden" for="autoSizingSelect">Rol</label>
                                            <select class="form-control form-select form-select-lg mb-3" id="validationTooltip04" name="rolUsuario" required>
                                            <option selected disabled value="">Seleccionar...</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Usuario</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-auto mt-4">
                                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                            <a href="register-user-update.php" type="submit" class="btn btn-primary">Cancelar / Regresar</a>
                                        </div>
                                        
                                    <?php } mysqli_free_result($resultadou);?>
                                
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