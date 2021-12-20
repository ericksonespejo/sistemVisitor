<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Actualizar usuarios"?>
<?php include_once '../includes/header.php'; ?>
  
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <divs class="row">
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Usuarios registrados</h1>
                            </div>
                            <table class="table table-hover table-hover table-inverse table-responsive">
                            <thead class="thead-inverse|thead-default">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Usuario</th>
                                    <th>Rol</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include_once '../../includes/config/conexion.php';
                                        $sqlu = "SELECT * FROM `users` WHERE 1;";
                                        $resultadou = mysqli_query($conn,$sqlu);
                                    ?>
                                    
                                    <?php while($row =mysqli_fetch_assoc($resultadou)){ ?> 
                                        <tr>
                                            <td scope="row"><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["user_name"]; ?></td>
                                            <td><?php 
                                            $_SESSION['rol'] = $row['rol'];
                                            if($_SESSION['rol'] ==2){
                                                echo "usuario";
                                            }else {
                                                echo "Administrador";
                                            } ?></td>
                                            <td><a href="register-user-edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning" type="submit">Editar</a></td>
                                            <td><a href="delete-user.php?id=<?php echo $row['id'];?>" class="btn btn-danger" type="submit">Eliminar</a></td>
                                        </tr>
                                    <?php } mysqli_free_result($resultadou);?>
                                </tbody>
                        </table>
                                
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear nuevo usuario</h1>
                            </div>
                                <div class="d-grid gap-2 mt-5">
                                    <a href="register-user.php" class="btn btn-primary mt-5">Crear nuevo usuario</a>
                                </div>
                            
                         </div>
                    </div>
                </divs>
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