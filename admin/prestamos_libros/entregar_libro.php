<?php include "../conexion.php" ?>
<?php

$peticion = "UPDATE prestamo_libro SET estado=1 WHERE id_prestamo = '".$_GET['id']."'";
$resultado = mysql_query($peticion);

$peticion2 = "UPDATE libros SET disponible = 'si' WHERE id_libro = '".$_GET['id']."'";
$resultado2 = mysql_query($peticion2);

  echo '<script> alert("Se ha devuelto el libro.");</script>';
    echo '<script> window.location="../Lista_prestamos_libros.php"; </script>';
?>
