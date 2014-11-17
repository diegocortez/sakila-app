<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../../css/principal.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body class="bodys">

<div class="contenedor-aplicacion">
<form id="form1" name="form1" method="post" action="ejecuta_agregar_categoria.php">

  <table width="70%" border="1">
    <tr>
      <td>Categoria</td>
      <td><label for="txt_categoria"></label>
      <input type="text" name="txt_categoria" id="txt_categoria" data-validation="length alphanumeric" data-validation-length="3-12" data-validation-error-msg="Ingrese una categoria de 3 a 12 caracteres"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="cmd_agregar" id="cmd_agregar" value="Enviar" class="efecto-botones" /></td>
    </tr>
  </table>
  
</form>
<a href="../nomina-categorias.php">Volver atras</a>

<script language="javascript" src="../../jquery/jquery-1.11.1.min.js"></script>
<script src="../../jquery/jQuery-Form-Validator-master/form-validator/jquery.form-validator.min.js"></script>
<script> $.validate(); </script>
</div>

</body>
</html>
