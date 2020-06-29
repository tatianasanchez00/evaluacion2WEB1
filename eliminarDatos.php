<?php

include('baseDatos.php');


if (isset ($_POST ["eliminar" ])) {

$nombre=$_POST ["eliminarUsuario"];



$consulta= "DELETE FROM `usuarios` WHERE Nombre='$nombre'";


$OperacionEnBaseDatos= new BaseDatos();

$OperacionEnBaseDatos -> alterarBaseDatos ($consulta);


} else {
    echo ("no se presiono y aun asi se entro al servidor");
}




?>