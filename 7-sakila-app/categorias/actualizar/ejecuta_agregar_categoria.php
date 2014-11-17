<?php
ini_set("display_errors",0);

require_once('../../operaciones/categorias.class.php');
$obj_categoria= new categorias();
$nombre_categoria = $_POST['txt_categoria'];

try{
	$obj_categoria->agregarCategoria($nombre_categoria);
	}

catch(Exception $e){
	echo "Error : ".$e->getMessage();
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
Categoria actualizada. <a href="../nomina-categorias.php"><input type="button" value="Continuar" class="efecto-botones"/></a>
</body>
</html>
