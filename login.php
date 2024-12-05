<?php
// Llamamos a la conexión a la base de datos
require 'conex.php';

if (isset($_POST['btnentrar'])) {
    $usuario = $_POST['Correo'];
    $contraseña = $_POST['Contraseña'];

    // Escapar las variables para evitar SQL Injection


    // Consultamos a la base de datos
    $sql= "SELECT * FROM pedidos WHERE Correo='$usuario' AND Telefono='$contraseña'";
    $resultado = mysqli_query($conexion, $sql);

    if (!$resultado) {
        // Error en la consulta SQL
        echo "Error en la consulta a la base de datos: " . mysqli_error($conex);
    } else {
        $numero_registros = mysqli_num_rows($resultado);

        if ($numero_registros > 0) {
            // Redireccionamos a la página index-1.html
            echo "Sesión iniciada correctamente";
            exit();
        } else {
            // Si hay credenciales inválidas, mostramos un mensaje de error
            echo "Correo o Contraseña incorrectos";
        }
    }
}
?>
