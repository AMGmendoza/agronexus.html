<?php 
//llamamos al archico para conectarnos a la base de datos
require 'conex.php'; 

//validamos que el boton se haya presionado
if(isset($_POST['btnregistrar'])) {

    //obtenemos datos a enviar a la base de datos
    $usuario = $_POST['usuario'];
    $telefono = $_POST['Telefono'];
    $correo = $_POST['Correo'];
    $Pedidos = $_POST['pedido'] ?? 'Sin seleccion';
    echo "Pedido no seleccionado: $Pedidos";

    //insertamos los datos a la base de datos
 $sql = "INSERT INTO pedidos (IdUsuario, Nombre, Telefono, Correo, Pedido) VALUES (null, '$usuario', '$telefono', '$correo', '$Pedidos')";
 $resultado = mysqli_query($conexion, $sql);
           if($resultado) {

              //si se guardaron los datos
              echo "Registro realizado con exito";
              exit();
           } else {
              // si hubo algun error
              echo "Error al guardar los datos, porfavor intente de nuevo";
              echo "error" . $sql . "<br>" . mysqli_error($conexion);
           }
}
?>