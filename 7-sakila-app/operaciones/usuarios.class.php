<?php 
class usuario{
	
	function eliminarUsuario($usuario){
		$v_id = $usuario;
		include("../conexion/mysql.inc.php");
		$eliminar_usuario	="DELETE FROM `sakila`.`customer` WHERE `customer_id`='$v_id';";
		$resultado_eliminar 	= $mysqli->query($eliminar_usuario);
		
		$mysqli->close();
		}
	
	
	
	function ActualizarUsuario($nombre,$apellido,$email,$id){
		$v_nombre = $nombre;
		$v_apellido = $apellido;
		$v_email = $email;
		$v_id = $id;
		include('../conexion/mysql.inc.php');
		$actualiza_usuario="UPDATE `sakila`.`customer` SET `first_name`='$v_nombre', `last_name`='$v_apellido', `email`='$v_email' WHERE `customer_id`='$id'
";
		$resultado_actualizacion = $mysqli->query($actualiza_usuario);
		$mysqli->close();
		}
	
	
	
	function AgrearUsuario($nombre_usuario,$apellido_usuario,$email_usuario,$store_usuario,$address_usuario,$fecha_usuario){
		
		$v_nombre = $nombre_usuario;
		$v_apellido = $apellido_usuario;
		$v_email = $email_usuario;
		$v_store = $store_usuario;
		$v_address = $address_usuario;
		$v_fecha = $fecha_usuario;
		
				
		include('../conexion/mysql.inc.php');
		$agregar_usuario = "INSERT INTO `sakila`.`customer` (`store_id`, `first_name`, `last_name`, `email`, `address_id`, `active`, `create_date`) VALUES ('$v_store', '$v_nombre', '$v_apellido', '$v_email', '$v_address', '2', '$v_fecha');
";
		$resultado_agregar = $mysqli->query($agregar_usuario);
		$mysqli->close();
		}
	}

?>

