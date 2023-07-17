<?php
$mysqli = include_once "conexion.php";
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$img = $_POST["img"];
$sentencia = $mysqli->prepare("INSERT INTO lista_menu
(nombre, precio, img)
VALUES
(?, ?, ?)");
$sentencia->bind_param("ss", $nombre, $precio,$img);
$sentencia->execute();
header("Location: listar.php");