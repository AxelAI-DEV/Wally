<?php
include "controlador/modelo/conexion.php"; // Asegúrate de incluir la conexión a la base de datos

if (!empty($_POST["btnenviar"])) {
    if (!empty($_POST["nombreh"]) && !empty($_POST["precioh"]) && !empty($_POST["nombref"]) && !empty($_POST["preciof"]) && !empty($_POST["pestimadoh"]) && !empty($_POST["pestimadof"]) && !empty($_POST["ingresos"]) && !empty($_POST["ahorro"])) {

        // Captura de valores del formulario
        $nombreh = $_POST["nombreh"];
        $precioh = $_POST["precioh"];
        $nombref = $_POST["nombref"];
        $preciof = $_POST["preciof"];
        $pestimadoh = $_POST["pestimadoh"];
        $pestimadof = $_POST["pestimadof"];
        $ingresos = $_POST["ingresos"];
        $ahorro = $_POST["ahorro"];

        // Inserción en la tabla gastos
        $sql1 = $conexion->query("INSERT INTO gastos(ElementoH, PrecioH, NombreF, PrecioF, PgastosF, PgastosH) VALUES ('$nombreh', '$precioh', '$nombref', '$preciof', '$pestimadof', '$pestimadoh')");

        // Inserción en la tabla dinero
        $sql2 = $conexion->query("INSERT INTO dinero(Ingresos, Meta_Ahorro) VALUES ('$ingresos', '$ahorro')");

        // Verificación del resultado
        if ($sql1 && $sql2) {
            header("Location: mostrar.php");
            echo '<div class="alert alert-success">Registro exitoso</div>';
        } else {
            echo '<div class="alert alert-danger">Error en el registro</div>';
        }

    } else {
        echo '<div class="alert alert-warning">Faltan datos</div>';
    }
}
?>