<?php include "../conexion.php" ?>
<?php
$peticion = ("UPDATE libros SET disponible = 'si' WHERE id_libro = '".$_GET['id']."'");
$resultado = mysql_query($peticion);
if ($resultado ==true) {
	    echo '<script> alert("Se ha devuelto el libro.");</script>';
    echo '<script> window.location="../prestar_libro.php"; </script>';
}
  else {
  	 echo '<script> alert("Error al devolver el libro.");</script>';
  }
?>


