<?php
$conexion=mysqli_connect("thinkgreen.czqsnex935ev.sa-east-1.rds.amazonaws.com","admin","dabbdd2021","reciplas");
$consulta = "SELECT persona.idPersona, persona.apellido, persona.nombre
FROM persona
    LEFT JOIN proveedor 
        ON persona.idPersona = proveedor.idProveedor
    LEFT JOIN usuario 
        ON persona.idPersona = usuario.idUsuario
WHERE (proveedor.idProveedor IS NULL) AND (usuario.idUsuario IS NULL)";
if($conexion->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
else{
    $resultado=mysqli_query($conexion,$consulta);
    while($mostrar = mysqli_fetch_array($resultado)){
         echo "cliente:".$mostrar['idPersona'] ." ". $mostrar['nombre']." ".$mostrar['apellido']; ?><br><?php
    }
    die ("funca");

}