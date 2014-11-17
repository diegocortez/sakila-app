<?php 
ini_set("display_errors",0);

if($_POST[btn_enviar]){
	require_once('../../operaciones/usuarios.class.php');
	$obj_usuario = new usuario();
	
	$id_usuario = $_POST['hdn_id_usuario'];
	$nuevo_nombre = $_POST['txt_nombre'];
	$nuevo_apellido = $_POST['txt_apellido'];
	$nuevo_email = $_POST['txt_email'];
	
	try{
		$obj_usuario->ActualizarUsuario($nuevo_nombre,$nuevo_apellido,$nuevo_email,$id_usuario);
		}
	
	catch(Exception $e){
		echo "Error : ".$e->getMessage();
		}
	
	}
if($_POST[btn_eliminar]){
	
	require_once('../../operaciones/usuario.class.php'); 
$obj_usuario = new usuario();

$usuario 	=	$_POST['hdn_id_usuario'];
try{
	$obj_usuarios->eliminarUsuario($usuario);
	}
catch(Exception $e){
	echo	"Error : ".$e->getMessage();
	}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../../css/principal.css"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body class="bodys">
<?php include('../../include/encabezado.php'); ?>
<div class="contenedor-titulo" align="center"> 
Usuarios
</div>
Usuario actualizado. <a href="../nomina-usuarios.php"><input type="button" value="Continuar" class="efecto-botones"/></a>
</body>
</html>
