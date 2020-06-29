<?php

include('baseDatos.php');


if (isset ($_POST ["eliminar" ])) {

$nombre=$_POST ["eliminarUsuario"];


//crear una consulta de sql //

$consulta= "DELETE FROM `usuarios` WHERE Nombre='$nombre'";


//crear un objeto de la clase bdd
$OperacionEnBaseDatos= new BaseDatos();

//usar un metodo de la clase bdd para escribir en la bdd//
$OperacionEnBaseDatos -> alterarBaseDatos ($consulta);


} else {
    echo ("no se presiono y aun asi se entro al servidor");
}




?>