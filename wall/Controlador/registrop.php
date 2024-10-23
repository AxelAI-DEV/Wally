<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["contraseña"]) && !empty($_POST["dinero"]) && !empty($_POST["budget"]) && !empty($_POST["email"])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $contraseña = $_POST["contraseña"];
        $dinero = $_POST["dinero"];
        $budget = $_POST["budget"];
        $email = $_POST["email"];

        $sql = $conexion->query(-"INSERT INTO usuarios(Name, Last_Name, Password, Cash, Budget, Email) VALUES('$nombre','$apellido','$contraseña','$dinero','$budget','$email')");

        if ($sql == 1) {
            // Redirige a usuario.php después de un registro exitoso
            header("Location: usuario.php");
            exit(); // Asegura que el script se detenga después de la redirección
        } else {
            echo '<div class="alert alert-danger">Error en el registro</div>';
        }

    } else {
        echo '<div class="alert alert-warning">Faltan datos</div>';
    }
}
?>
