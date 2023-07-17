<?php
include_once "encabezado.php";

$mysqli = include_once "conexion.php";
$id = $_GET["id"];

$sentencia = $mysqli->prepare("SELECT id, nombre, precio FROM lista_menu WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
# Obtenemos solo una fila, que será el videojuego a editar
$lista_menu = $resultado->fetch_assoc();
if (!$lista_menu) {
    exit("No hay resultados para ese ID");
}

?>
<div class="row">
    <div class="col-12">
        <h1>Actualizar Datos</h1>
        <form action="actualizar.php" method="POST">
        <input type="number" hidden value="<?php echo $id ?>" name="id" id="">
        <div class="form-group">
                <label for="nombre">Nombre</label><br>
                <input value="<?php echo $lista_menu["nombre"] ?>"  type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Precio</label><br>
                <input value="<?php echo $lista_menu["precio"] ?>" type="text" name="precio" id="precio" required></div>
            <div class="form-group">
                <label for="descripcion">Img</label><br>
                <input value="<?php echo $lista_menu["img"] ?>" type="imagen" name="imagen" id="imagen" required></div>
                
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="listar.php">Volver</a>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>