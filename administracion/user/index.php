<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Bienvenido"?>
<?php include_once '../includes/header-user.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $titleSite," ",$_SESSION['name'] ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <!-- Content Row -->
    <divs class="row">

        <!-- Content Column -->
        <divs class="col-lg-12 mb-4">

            <!-- Project Card Example -->
            <divs class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary col-sm- 12 col-md-6">Registro de visitas</h6> 
                      <button type="button" class="btn btn-primary btn-lg btn-block col-sm- 12 col-md-6" data-toggle="modal" data-target="#exampleModal">
                        Registrar visita
                        </button>
                        <!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar visita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
            
    <form class="row g-3 needs-validation" novalidate>
      <div class="col-md-8">
        <label for="validationCustom01" class="form-label">Número de DNI</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="DNI del visitante" required>
     
      </div>
      <div class="col-4 pt-4">
        <button class="btn btn-primary" type="submit">Buscar persona</button>
      </div>
    </form>
    <div class="mt-5"></div>
    <div class="mb-4"></div>
<!-- Formulario para registrar las visitas -->
  <form class="row g-3 needs-validation" novalidate>
    <div class="col-md-6">
      <label for="validationCustom01" class="form-label">Nombre completo</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre completo del visitante" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom01" class="form-label">Número de documento</label>
      <input type="number" class="form-control" id="validationCustom01" placeholder="DNI del visitante" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mt-4">
      <label for="validationCustom02" class="form-label">Motivo</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Motivo de la visita" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6 mt-4">
      <label for="validationCustom02" class="form-label">Oficina</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Oficina a la que esta visitando" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mt-4">
      <label for="validationCustomUsername" class="form-label">Empleado</label>
      <div class="input-group"> 
        <input type="text" class="form-control" placeholder="Nombre del empleado municipal"  required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-6 mt-4">
      <label for="validationCustom03" class="form-label">Cargo</label>
      <select class="form-select form-control" id="validationCustom04" required>
        <option selected disabled value="">Selecciona</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-3 mt-4">
      <label for="validationCustomUsername" class="form-label">Hora de ingreso</label>
        <div class="input-group"> 
          <input type="time" class="form-control" placeholder="Hora de visita"  required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
    </div>

    <div class="col-md-3 mt-4">
      <label for="validationCustomUsername" class="form-label">Hora de salida</label>
        <div class="input-group"> 
          <input type="time" class="form-control" placeholder="Hora de salida"  required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
    </div>

    <div class="col-md-6 mt-">
      <label for="validationCustomUsername" class="form-label">Fecha de visita</label>
        <div class="input-group"> 
          <input type="date" class="form-control" placeholder="Fecha de visita"  required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
    </div>
    <div class="col-12 mt-4">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Acepto los terminos y condiciones
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    
  </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Registrar visita</button>
      </div>
    </div>
  </div>
</div>

                    </div>
                </div>
                <div class="card-body">
                <table id="visitas" class="table table-hover table-bordered display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Hora de ingreso</th>
                            <th>Nombre y apellidos</th>
                            <th>Tipo documento</th>
                            <th>Motivo de visita</th>
                            <th>Nombre del empleado público</th>
                            <th>Cargo</th>
                            <th>Oficina</th>
                            <th>Hora de salida</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Fecha</th>
                            <th>Hora de ingreso</th>
                            <th>Nombre y apellidos</th>
                            <th>Tipo documento</th>
                            <th>Motivo de visita</th>
                            <th>Nombre del empleado público</th>
                            <th>Cargo</th>
                            <th>Oficina</th>
                            <th>Hora de salida</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php include ('../../includes/config/conexion.php');
                        $sql = "SELECT * FROM `visitante`;"; 
                        $respuesta = mysqli_query($conn,$sql);
                        ?>
                        <?php while($row =mysqli_fetch_assoc($respuesta)){ ?> 
                        <tr>
                            <td><?php echo $row['fecha'] ?></td>
                            <td><?php echo $row['hora_ingreso'] ?></td>
                            <td><?php echo $row['nombre_apellido'] ?></td>
                            <td><?php echo $row['documento'] ?></td>
                            <td><?php echo $row['motivo_visita'] ?></td>
                            <td><?php echo $row['empleado_publico'] ?></td>
                            <td><?php echo $row['cargo'] ?></td>
                            <td><?php echo $row['oficina'] ?></td>
                            <td><?php echo $row['hora_salida'] ?></td>
                        </tr>
                        <?php } mysqli_free_result($resultadop);?>
                    </tbody>
                </table>
                    
                </div>
            </divs>

           
            </divs>

        </divs>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once '../includes/footer-user.php' ?>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>