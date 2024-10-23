<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">Wally</h1>
<?php
include "Controlador/modelo/conexion.php";
include "Controlador/registrod.php";
?>

<div class="container-fluid d-flex flex-column align-items-center">
    <form class="w-100 p-3 login-form" method="POST" action="home.php">
        <div id="form-container" class="d-flex justify-content-between">
            <div id="formbox">
                <h3 class="text-center text-secondary">Gastos hormiga</h3>
                <div class="mb-3">
                    <label for="gastoNombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="gastoNombre" name="nombreh">
                </div>
                <div class="mb-3">
                    <label for="gastoPrecio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="gastoPrecio" name="precioh">
                </div>
            </div>

            <div id="formbox">
                <h3 class="text-center text-secondary">Gastos fijos</h3>
                <div class="mb-3">
                    <label for="fijoNombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="fijoNombre" name="nombref">
                </div>
                <div class="mb-3">
                    <label for="fijoPrecio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="fijoPrecio" name="preciof">
                </div>
            </div>

            <div id="formbox">
                <h3 class="text-center text-secondary">Presupuesto de gastos</h3>
                <div class="mb-3">
                    <label for="hormigaEstimado" class="form-label">Precio de gastos hormiga estimados</label>
                    <input type="number" class="form-control" id="hormigaEstimado" name="pestimadoh">
                </div>
                <div class="mb-3">
                    <label for="fijoEstimado" class="form-label">Precio de gastos fijos estimados</label>
                    <input type="number" class="form-control" id="fijoEstimado" name="pestimadof">
                </div>
            </div>

            <div id="formbox">
                <h3 class="text-center text-secondary">Ingresos</h3>
                <div class="mb-3">
                    <label for="ingresoMonto" class="form-label">Monto total</label>
                    <input type="number" class="form-control" id="ingresoMonto" name="ingresos">
                </div>
            </div>

            <div id="formbox">
                <h3 class="text-center text-secondary">Ahorro</h3>
                <div class="mb-3">
                    <label for="ahorroMeta" class="form-label">Meta de ahorro</label>
                    <input type="number" class="form-control" id="ahorroMeta" name="ahorro">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-lg mt-4" name="btnenviar" value="ok">Enviar</button>
        <a href="usuario.php" class="btn btn-secondary mt-2">Regresar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>