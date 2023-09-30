<?php
$conexion = mysqli_connect("localhost", "root", "", "usuarios");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $id_cargo = $_POST["id_cargo"];

    $query = "INSERT INTO usuarios (nombre, usuario, contraseña, id_cargo) VALUES ('$nombre', '$usuario', '$contraseña', $id_cargo)";

    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        echo "Registro insertado correctamente.";
    } else {
        echo "Error al insertar el registro: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet">
    <title>Ingresar usuarios</title>
</head>

<li><a href="../html/insertar_usuario.html" class="button">Regresar</a></li>