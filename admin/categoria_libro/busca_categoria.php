<?php
include('../conexion.php');
$dato = $_POST['dato'];

$registro = mysql_query("SELECT * FROM categorias WHERE nombre_categoria LIKE '%$dato%' ORDER BY id_categoria ASC");
echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                <th width="200">Categoria</th>
				<th width="50">Opciones</th>
            </tr>';
if(mysql_num_rows($registro)>0){
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['nombre_categoria'].'</td>
				<td> <a href="javascript:editarEmpleado('.$registro2['id_categoria'].');" class="glyphicon glyphicon-edit eliminar"     title="Editar"></a>
				 <a href="javascript:eliminarEmpleado('.$registro2['id_categoria'].');">
				 <img src="../images/delete.png" width="15" height="15" alt="delete" title="Eliminar" /></a>
				 </td>
				</tr>';
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>