<?php
$uname = val($_POST["uname"]);  
$upass = val($_POST["pass"]);
$puntuacion;
function val($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
session_start();
$_SESSION['usuario']=$uname;
$_SESSION['contraseña']=$upass;
$conexion=mysqli_connect("thinkgreen.czqsnex935ev.sa-east-1.rds.amazonaws.com","admin","dabbdd2021","memorygame");

$consulta="SELECT*FROM users where username='$uname' and password='$upass'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){  
    header("location:inicio.php");
}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
