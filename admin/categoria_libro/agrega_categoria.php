
<?php
include('../conexion.php');

$id = $_POST['id-prod'];
$proceso = $_POST['pro'];
$cate = $_POST['nombre'];

switch($proceso){
	case 'Registro': mysql_query("INSERT INTO categorias (nombre_categoria) VALUES('$cate')");
	break;

	case 'Edicion': mysql_query("UPDATE categorias SET nombre_categoria = '$cate' where id_categoria = '$id'");
	break;
   }
    $registro = mysql_query("SELECT * FROM categorias ORDER BY id_categoria ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="200">Categoria</th>
				<th width="50">Opciones</th>
            </tr>';
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['nombre_categoria'].'</td>
				<td> <a href="javascript:editarEmpleado('.$registro2['id_categoria'].');" class="glyphicon glyphicon-edit eliminar"     title="Editar"></a>
				 <a href="javascript:eliminarEmpleado('.$registro2['id_categoria'].');">
				 <img src="../images/delete.png" width="15" height="15" alt="delete" title="Eliminar" /></a>
				 </td>
				</tr>';
	}
   echo '</table>';
?>