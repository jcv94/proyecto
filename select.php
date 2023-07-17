<?php
$mysqli = include_once "conexion.php";
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$sentencia = $mysqli->prepare("INSERT INTO lista_menu
(nombre, precio)
VALUES
(?, ?)");
$sentencia->bind_param("ss", $nombre, $precio);
$sentencia->execute();
header("Location: listar.php");