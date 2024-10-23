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
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Dinero</th>
        <th scope="col">Budget</th>
        <th scope="col">Email</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
    include "controlador/modelo/conexion.php";
    $sql = $conexion->query("SELECT * FROM usuarios");
    while ($datos = $sql->fetch_object()) {
    ?>
        <tr>
            <td><?= $datos-> Name; ?></td>
            <td><?= $datos-> Last_Name; ?></td>
            <td><?= $datos-> Pass-word; ?></td>
            <td><?= $datos-> Cash; ?></td>
            <td><?= $datos-> Budget; ?></td>
            <td><?= $datos-> Email; ?></td>
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
<a href="index.php" class="btn btn-primary">Nueva cuenta</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>