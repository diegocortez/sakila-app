<?php 
ini_set("display_errors",0);
$id_arriendo = $_GET["idArriendo"];
$fecha_Arriendo = $_GET["fechaRenta"];
$fecha_retorno = $_GET["fechaRetorno"];
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
Arriendos
</div>
<div class="contenedor-aplicacion">
<form id="form1" name="form1" method="post" action="ejecuta-actualizar-arriendo.php">
<table width="70%" border="1">
  <tr>
    <td>Fecha Arriendo</td>
    <td><input type="text" name="txt_fechaArriendo" id="txt_fechaArriendo"  value=<?php echo $fecha_Arriendo;?> data-validation="required" data-validation-error-msg="Ingrese la fecha de arriendo" /></td>
  </tr>
  <tr>
    <td>Fecha Retorno</td>
    <td><input type="text" name="txt_fechaRetorno" id="txt_fechaRetorno" value=<?php echo $fecha_retorno;?> data-validation="required" data-validation-error-msg="Ingrese la fecha de retorno" /></td>
  </tr>
  <tr>
    <td><input type="hidden" name="hdn_id_arriendo" id="hdn_id_arriendo" value=<?php echo $id_arriendo; ?> /></td>
    <td><input type="submit" name="btn_enviar" id="btn_enviar" value="Enviar" class="efecto-botones"/></td>
  </tr>
</table>

</form>
</div>
</body>
</html>