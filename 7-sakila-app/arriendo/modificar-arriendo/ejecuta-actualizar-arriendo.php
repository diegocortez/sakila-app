<?php 
require_once('../../operaciones/arriendo.class.php');
$obj_arriendo = new arriendo();

$v_id= $_POST['hdn_id_arriendo'];
$v_fechaArriendo = $_POST['txt_fechaArriendo'];
$v_fechaEntrega = $_POST['txt_fechaRetorno'];

try{
	$obj_arriendo->ActualizarArriendo($v_id,$v_fechaArriendo,$v_fechaEntrega);
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
<?php include('../../include/encabezado.php'); ?>

<div class="contenedor-titulo" align="center"> 
Arriendos
</div>

Arriendo actualizado <a href="../nomina-arriendo.php"> Continuar</a>
</body>
</html>