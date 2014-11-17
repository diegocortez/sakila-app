<?php
ini_set("display_errors",0);
include("../conexion/mysql.inc.php");
$mysqli->real_query("SELECT * from film");
$resultado_pelicula = $mysqli->use_result();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/principal.css"/>
<body class="bodys">

<?php include('../include/encabezado.php'); ?>

<div class="contenedor-titulo" align="center"> 
Peliculas
</div>


<div class="contenedor-aplicacion">
<table border="1">
<tr><td>Id Pelicula</td><td>Titulo</td><td>Descripcion</td><td>Año lanzamiento</td><td>Tiempo de Arriendo</td><td>Costo Arriendo</td><td>Clasificacion por edades</td><td>Categoria</td> </tr>
<?php

	while ($fila = $resultado_pelicula->fetch_assoc()) {?>
    <tr><td><a href="modificar-pelicula/form-actualizar-pelicula.php?idPelicula=<?php echo $fila['film_id']; ?>&tituloPelicula=<?php echo $fila['title']; ?>&descripcionPelicula=<?php echo $fila['description']; ?>&lanzamientoPelicula=<?php echo $fila['release_year']; ?>&tiempoRentaPelicula=<?php echo $fila['rental_duration'];?>&precioPelicula=<?php echo $fila['replacement_cost']; ?>&clasificacion=<?php echo $fila['rating']; ?>&categoria=<?php echo $fila['special_features'];?>">
    <?php echo $fila['film_id']; ?>
    </a></td>
    <td><?php echo $fila['title']; ?></td>
    <td><?php echo $fila['description']; ?></td>
	<td><?php echo $fila['release_year']; ?></td>
    <td><?php echo $fila['rental_duration'];?></td>
    <td><?php echo $fila['replacement_cost']; ?></td>
    <td><?php echo $fila['rating']; ?></td>
    <td><?php echo $fila['special_features'];?></td>
    </tr>
    
	<?php }?>
    </table>
    </div>
</body>
</html>