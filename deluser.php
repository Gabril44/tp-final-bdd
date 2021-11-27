<?php

$dni = $_GET["id"];

$consulta = "DELETE FROM Cliente
WHERE Cliente.idCliente = (SELECT persona.idPersona FROM persona WHERE persona.dni = $dni)";

$consulta2 = "DELETE from persona where idPersona = (select idPersona from(select distinct idPersona from persona where persona.dni = $dni) temp)";

$conexion = mysqli_connect("thinkgreen.czqsnex935ev.sa-east-1.rds.amazonaws.com","admin","dabbdd2021","reciplas");

if ($conexion->query($consulta) === TRUE) {
    if ($conexion->query($consulta2) === TRUE) {
        header("location:clientes.php");
    } else {
        echo "Error deleting record: " . $conexion->error;
    }
    
} else {
    echo "Error deleting record: " . $conexion->error;
}

$conexion->close();