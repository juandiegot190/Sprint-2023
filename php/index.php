<?php
include("../php/connection.php");
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet">
    <title>USUARIOS</title>
</head>

<body>
    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="text" name="fecha_de_nacimiento" placeholder="Fecha_de_nacimiento">
            <input type="text" name="direccion" placeholder="Direccion">
            <input type="text" name="telefono" placeholder="Telefono">
            <input type="text" name="correo_electronico" placeholder="Correo">
            <input type="text" name="foto" placeholder="Foto">
            <input type="text" name="fecha_de_ingreso" placeholder="Fecha de ingreso">
            <input type="text" name="salario" placeholder="Salario">



            <input type="submit" value="Agregar">
        </form>
        <ul>


        <li><a href="../php/tabla.php" class="button">Regresar a la lista de trabajadores</a></li>


        </ul>
    </div>



</body>


</html>