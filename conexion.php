<?php
$host = "localhost";
$usuario = "root";
$contraseña = "12345678";
$base_de_datos = "bd_food";
$mysqli = new mysqli($host, $usuario, $contraseña, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;