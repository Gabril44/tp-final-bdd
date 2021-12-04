<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="menu.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<title>Crud usuarios</title>
</head>
<body>
<header>
<?php include('menu.html'); ?>
</header>
<main>
 <h1 style="text-align: center;" >Bienvenido, esta es la base de datos de usuarios:</h1>	
</main>
<?php
$conexion=mysqli_connect("sql10.freesqldatabase.com","sql10456231","7LRtlYiDig","sql10456231");
$consulta = "SELECT persona.dni, persona.apellido, persona.nombre, persona.telefono, persona.email, persona.direccion
FROM persona
    LEFT JOIN proveedor 
        ON persona.idPersona = proveedor.idProveedor
    LEFT JOIN usuario 
        ON persona.idPersona = usuario.idUsuario
WHERE (proveedor.idProveedor IS NULL) AND (usuario.idUsuario IS NULL)";
$result = $conexion->query($consulta);

?>
<div style="text-align: center;">
<form action="busqueda_clientes.php" method="post">
  <input type="text" placeholder="busqueda por dni &#128270;" name="busqueda_dni">
</form>
<tr>
	<td><a href="newslet.php">Register</a></td>
</tr>
<table  width="300" border="1" style="margin: 0 auto;">
<thead>
                    <tr>
                        <th>Dni</th> <th>Nombre</th> <th>Apellido</th> <th>Email</th> <th>Telefono</th> <th>Direccion</th>
                    </tr>
	<?php
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {    
	?>		
	  
                </thead>
                <tr>
                    <td><?php echo $row['dni'] ?> </td>
					<td><?php echo $row['nombre'] ?> </td> 
					<td> <?php echo $row['apellido'] ?> </td>
					<td> <?php echo $row['email'] ?> </td>
					<td> <?php echo $row['telefono'] ?> </td>
					<td> <?php echo $row['direccion'] ?> </td>
					<td><a href="deluser.php?id=<?php echo $row["dni"] ?>">Delete</a>
	                <br><a href="update.php?id=<?php echo $row["dni"] ?>">Update</a></td>
                    </tr>

	<?php	
		} 
	?>
		</table>
			
<?php	
	} else {
			echo "0 results";
	}

	
$conexion->close();            
?>

</div>


</body>
</html>