<?php
$dni = $_POST['dni_inv'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['tel'];
$email=$_POST['email'];
$direccion=$_POST['dir'];

$consulta ="UPDATE persona
INNER JOIN Cliente
    ON persona.idPersona = Cliente.idCliente
        SET 
        apellido = '$apellido',
        nombre = '$nombre',
        telefono = '$telefono',
        email = '$email',
        direccion = '$direccion'
WHERE persona.dni = '$dni'";

$conexion = mysqli_connect("sql10.freesqldatabase.com","sql10456231","7LRtlYiDig","sql10456231");

if ($conexion->query($consulta) === TRUE) {
	header("location:inicio.php");
} else {
    echo "Error editing: " . $conexion->error;
}

$conn->close();