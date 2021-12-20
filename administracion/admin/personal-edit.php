<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Editar personal"?>
<?php include_once '../includes/header.php'; ?>
  
    <div class="container">
        <div class="card">
            <div class="card-body">
            <p>Modificar o eliminar personal <a href="personal-update.php" class="btn btn-primary">Modificar o eliminar personal</a></p>
            </div>
        </div>
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image pt-5 pb-5"></div>
                    <div class="col-lg-7 pt-5 pb-5">
                        <div class="p-5">
                            <div class="text-center">
                                
                            </div>
                                <?php include_once '../../includes/config/conexion.php';
                                    $id= $_GET['id'];
                                        $sql = "SELECT * FROM `personal` WHERE `id_personal`=$id;";
                                        $resultados = mysqli_query($conn,$sql);
                                    ?>
                                    <form  class="table" action="procesar-update-personal.php" method="post">
                                        <?php while($row =mysqli_fetch_assoc($resultados)){ ?> 
                                            <div class="input-group flex-nowrap mb-3">
                                                <input type="hidden" name="id" class="form-control" value="<?php echo $row['id_personal'];?>">
                                            </div>
                                            <div class="input-group flex-nowrap mb-3">
                                                <span class="input-group-text" id="addon-wrapping">DNI</span>
                                                <input type="text" class="form-control" value="<?php echo $row["dni"]; ?>" name="dni">
                                            </div>
                                            <div class="input-group flex-nowrap mb-3">
                                                <span class="input-group-text" id="addon-wrapping">Nombres</span>
                                                <input type="text" class="form-control" value="<?php echo $row["nombres"]; ?>" name="nombres">
                                            </div>
                                            <div class="input-group flex-nowrap mb-3">
                                                <span class="input-group-text" id="addon-wrapping">Cargo</span>
                                                <input type="text" class="form-control" value="<?php echo $row["cargo"]; ?>" name="cargo"></td>
                                            </div>
                                            <div class="input-group">
                                                <button class="btn btn-success" type="submit">Actualizar</button>
                                                </div>
                                    </form>
                                    <?php } mysqli_free_result($resultados);?>
                            <hr>
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