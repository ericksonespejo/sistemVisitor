<?php
header('Content-type: application/json; charset=utf-8');

require_once 'dbconnect/database.class.php';

$objDB = new DataBase;

$id = $_POST['id'];

$employee_data = [
	'fecha' => $_POST['fecha'],
	'hora_ingreso' => $_POST['hora_ingreso'],
	'nombre_apellido' =>  $_POST['nombre_apellido'],
	'documento' => $_POST['documento'],
	'motivo_visita' => $_POST['motivo_visita'],
	'empleado_publico' => $_POST['empleado_publico'],
	'cargo' => $_POST['cargo'],
	'oficina' => $_POST['oficina'],
	'hora_salida' => $_POST['hora_salida']
];

if($id==0){ // New
	$r = $objDB->Insert('visitante', $employee_data);
	if($r['result']){
		$arr = ['resultado' => true, 'mensaje' => 'Employee added', 'id' => $r['insert_id'] ];
	}else{
		$arr = ['resultado' => false, 'mensaje' => $r['error']];
	}
}else{ // Update
	$r = $objDB->Update('visitante', $employee_data, ["id" => $id]);
	if($r['result']){
		$arr = ['resultado' => true, 'mensaje' => 'Updated employee' ];
	}else{
		$arr = ['resultado' => false, 'mensaje' => $r['error']];
	}
}
die(json_encode($arr));
