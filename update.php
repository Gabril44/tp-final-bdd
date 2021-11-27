<!DOCTYPE html>
<html>
    <head>
      <title> Modificar Cliente </title>
      <link rel="stylesheet" type="text/css" href="menu.css">
    </head>
  <?php
  $dni_anterior = $_GET['id'];
  ?>
   <body>
<!-- mandamos con el metodo "post" a la pagina "register.php" todos los datos-->
      <form action="update_user.php" method="post">

      <input type="hidden" value= <?php echo $dni_anterior?> name="dni_inv" >

      <?php
      $consulta = "SELECT persona.dni, persona.apellido, persona.nombre, persona.telefono, persona.email, persona.direccion
      FROM persona
      INNER JOIN Cliente
      ON persona.idPersona = Cliente.idCliente
      WHERE persona.dni = $dni_anterior";
      $conexion=mysqli_connect("thinkgreen.czqsnex935ev.sa-east-1.rds.amazonaws.com","admin","dabbdd2021","reciplas");
      $result = $conexion->query($consulta);
      ?>
<table width="300" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <?php if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {  ?>
    <td>Nombre:</td>
    <td> <input type="text" name="nombre" value=<?php echo $row['nombre'] ?>></td>
  </tr>
  <tr>
    <td>Apellido:</td>
    <td><input type="text" name="apellido" value=<?php echo $row['apellido'] ?>></td>
  </tr>
  <tr>
    <td>E-mail:</td>
    <td><input type="text" name="email" value=<?php echo $row['email'] ?> ></td>
  </tr>
  <tr>
    <td>Direccion:</td>
    <td><input type="text" name="dir" value=<?php echo $row['direccion'] ?> ></td>
  </tr>
  <tr>
    <td>Telefono:</td>
    <td><input type="text" name="tel" value=<?php echo $row['telefono'] ?> ></td>
  </tr>
  <?php } }?>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Editar"></td>
  </tr>
</table>

</form>

</body>

</html>