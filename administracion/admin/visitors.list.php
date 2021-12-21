<?php
require_once 'claseConeccion.php';
$objDB = new DataBase;
$result = $objDB->Execute('SELECT * FROM visitante');
while($visitante = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?= $visitante['fecha'] ?></td>
    <td><?= $visitante['hora_ingreso'] ?></td>
    <td><?= $visitante['nombre_apellido'] ?></td>
    <td><?= $visitante['documento'] ?></td>
    <td><?= $visitante['motivo_visita'] ?></td>
    <td><?= $visitante['empleado_publico'] ?></td>
    <td><?= $visitante['cargo'] ?></td>
    <td><?= $visitante['oficina'] ?></td>
    <td><?= $visitante['hora_salida'] ?></td>
  </tr>
  <?php
}
?>