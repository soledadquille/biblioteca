
<?php
include('../conexion.php');

$id = $_POST['id-prod'];
$proceso = $_POST['pro'];
$subcate = $_POST['nombre'];

switch($proceso){
	case 'Registro': mysql_query("INSERT INTO subcategorias (nombre_subcategoria) VALUES('$subcate')");
	break;

	case 'Edicion': mysql_query("UPDATE subcategorias SET nombre_subcategoria = '$subcate' where id_subcategoria = '$id'");
	break;
   }
    $registro = mysql_query("SELECT * FROM subcategorias ORDER BY id_subcategoria ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="200">Subcategoria</th>
				<th width="50">Opciones</th>
            </tr>';
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['nombre_subcategoria'].'</td>
				<td> <a href="javascript:editarEmpleado('.$registro2['id_subcategoria'].');" class="glyphicon glyphicon-edit eliminar"     title="Editar"></a>
				 <a href="javascript:eliminarEmpleado('.$registro2['id_subcategoria'].');">
				 <img src="../images/delete.png" width="15" height="15" alt="delete" title="Eliminar" /></a>
				 </td>
				</tr>';
	}
   echo '</table>';
?>