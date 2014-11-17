
<?php
ini_set("display_errors",0);
include("../conexion/mysql.inc.php");
$mysqli->real_query("SELECT * from rental");
$resultado_arriendo = $mysqli->use_result();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../css/principal.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Arriendos</title>
</head>
<body class="bodys">
<?php include('../include/encabezado.php'); ?>

<div class="contenedor-titulo" align="center"> 
Arriendos
</div>
<div class="contenedor-aplicacion">
<table border="1">
<tr><td>Id Arriendo</td><td>Fecha Arriendo</td><td>Id Inventario</td><td>Id Cliente</td><td>Fecha Retorno</td><td>Ultima Actualizacion</td></tr>
 <?php
	
	while ($fila = $resultado_arriendo->fetch_assoc()) {?>
    
    <tr>
    <td><a href="modificar-arriendo/actualizar-arriendo.php?idArriendo=<?php echo $fila['rental_id']; ?>&fechaRenta=<?php echo $fila['rental_date']?>&idInventario=<?php echo $fila['inventory_id'];?>&idCliente=<?php echo $fila['customer_id'];?>&fechaRetorno=<?php echo $fila['return_date'];?>&ultimaActualizacion=<?php echo $fila['last_update'];?>">
     <?php echo $fila['rental_id']; ?></a></td>
     <td><?php echo $fila['rental_date']?></td>
     <td><?php echo $fila['inventory_id'];?></td>
     <td><?php echo $fila['customer_id'];?></td>
     <td><?php echo $fila['return_date'];?></td>
     <td><?php echo $fila['last_update'];?></td></tr> 
    <?php }?>
    </table>
    </div>
</body>
</html>
