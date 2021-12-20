<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Actualizar datos de usuario"?>
<?php include_once '../includes/header.php'; ?>
  
    <div class="container">
    <div class="card">
        <div class="card-body">
         <p>Agregar más personal <a href="personal.php" class="btn btn-primary">Ir a añadir un nuevo personal</a></p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
                <div class="row">
                    <table class="table table-hover table-inverse table-responsive">
                        <thead class="thead-inverse|thead-default">
                            <tr>
                                <th>DNI</th>
                                <th>Nombres</th>
                                <th>Cargo</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php include_once '../../includes/config/conexion.php';
                                        $sql = "SELECT * FROM `personal`;";
                                        $resultados = mysqli_query($conn,$sql);
                                    ?>
                                    
                                    <?php while($row =mysqli_fetch_assoc($resultados)){ ?> 
                                        <tr>
                                            <td scope="row"><?php echo $row["dni"]; ?></td>
                                            <td><?php echo $row["nombres"]; ?></td>
                                            <td><?php echo $row["cargo"]; ?></td>
                                            <td><a href="personal-edit.php?id=<?php echo $row['id_personal'];?>" class="btn btn-warning" type="submit">Editar</a></td>
                                            <td><a href="personal-delete.php?id=<?php echo $row['id_personal'];?>" class="btn btn-danger" onclick="confirmacion()" type="submit">Eliminar</a></td>
                                        </tr>
                                    <?php } mysqli_free_result($resultados);?>
                            </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmacion(e) {
            if (confirm("¿Estas seguro de queres eliminar este personal?")) {
                return true
            }else{
                e.preventDefault();
            }]
        }
        let deleteItem = document.querySelectorAll(".btn .btn-danger")
        for (let index = 0; index < deleteItem.length; index++) {
            deleteItem[i].addEventListener('click', confirmacion);
            
        }
    </script>
<?php include_once '../includes/footer.php'; ?>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>