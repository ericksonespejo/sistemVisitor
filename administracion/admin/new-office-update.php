<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Actualizar / Editar las oficinas"?>
<?php include_once '../includes/header.php'; ?>
  
    <div class="container">

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>
    var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image  pt-5 pb-5"></div> -->
                    <div class="col-lg-12  pt-5 pb-5">
                        <div class="p-5  pt-5 pb-5">
                            <div class="text-center  pt-5 pb-5">
                            <div class="d-flex justify-content-between">
                            <h1 class="h4 text-gray-900 mb-4">Editar oficinas </h1><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Crear nueva oficina</button>
                            </div>
                                
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