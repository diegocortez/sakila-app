
<?php 
ini_set("display_errors",0);
$id_categoria = $_GET["id_cat"];
$nombre_categoria = $_GET["nombre"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../../css/principal.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body class="bodys">
<?php include('/var/www/html/ejercicios/7-sakila-app/include/encabezado.php'); ?>
<div class="contenedor-aplicacion">
<form id="form1" name="form1" method="post" action="ejecuta-actualizacion-categoria.php">
  <table width="70%" border="1">
    <tr>
      <td>Categoria</td>
      <td><label for="txt_categoria"></label>
      <input type="text" name="txt_categoria" id="txt_categoria" value="<?php echo $nombre_categoria;?>" data-validation="length alphanumeric" data-validation-length="3-12" data-validation-error-msg="Ingrese una categoria de 3 a 12 caracteres" />
      <input type="hidden" name="hdn_id_categoria" id="hdn_id_categoria" value="<?php echo $id_categoria;?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btn_enviar" id="btn_enviar" class="efecto-botones" value="Enviar" />
        <input type="submit" name="btn_eliminar" id="btn_eliminar" value="Eliminar" class="efecto-botones" />
      </td>
    </tr>
  </table>
  <a href="../nomina-categorias.php">Volver atras</a>
</form>
<script language="javascript" src="../../jquery/jquery-1.11.1.min.js"></script>
<script src="../../jquery/jQuery-Form-Validator-master/form-validator/jquery.form-validator.min.js"></script>
  <script> $.validate(); </script>
</div>
</body>
</html>