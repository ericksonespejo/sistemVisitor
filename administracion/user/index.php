<html>
  <head>
    <title>Sistema de visitas Aquia</title>
    <script src="jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
  	<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  </head>
  <body>
    <div class="bg"></div>
    <div class="block">
      <a class="button showForm" href="#">Crear visita</a>
      <table id="table" class="tables">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Hora de ingreso</th>
            <th>Nombres y Apellidos</th>
            <th>Tipo de documento</th>
            <th>Motivo de visita</th>
            <th>Nombre del empleado público</th>
            <th>Cargo</th>
            <th>Oficina</th>
            <th>Hora de salida</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody class="listEmployees">
          <?php include_once 'employee.list.php' ?>
        </tbody>
      </table>
    </div>
    <div class="modalFrmEmployee"></div>
  </body>
  <script src="funcs.js"></script>
</html>
