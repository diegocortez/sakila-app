

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
<?php 
ini_set("display_errors",0);

require_once('../../operaciones/usuarios.class.php');
$obj_usuarios = new usuario();

$nombre_usuario= $_POST['txt_usuario'];
$apellido_usuario= $_POST['txt_apellido'];
$email_usuario = $_POST['txt_email'];
$store_usuario = $_POST['chk_store'];
$address_usuario = $_POST['txt_address'];
$fecha_usuario = $_POST['txt_fecha'];

try{
	$obj_usuarios->AgrearUsuario($nombre_usuario,$apellido_usuario,$email_usuario,$store_usuario,$address_usuario,$fecha_usuario);
	}

catch(Exception $e){
	echo "Error : ".$e->getMessage();
	}
?>
Usuario Agregado <a href="../nomina-usuarios.php"><input type="button" value="Continuar" class="efecto-botones"/></a>
</body>
</html>
