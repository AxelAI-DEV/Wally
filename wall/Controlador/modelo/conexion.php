<?php
$conexion=new mysqli("localhost","root","","wally");
$conexion->set_charset("utf8");

if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
    echo "Conectado";-
}
?>