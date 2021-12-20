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
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nombre completo</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre completo del visitante" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom01" class="form-label">Número de documento</label>
      <input type="number" class="form-control" id="validationCustom01" placeholder="DNI del visitante" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-5">
      <label for="validationCustom02" class="form-label">Motivo</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Motivo de la visita" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mt-4">
      <label for="validationCustom02" class="form-label">Oficina</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Oficina a la que esta visitando" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mt-4">
      <label for="validationCustomUsername" class="form-label">Empleado</label>
      <div class="input-group"> 
        <input type="text" class="form-control" placeholder="Nombre del empleado municipal"  required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-4">
      <label for="validationCustom03" class="form-label">Cargo</label>
      <select class="form-select form-control" id="validationCustom04" required>
        <option selected disabled value="">Selecciona</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-3 mt-4">
      <label for="validationCustomUsername" class="form-label">Hora de ingreso</label>
        <div class="input-group"> 
          <input type="text" class="form-control" placeholder="Hora de visita"  required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
    </div>

    <div class="col-md-3 mt-4">
      <label for="validationCustomUsername" class="form-label">Hora de salida</label>
        <div class="input-group"> 
          <input type="text" class="form-control" placeholder="Hora de salida"  required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
    </div>

    <div class="col-md-3 mt-4">
      <label for="validationCustomUsername" class="form-label">Fecha de visita</label>
        <div class="input-group"> 
          <input type="text" class="form-control" placeholder="Fecha de visita"  required>
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
    <div class="col-12 mt-4">
    <button type="button" class="btn btn-primary btn-lg btn-block">Registrar visita</button>
    </div>
    
  </form>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once '../includes/footer.php' ?>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>