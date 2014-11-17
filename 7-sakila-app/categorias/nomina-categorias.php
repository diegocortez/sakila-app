<?php
ini_set("display_errors",0);
include("../conexion/mysql.inc.php");
$mysqli->real_query("SELECT * from category");
$resultado_categorias = $mysqli->use_result();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Categorias</title>
<link href="../css/principal.css" rel="stylesheet" type="text/css" /> <!-- Estilo CSS-->
</head>

<body class="bodys">
<?php include('../include/encabezado.php'); ?>
<div class="contenedor-titulo" align="center"> 
Categoría
</div>
<div class="contenedor-aplicacion">

 <?php
	while ($fila = $resultado_categorias->fetch_assoc()) {?>
   
  <a href="actualizar/form-actualiza.php?id_cat=<?php echo $fila['category_id'];?>&nombre=<?php echo $fila['name']?>"> 
  <?php echo $fila['category_id'];?></a> <?php echo $fila['name']?> <br>
     
  <?php }

?>
<a href="actualizar/agregar_categorias.php"><input name="btn_agregar" type="button" value="Agregar" class="efecto-botones" /></a>
</div>

</body>
</html>