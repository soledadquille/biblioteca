<?php
include('../conexion.php');
$id = $_POST['id'];
$valores = mysql_query("SELECT * FROM administrador_biblioteca WHERE id_bibliotecario = '$id'");
$valores2 = mysql_fetch_array($valores);

$datos = array(
				0 => $valores2['user'], 
				1 => $valores2['pass'], 
				); 
echo json_encode($datos);
?>