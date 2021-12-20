<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Actualizar / Editar las oficinas"?>
<?php include_once '../includes/header.php'; ?>
  
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image  pt-5 pb-5"></div> -->
                    <div class="col-lg-12  pt-5 pb-5">
                        <div class="p-5  pt-5 pb-5">
                            <div class="text-center  pt-5 pb-5">
                                <h1 class="h4 text-gray-900 mb-4">Editar oficinas <a href="new-office.php" >Crear nueva oficina</a></h1>
                            </div>
                                <form action="new-office-procesar.php" method="post">
                                 <?php 
                                 include_once '../../includes/config/conexion.php';
                                 $id = $_GET['id'];
                                    $sqlp = "SELECT * FROM `oficina` WHERE `id`='$id';";
                                    $resultadop = mysqli_query($conn,$sqlp);
                                ?>
                                <?php while($row =mysqli_fetch_assoc($resultadop)){ ?> 
                                    <div class="input-group flex-nowrap">
                                        
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $row["id"]; ?>">
                                    </div>
                                    <div class="input-group flex-nowrap">

                                        <input type="text" class="form-control" name="nombre_oficina" value="<?php echo $row["nombre_oficina"]; ?>">
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                    <button class="btn btn-outline-primary" type="submit">Guardar cambios</button>
                                    </div>
                                    <?php } mysqli_free_result($resultadop);?>
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