<?php
$mysqli = include_once "conexion.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$img = $_POST["img"];

$sentencia = $mysqli->prepare("UPDATE `lista_menu` SET `Nombre` = '$nombre', `Precio` = '$precio'. '$img'=   `img` WHERE `lista_menu`.`id` = $id;");


$sentencia->execute();
header("Location: listar.php");
?>