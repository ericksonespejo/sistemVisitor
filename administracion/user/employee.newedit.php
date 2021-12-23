<?php
require_once 'dbconnect/database.class.php';

$objDB = new DataBase;

$id = $_GET['id'];
if($id>0){
  $result = $objDB->Execute("SELECT * FROM visitante WHERE id=$id");
  $visitante = $result->fetch_assoc();
}
?>

  <form id="modalFrmEmployee" class="form">
    <input type="hidden" name="id" value="<?= $id ?>" />
    <label>
      Fecha:
      <input type="date" name="fecha" value="<?php if(isset($visitante)) echo $visitante['fecha'] ?>" required />
    </label>
    <label>
      Hora de ingreso:
      <input type="time" name="hora_ingreso" value="<?php if(isset($visitante)) echo $visitante['hora_ingreso'] ?>" />
    </label>
    <label>
      Nombre y apellido
      <input type="text" name="nombre_apellido" value="<?php if(isset($visitante)) echo $visitante['nombre_apellido'] ?>" />
    </label>
    <label>
      Documento
      <input type="number" name="documento" value="<?php if(isset($visitante)) echo $visitante['documento'] ?>" />
    </label>
    <label>
      motivo de visita;
      <input type="text" name="motivo_visita" value="<?php if(isset($visitante)) echo $visitante['motivo_visita'] ?>"/>
    </label>
    <label>
      Nombre del Empleado
      <input type="text" name="empleado_publico" value="<?php if(isset($visitante)) echo $visitante['empleado_publico'] ?>" />
    </label>
    <label>
      Cargo
      <input type="text" name="cargo" value="<?php if(isset($visitante)) echo $visitante['cargo'] ?>" />
    </label>
    <label>
      Oficina
      <input type="text" name="oficina" value="<?php if(isset($visitante)) echo $visitante['oficina'] ?>" />
    </label>
    <label>
      Hora de salida
      <input type="time" name="hora_salida" value="<?php if(isset($visitante)) echo $visitante['hora_salida'] ?>" />
    </label>
    <button class="button" type="submit">Guardar datos</button>
  </form>
  <a class="hideForm" href="#">Cerrar</a>
