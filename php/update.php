<?php
include("connection.php");
$con = connection();

$id_empleado = $_GET['id_empleado'];

$sql = "SELECT * FROM users WHERE id_empleado='$id_empleado'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/style.css" rel="stylesheet">
    <title>Editar usuarios</title>

</head>
<li><a href="tabla.php" class="button1">Salir sin editar</a></li>
<body>
    <div class="users-form">
        <form action="edit_user.php" method="POST">
            <input type="hidden" name="id_empleado" value="<?= $row['id_empleado'] ?>">
            <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre'] ?>">
            <input type="text" name="apellido" placeholder="Apellidos" value="<?= $row['apellido'] ?>">
            <input type="text" name="fecha_de_nacimiento" placeholder="Fecha de Nacimiento"
                value="<?= $row['fecha_de_nacimiento'] ?>">
            <input type="text" name="direccion" placeholder="Direccion" value="<?= $row['direccion'] ?>">
            <input type="text" name="telefono" placeholder="Telefono" value="<?= $row['telefono'] ?>">
            <input type="email" name="correo_electronico" placeholder="Correo Electronico"
                value="<?= $row['correo_electronico'] ?>">
            <input type="text" name="foto" placeholder="Foto" value="<?= $row['foto'] ?>">
            <input type="text" name="fecha_de_ingreso" placeholder="Fecha de ingreso"
                value="<?= $row['fecha_de_ingreso'] ?>">
            <input type="text" name="salario" placeholder="Salario" value="<?= $row['salario'] ?>">

            <input type="hidden" name="id_departamento" value="<?= $row['id_departamento'] ?>">
            <input type="hidden" name="id_empresa" value="<?= $row['id_empresa'] ?>">
            <input type="hidden" name="id_descuento_bancario" value="<?= $row['id_descuento_bancario'] ?>">

            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>

</html>
