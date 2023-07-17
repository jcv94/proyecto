<?php include_once "encabezado.php"; ?>
<div class="row">
    <div class="col-12">
        <h1>Registrar Datos</h1>
        <form action="registrar.php" method="POST">
        <div class="form-group">
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Precio</label><br>
                <input type="text" name="precio" id="precio" required></div>     
            </div>
            <div class="form-group">
                <label for="descripcion">Img</label><br>
                <input type="text" name="img" id="img" required></div>     
            </div>
            <div class="form-group"><button class="btn btn-success">Guardar</button></div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>