<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$cotizar = $_POST['cotizar'];
$para = 'bardo@computaciondelreal.com.mx';
$titulo = 'COTIZACION TONER';
$header = 'From: ' . $nombre;
$msjCorreo = "NOMBRE CLIENTE:$nombre     EMPRESA:$empresa      MAIL:$email      TELEFONO: $telefono       MARCA:$marca      MODELO:$modelo      COTIZAR:$cotizar";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
window.location.href = 'http://www.computaciondelreal.com.mx';
</script>";
} else {
echo 'Falló el envio';
}
}
?>

<body>
</body>
</html>