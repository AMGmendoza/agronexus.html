<?php 

$servidor = "localhost:3307";
$usuario = "root";
$contraseña = "";
$base_datos = "agronexus";    

//conexion a la base de datos
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_datos);

//verificacion de conexion
if (!$conexion) {
    die ("Conexion fallida: " . mysqli_connect_error()); 
}


?>