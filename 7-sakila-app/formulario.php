<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>Email   
    <input name="email" data-validation="email" data-validation-error-msg="Ingrese un correo valida" />
  </p>
  <p>
    
    Nombre 
    <input name="nombre" data-validation="required" data-validation-error-msg="Ingrese un nombre" />
  </p>
  <p>User name
  <input name="user" data-validation="length alphanumeric"  data-validation-length="3-12" data-validation-error-msg="Ingrese un usuario valida" />
  </p>
  <input type="submit" />
</form>

<script languaje="javascript" src="jquery/jquery-1.11.1.min.js"></script>
<script src="jquery/jQuery-Form-Validator-master/form-validator/jquery.form-validator.min.js"></script>

<script> $.validate(); </script>
</body>
</html>
