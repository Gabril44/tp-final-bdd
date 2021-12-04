<?php

$dni = $_GET["id"];

$consulta = "DELETE FROM Cliente
WHERE Cliente.idCliente = (SELECT persona.idPersona FROM persona WHERE persona.dni = $dni)";

$consulta2 = "DELETE from persona where idPersona = (select idPersona from(select distinct idPersona from persona where persona.dni = $dni) temp)";

$conexion = mysqli_connect("sql10.freesqldatabase.com","sql10456231","7LRtlYiDig","sql10456231");

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