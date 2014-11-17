<?php 
if($_POST[btn_enviar])
require_once('../../operaciones/pelicula.class.php');
$obj_pelicula = new peliculas();


$v_id = $_POST['txt_id'];
$v_titulo = $_POST['txt_titulo'];
$v_descripcion = $_POST['txt_descripcion'];
$v_lanzamiento = $_POST['txt_lanzamiento'];
$v_diasArriendo = $_POST['txt_tiempoArriendo'];
$v_costoArriendo = $_POST['txt_costo'];
$v_clasificacion = $_POST['txt_clasificacion'];
$v_categoria = $_POST['txt_categoria'];

try{
	$obj_pelicula->actualizarPeliculas($v_id,$v_titulo,$v_descripcion,$v_lanzamiento,$v_diasArriendo,$v_costoArriendo,$v_clasificacion,$v_categoria);
	}

catch(Exception $e){
	echo "Error : ".$e->getMessage();
	}
	
if($_POST[btn_eliminar]){
	require_once('../../operaciones/pelicula.class.php');
	$obj_pelicula = new peliculas();
	$v_id = $_POST['txt_id'];
	try{}
	catch(Exception $e){
		echo "Error : ".$e->getMessage();
		}

	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../../css/principal.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Peliculas</title>
</head>

<body class="bodys">

<?php include('../../include/encabezado.php'); ?>


<div class="contenedor-titulo" align="center"> 
Peliculas
</div>


Pelicula Actualizada <a href="../nomina-pelicula.php"> Continuar</a>


</body>
</html>