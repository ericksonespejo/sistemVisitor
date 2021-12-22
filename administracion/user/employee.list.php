<?php
require_once 'dbconnect/database.class.php';

$objDB = new DataBase;

$result = $objDB->Execute('SELECT * FROM visitante');

while($employee = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?= $employee['fecha'] ?></td>
    <td><?= $employee['hora_ingreso'] ?></td>
    <td><?= $employee['nombre_apellido'] ?></td>
    <td><?= $employee['documento'] ?></td>
    <td><?= $employee['motivo_visita'] ?></td>
    <td><?= $employee['empleado_publico'] ?></td>
    <td><?= $employee['cargo'] ?></td>
    <td><?= $employee['oficina'] ?></td>
    <td><?= $employee['hora_salida'] ?></td>
    <td>
      <a class="edit button" data-id="<?= $employee['id'] ?>" href="#">Editar</a>
      <!-- <a class="delete" data-id="<?= $employee['id'] ?>" href="#">Eliminar</a> -->
    </td>
  </tr>
  <?php
}
?>
