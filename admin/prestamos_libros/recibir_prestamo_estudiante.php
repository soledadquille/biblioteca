<?php
require_once '../conexion.php';

$id=$_POST["id"];
$fecha1=$_POST["fecha1"];
$fecha2=$_POST["fecha2"];
$estudiante=$_POST["estudiante"];
$estado="0";

	$sql = mysql_query("insert into prestamo_libro (fecha_prestamo, fecha_entrega, id_libro, id_usuario_estudiante, estado) 
		values('$fecha1','$fecha2','$estudiante','$id', '$estado')");

			if($sql){ 
			    echo '<script> alert("Prestamo Exitoso.");</script>';
			    echo '<script> window.location="../prestar_libro.php"; </script>';

				
				}else {
					echo '<script> alert("Prestamo Exitoso.");</script>';
					echo '<script> window.location="../prestar_libro.php"; </script>';
					}
?>
