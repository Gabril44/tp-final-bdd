<!DOCTYPE html>
<html>
<head>
    <title> Registrar usuario </title>
    <link rel="stylesheet" type="text/css" href="menu.css">
</head>

<body>
<!-- mandamos con el metodo "post" a la pagina "register.php" todos los datos-->
<form action="register.php" method="post">

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
    <td>Contraseña:</td>
    <td><input type="text" name="pass"></td>
  </tr>
  <tr>
    <td>Repetir Contraseña:</td>
    <td><input type="text" name="rpass"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Registrarse"></td>
  </tr>
</table>

</form>

</body>

</html>