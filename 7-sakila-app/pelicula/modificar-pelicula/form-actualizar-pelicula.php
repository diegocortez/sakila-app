<?php 
$id_pelicula = $_GET["idPelicula"];
$titulo_pelicula = $_GET["tituloPelicula"];
$descripcion_pelicula = $_GET["descripcionPelicula"];
$lanzamiento_pelicula = $_GET["lanzamientoPelicula"];
$tiempoArriendo = $_GET["tiempoRentaPelicula"];
$costoArriendo = $_GET["precioPelicula"];
$clasificacion_pelicula = $_GET["clasificacion"];
$categoria_pelicula = $_GET["categoria"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../../css/principal.css"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Peliculas</title>
</head>

<body class="bodys">

<?php include('7-sakila-app/include/encabezado.php'); ?>

<div class="contenedor-titulo" align="center"> 
Peliculas
</div>

<form id="form1" name="form1" method="post" action="ejecutar-form-actualizar-pelicula.php">
<table width="70%" border="1">
  <tr>
    <td>Titulo </td>
    <td><input type="text" name="txt_titulo" id="txt_titulo" size="30" maxlength="30" value=<?php echo $titulo_pelicula ?> data-validation="required" data-validation-error-msg="Ingrese un nombre"/></td>
  </tr>
  <tr>
    <td>Descripcion</td>
    <td><label for="txt_descripcion"></label>
      <textarea  name="txt_descripcion" id="txt_descripcion" cols="45" rows="5" data-validation="required" data-validation-error-msg="Ingrese una descripcion"> <?php echo $descripcion_pelicula ?></textarea></td>
  </tr>
  <tr>
    <td>Lanzamiento</td>
    <td><input type="text" name="txt_lanzamiento" id="txt_lanzamiento" value=<?php echo $lanzamiento_pelicula ?> data-validation="required" data-validation-error-msg="Ingrese la Fecha de Lanzamiento" /></td>
  </tr>
  <tr>
    <td>Dias Arriendo</td>
    <td><label for="txt_tiempoArriendo"></label>
      <input type="text" name="txt_tiempoArriendo" id="txt_tiempoArriendo"value=<?php echo $tiempoArriendo ?> data-validation="required" data-validation-error-msg="Ingrese los dias de arriendo" /></td>
  </tr>
  <tr>
    <td>Costo Arriendo</td>
    <td><label for="txt_costo"></label>
      <input type="text" name="txt_costo" id="txt_costo" value=<?php echo $costoArriendo ?> data-validation="required" data-validation-error-msg="Ingrese el costo de arriendos" /></td>
  </tr>
  <tr>
    <td>Clasificacion</td>
    <td><label for="txt_clasificacion"></label>
      <input type="text" name="txt_clasificacion" id="txt_clasificacion" value=<?php echo $clasificacion_pelicula?> data-validation="required" data-validation-error-msg="Ingrese la clasificacion" /></td>
  </tr>
  <tr>
    <td>Categoria</td>
    <td><label for="txt_categoria"></label>
      <textarea name="txt_categoria" id="txt_categoria" cols="45" rows="2" data-validation="required" data-validation-error-msg="Ingrese la o las categorias" > <?php echo $categoria_pelicula?></textarea></td>
  </tr>
  <tr>
    <td><input type="hidden" name="txt_id" id="txt_id" value=<?php echo $id_pelicula ?> /></td>
    <td><input type="submit" name="btn_enviar" id="btn_enviar" value="Enviar" />
      <input type="submit" name="btn_eliminar" id="btn_eliminar" value="Eliminar" /></td>
  </tr>
</table>

</form>

<script language="javascript" src="../../jquery/jquery-1.11.1.min.js"></script>
<script src="../../jquery/jQuery-Form-Validator-master/form-validator/jquery.form-validator.min.js"></script>
<script>$.validate(); </script>
</body>
</html>
