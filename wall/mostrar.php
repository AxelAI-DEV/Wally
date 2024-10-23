<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">Wally</h1>

<div>
    <table class="table">
        <thead>
        <tr>
            <h3 class="text-center text-secondary">Dashboard</h3>
            <th scope="col">Elemento hormiga</th>
            <th scope="col">Precio</th>
            <th scope="col">Elemento Fijo</th>
            <th scope="col">Precio</th>
            <th scope="col">Presupuesto de gasto hormiga</th>
            <th scope="col">Presupuesto de gasto fijo</th>
            <th scope="col">Ingresos</th>
            <th scope="col">Ahorro</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "controlador/modelo/conexion.php";
        $sql = $conexion->query("SELECT gastos.ElementoH, gastos.PrecioH, gastos.NombreF, gastos.PrecioF, gastos.PgastosH, gastos.PgastosF, dinero.Ingresos, dinero.Meta_Ahorro FROM gastos, dinero");
        while ($datos = $sql->fetch_object()) {
            ?>
            <tr>
                <td><?= $datos->ElementoH; ?></td>
                <td><?= $datos->PrecioH; ?></td>
                <td><?= $datos->NombreF; ?></td>
                <td><?= $datos->PrecioF; ?></td>
                <td><?= $datos->PgastosH; ?></td>
                <td><?= $datos->PgastosF; ?></td>
                <td><?= $datos->Ingresos; ?></td>
                <td><?= $datos->Meta_Ahorro; ?></td>
                <td><a href="">Editar</a></td>
                <td><a href="">Eliminar</a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

<a href="home.php" class="btn btn-primary">Inicio</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>