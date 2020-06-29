<?php

include('baseDatos.php');


if (isset ($_POST ["agregar" ])) {

$nombre=$_POST ["nombre"];
$correo=$_POST [ "correo"];
$contraseña= $_POST [ "contraseña"];

//crear una consulta de sql //

$consulta= "INSERT INTO usuarios( Nombre, Correo, Contraseña) VALUES ('$nombre','$correo','$contraseña')";


//crear un objeto de la clase bdd
$OperacionEnBaseDatos= new BaseDatos();

//usar un metodo de la clase bdd para escribir en la bdd//
$OperacionEnBaseDatos -> alterarBaseDatos ($consulta);


} else {
    echo ("no se presiono y aun asi se entro al servidor");
}




?>