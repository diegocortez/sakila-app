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
<div class="contenedor-aplicacion">
<form id="form1" name="form1" method="post" action="ejecuta-agregar-usuario.php">
<table width="70%" border="1">
  <tr>
    <td>Nombre</td>
    <td><label for="txt_usuario"></label>
      <input type="text" name="txt_usuario" id="txt_usuario" data-validation="length alphanumeric" data-validation-length="3-12" data-validation-error-msg="Ingrese un Nombre de 3 a 12 caracteres"/></td>
  </tr>
  <tr>
    <td>Apellido</td>
    <td><input type="text" name="txt_apellido" id="txt_apellido" data-validation="length alphanumeric" data-validation-length="3-12" data-validation-error-msg="Ingrese un Nombre de 3 a 12 caracteres" /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="txt_email" id="txt_email" data-validation="email" data-validation-error-msg="Ingrese un correo valida" /></td>
  </tr>
  <tr>
    <td>Store</td>
    <td><input type="radio" name="radio" id="chk_store" value="1" />
      <label for="chk_store">Store 1 
        <input type="radio" name="radio" id="chk_store" value="2" />
        Store 2
      </label></td>
  </tr>
  <tr>
    <td>id_address</td>
    <td><label for="txt_addres"></label>
      <input type="text" name="txt_addres" id="txt_addres" /></td>
  </tr>
  <tr>
    <td>Fecha</td>
    <td><label for="txt_fecha"></label>
      <input type="text" name="txt_fecha" id="txt_fecha" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btn_enviar" id="btn_enviar" value="Enviar" /></td>
  </tr>
</table>
</form>
</div>
<a href="../nomina-usuarios.php">Volver atras</a>
<script language="javascript" src="../../jquery/jquery-1.11.1.min.js"></script>
<script src="../../jquery/jQuery-Form-Validator-master/form-validator/jquery.form-validator.min.js"></script>
<script> $.validate();</script>
</body>
</html>
