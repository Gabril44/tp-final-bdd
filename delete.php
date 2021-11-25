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
<header class="Tituloosm">
        
        <nav>
            
            <li><a class="logo" href="inicio.php"><img src="mini-logo.png">INICIO </a> <a href="cerrar_sesion.php"> CERRAR SESION </a> </li>
        </nav>
        
        <div class="barra">
            <h2>Menu<img src="lista_icono_blanco.png" alt=""></h2>
            <ul>
                <li><a href="delete.php">Inventario</a></li>
                <li><a href="contacto.html">Compras</a></li>
                <li><a href="contacto.html">Ventas</a></li>
                <li><a href="contacto.html">Reportes</a></li>
                <li><a href="contacto.html">Produccion</a></li>
                <li><a href="contacto.html">Administracion</a></li>
                <li><a href="contacto.html">Configuracion</a></li>
                <li id=ultimoelemento><a href="integrantes.html">Integrantes</a></li>   
            </ul>
        </div> 
    </header>
</header>
<main>
 <h1 style="text-align: center;" >Bienvenido, esta es la base de datos de usuarios:</h1>	
</main>
<?php
$servername = "localhost";
$username = "root";
$password = "Habbo334A";
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT id, firstname, lastname, email FROM users";
$result = $conn->query($sql);

?>
<div style="text-align: center;">

<tr>
	<td><a href="newslet.php">Register</a></td>
</tr>
<table  width="300" border="1" style="margin: 0 auto;">
	
	<?php
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {    
	?>		

	  <tr>
		<td>ID</td>
		<td><?php echo $row["id"]; ?></td>
		<td><a href="deluser.php?id=<?php echo $row["id"] ?>">Delete</a>
	    <br><a href="update.php?id=<?php echo $row["id"] ?>">Update</a></td>  
	</tr>
	  <tr>
		<td>First Name</td>
		<td><?php echo $row["firstname"]; ?></td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td>Last Name</td>
		<td><?php echo $row["lastname"]; ?></td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td>Email</td>
		<td><?php echo $row["email"]; ?></td>
		<td>&nbsp;</td>
	  </tr>
		
	<?php	
		} 
	?>
		</table>
			
<?php	
	} else {
			echo "0 results";
	}

	
$conn->close();            
?>

</div>


</body>
</html>