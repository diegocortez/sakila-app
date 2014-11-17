<?php 	
class categorias{
	
	function actualizaNombreCategoria($categoria,$nuevoNombre)
	{
		$v_id_categoria = $categoria;
		$v_nuevo_nombre	= $nuevoNombre;
	     include("../../conexion/mysql.inc.php");

		$actualiza_categorias	 ="update category set name='$v_nuevo_nombre' where category_id='$v_id_categoria'";
		$resultado_actualizacion 	 = $mysqli->query($actualiza_categorias);
		
		$mysqli->close();
		
	}	
	
	function eliminarNombreCategoria($categoria){
		$v_id_categoria = $categoria;
		include("../../conexion/mysql.inc.php");
		$eliminar_categorias	="delete from category where category_id='$v_id_categoria'";
		$resultado_eliminar 	= $mysqli->query($eliminar_categorias);
		
		$mysqli->close();
		}
	function agregarCategoria($categoria){
		$nueva_categoria = $categoria;
		include("../../conexion/mysql.inc.php");
		$agregar_categoria = "INSERT INTO `sakila`.`category` (`name`) VALUES ('$nueva_categoria')";
		$resultado_agregar	= $mysqli->query($agregar_categoria);
		$mysqli->close();	
		}
		
}


?>