<?php
$uname = val($_POST["uname"]);  
$upass = val($_POST["upass"]);
function val($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
session_start();
$_SESSION['usuario']=$uname;
$_SESSION['contraseña']=$upass;
$conexion=mysqli_connect("thinkgreen.czqsnex935ev.sa-east-1.rds.amazonaws.com","admin","dabbdd2021","reciplas");

$consulta="SELECT COUNT(*) as reg FROM usuario WHERE nombreUsuario = '$uname' and uPassword = '$upass'";
$resultado=mysqli_query($conexion,$consulta);


$row = mysqli_fetch_array($resultado);
$reg = intval($row['reg']);

if($reg>0){  
    header("location:inicio.php");
}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h2 style="text-align: center;">ERROR DE AUTENTIFICACION</h2>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
