<?php 
ini_set("display_errors",0);
include('../conexion/mysql.inc.php');
$mysqli->real_query("SELECT * FROM sakila.customer");
$resultado_usuario = $mysqli->use_result();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../css/principal.css"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body class="bodys">
<?php include('../include/encabezado.php'); ?>
<div class="contenedor-titulo" align="center"> 
Usuarios <a href="actualizar/agregar_usuario.php"><input  type="button" value="Agregar" /> </a>
</div>

<div class="contenedor-aplicacion">
<table border="1">
<tr><td>Id Usuario</td><td>Nombre</td><td>Apellido</td><td>Email</td><td>Fecha Creacion</td><td>ID Address</td></tr>
<?php 
while($fila = $resultado_usuario->fetch_assoc()) {?> <!-- Se hace un recorrido por los datos de la tabla-->

<tr><td><a href="actualizar/form-usuario.php?id_us=<?php echo $fila['customer_id'];?>&nombre=<?php echo $fila['first_name'];?>&apellido=<?php echo $fila['last_name']; ?>&emailus=<?php echo $fila['email']; ?>"> 
<!--Se hace una refencia a una id y nombre en especifico-->
<?php echo $fila['customer_id'] ?> </a></td>
 <!--Se muestra la id anterior-->
<td><?php echo $fila['first_name']?></td>
<td><?php echo $fila['last_name']?></td>
<td><?php echo $fila['email']?></td>
<td><?php echo $fila['create_date']?> </td>
<td><?php echo $fila['address_id']?> </td></tr> <!-- Se muestra la id del nombre anterior-->
<?php }?>
</table>
</div>
</body>
</html>
