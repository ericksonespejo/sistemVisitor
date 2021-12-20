<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Editar las oficinas"?>
<?php include_once '../includes/header.php'; ?>
  
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image  pt-5 pb-5"></div> -->
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <div class="position-relative p-5"> <h1 class="h4 text-gray-900 mb-4 position-absolute top-0 start-0">Editar oficinas</h1><a class="btn btn-primary position-absolute bottom-0 end-0" href="new-office.php">
                                    
                                        Crear nueva oficina <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden"></span></span>
                                        </a></div>
                            </div>
                            
                                        
                            <table class="table table-hover table-hover table-inverse table-responsive">
                                                
                                                <tbody>
                                                    <thead>
                                                        <tr>
                                                            <td class="text-uppercase">Oficinas registradas</td>
                                                        <th>Editar</th>
                                                        <th>Eliminar</th>
                        
                                                        </tr>
                                                    </thead>
                                                      <?php 
                                                      include_once '../../includes/config/conexion.php';
                                                      $sqlp = "SELECT * FROM `oficina`;";
                                                       $resultadop = mysqli_query($conn,$sqlp);
                                                        ?>
                                                      <?php while($row =mysqli_fetch_assoc($resultadop)){ ?> 
                                                        <tr>
                                                             <td><?php echo $row["nombre_oficina"]; ?></td>
                                                             <td><a href="new-office-update.php?id=<?php echo $row['id'];?>" class="btn btn-warning" type="submit">Editar</a></td>
                                                             <td><a href="new-office-delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" type="submit">Eliminar</a></td>
                                                         </tr>
                                                   <?php } mysqli_free_result($resultadop);?>
                                               </tbody>
                                         </table>
                                        
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