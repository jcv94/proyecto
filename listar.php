<?php
include_once "encabezado.php";

$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT id, nombre, precio FROM lista_menu");
$lista_menu = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<div class="row">
    <div class="col-12">
        <center><h1>Listado de Menú</h1></center>
        <h4>Desayuno</h4>
    </div>
    <div class="col-12">
    <div class="barra-lateral col-12 col-sm-auto">
            </div>
        <a class="btn btn-success my-2" href="formulario_registrar.php">Agregar nuevo</a>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Img<th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista_menu as $lista_menu) { ?>
                    <tr>
                        <td><?php echo $lista_menu["id"] ?></td>
                        <td><?php echo $lista_menu["nombre"] ?></td>
                        <td><?php echo $lista_menu["precio"] ?></td>
                        <td><?php echo $lista_menu["img"] ?></td>
                   
                        <td>
                            <a href="editar.php?id=<?php echo $lista_menu["id"]  ?>"><button type="button" class="btn btn-primary">Editar</button></a>
                            <a href="eliminar.php?id=<?php echo $lista_menu["id"] ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "pie.php" ?>