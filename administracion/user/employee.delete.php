<?php
header('Content-type: application/json; charset=utf-8');

require_once 'dbconnect/database.class.php';

$objDB = new DataBase;

$id = $_GET['id'];

$result = $objDB->Execute('DELETE FROM visitante WHERE id='.$id);
if($result){
	$arr = ['resultado' => true, 'mensaje' => 'Item delete' ];
}else{
	$arr = ['resultado' => false, 'mensaje' => $r['error']];
}
die(json_encode($arr));
?>
