<!DOCTYPE html>
<html>
<head>
    <title> Registrar Cliente </title>
    <link rel="stylesheet" type="text/css" href="menu.css">
</head>

<body>
<!-- mandamos con el metodo "post" a la pagina "register.php" todos los datos-->
<form action="validarcliente.php" method="post">

<table width="300" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>Nombre:</td>
    <td> <input type="text" name="fname"></td>
  </tr>
  <tr>
    <td>Apellido:</td>
    <td><input type="text" name="lname"></td>
  </tr>
  <tr>
    <td>E-mail:</td>
    <td><input type="text" name="email"></td>
  </tr>
  <tr>
    <td>DNI:</td>
    <td><input type="text" name="cdni"></td>
  </tr>
  <tr>
    <td>Direccion:</td>
    <td><input type="text" name="dir"></td>
  </tr>
  <tr>
    <td>Telefono:</td>
    <td><input type="text" name="tel"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Registrarse"></td>
  </tr>
</table>

</form>

</body>

</html>