<?php

include('baseDatos.php');

if(isset($_POST["buscar"])){
    $nombre = $_POST["nombreUsuario"];

        //crear una consulta de sql //
        $consulta= "SELECT Nombre, Correo, Contraseña FROM `usuarios` WHERE Nombre='$nombre'";

        //crear un objeto de la clase bdd

        $operacionEnBaseDatos = new BaseDatos();

        //usar un metodo de la clase bdd para escribir en la bdd//


       $resultado=$operacionEnBaseDatos-> consultarEnBaseDatos($consulta);  

        echo("<br>");
        print_r(json_encode($resultado));
    
}else{
    echo("No se preciono el botón");
}

?>