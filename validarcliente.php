<?php
$consulta = "INSERT INTO persona (nombre,apellido,dni,fecha_registro,email,telefono,direccion,estado_registrado)
VALUES(
$nombre,
$apellido,
$dni,
$fch_registro,
$email,
$telefono,
$direccion,
$estado)";

$consultaidPersona = "SELECT persona.idPersona
FROM persona
WHERE persona.dni = $dni";

$consulta2="INSERT INTO Cliente(
    idCliente
    )
    VALUES(
    $idPersona  #el id de la persona
    )
    ";

$conexion=mysqli_connect("sql10.freesqldatabase.com","sql10456231","7LRtlYiDig","sql10456231");
$result = $conexion->query($consulta);
$resultidPersona = $conexion->query($consultaidPersona);
$result2 = $conexion->query($consulta2);

