<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">Wally</h1>
<div class="container-fluid row align-center">+
    <div class="d-flex justify-content-center align-items-start custom-margin">
        <form class="col-4 p-3 login-form" method="POST" action="index.php">
            <h3 class="text-center text-secondary">Registro</h3>
            <?php
            include "Controlador/modelo/conexion.php";
            include "Controlador/registrop.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contraseña">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cash</label>
                <input type="number" class="form-control" name="dinero">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Budget</label>
                <input type="number" class="form-control" name="budget">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" class="form-control" name="email">
            </div>
            <p>¿ya tienes una cuenta? <a href="login.php">Iniciar Sesion</a></p>
            <button type="submit" class="btn btn-primary" nam+e="btnregistrar" value="ok">Registrar</button>
            <a href="usuario.php" class="btn btn-primary">Usuario</a>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>