<?php
$consulta = "INSERT INTO persona (nombre,apellido,dni,fecha_registro,email,telefono,direccion,estado_registrado,tipo)
VALUES(
$nombre,
$apellido,
$dni,
$fch_registro,
$email,
$telefono,
$direccion,
$estado,
$tipo)

SELECT persona.idPersona
FROM persona
WHERE persona.dni = $dni";

$consulta2="INSERT INTO Cliente(
    idCliente
    )
    VALUES(
    $idPersona  #el id de la persona
    )
    ";

$conexion=mysqli_connect("thinkgreen.czqsnex935ev.sa-east-1.rds.amazonaws.com","admin","dabbdd2021","reciplas");
$result = $conexion->query($consulta);