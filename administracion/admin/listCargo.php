<?php
require_once '../../includes/config/claseConeccion.php';
$objDB = new DataBase;
$result = $objDB->Execute('SELECT * FROM cargo');
while($nombreCargo = $result->fetch_assoc()){
  ?>
    <option value="<?= $nombreCargo['nombre_cargo'] ?>"><?= $nombreCargo['nombre_cargo'] ?></option>
  <?php
}
?>