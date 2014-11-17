<?php 
ini_set("display_errors",0);
$id_usuario = $_GET["id_us"];
$nombre_usuario = $_GET["nombre"];
$apellido_usuario = $_GET["apellido"];
$correo = $_GET["emailus"];
$fecha_usuario = $_GET["date"];
$address_usuario = $_GET["address"];
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

<?php include('/var/www/html/ejercicios/7-sakila-app/include/encabezado.php'); ?>

<div class="contenedor-aplicacion">
  <form id="form1" name="form1" method="post" action="ejecutar-actualizar.php">
  <table width="100%" border="1">
  <tr>
    <td>Nombre</td>
    <td><label for="txt_nombre"></label>
      <input type="text" name="txt_nombre" id="txt_nombre" size="30" maxlength="30" value=<?php echo $nombre_usuario; ?> /></td>
  </tr>
  <tr>
    <td>Apellido</td>
    <td><label for="txt_apellido"></label>
      <input type="text" name="txt_apellido" id="txt_apellido" size="30" maxlength="30"" value=<?php echo $apellido_usuario; ?> /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="txt_email" id="txt_email" size="30" maxlength="30" value=<?php echo $correo; ?> /></td>
  </tr>
  <tr>
    <td><label for="hdn_id_usuario"></label>
      <input type="hidden" name="hdn_id_usuario" id="hdn_id_usuario" value=<?php echo $nombre_id; ?> /></td>
    <td><input type="submit" name="btn_enviar" id="btn_enviar" value="Enviar" />
      <input type="submit" name="btn_eliminar" id="btn_eliminar" value="Eliminar" /></td>
  </tr>
  </table>

  </form>



</div>
</body>
</html>
