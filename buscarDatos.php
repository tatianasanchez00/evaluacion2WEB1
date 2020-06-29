<?php

include('baseDatos.php');

if(isset($_POST["buscar"])){
    $nombre = $_POST["nombreUsuario"];

        $consulta= "SELECT Nombre, Correo, Contraseña FROM `usuarios` WHERE Nombre='$nombre'";


        $operacionEnBaseDatos = new BaseDatos();

       $resultado=$operacionEnBaseDatos-> consultarEnBaseDatos($consulta);  

        echo("<br>");
        print_r(json_encode($resultado));
    
}else{
    echo("No se preciono el botón");
}

?>