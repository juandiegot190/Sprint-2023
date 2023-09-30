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
    <title>Users CRUD</title>
</head>

<li><a href="../php/index.php" class="button">Crear nuevo trabajador</a></li>
<li><a href="../sucursal4.php" class="button1">Regresar al Dashboard</a></li>

<body>


    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID empleado</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Direccion</th>
                    <th>telefono</th>
                    <th>Correo</th>
                    <th>Link de la foto</th>
                    <th>Fecha de ingreso</th>
                    <th>Salario</th>
                    <th>Salario descontado</th>


                </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th>
                            <?= $row['id_empleado'] ?>
                        </th>
                        <th>
                            <?= $row['nombre'] ?>
                        </th>
                        <th>
                            <?= $row['apellido'] ?>
                        </th>
                        <th>
                            <?= $row['fecha_de_nacimiento'] ?>
                        </th>
                        <th>
                            <?= $row['direccion'] ?>
                        </th>
                        <th>
                            <?= $row['telefono'] ?>
                        </th>
                        <th>
                            <?= $row['correo_electronico'] ?>
                        </th>
                        <th>
                            <?= $row['foto'] ?>
                        </th>
                        <th>
                            <?= $row['fecha_de_ingreso'] ?>
                        </th>
                        <th>
                            <?= $row['salario'] ?>
                        </th>
                        <th>
                            <?= $row['salario_descontado'] ?>
                        </th>

                        <th><a href="update.php?id_empleado=<?= $row['id_empleado'] ?>" class="users-table--edit">Editar</a>
                        </th>
                        <th><a href="delete_user.php?id_empleado=<?= $row['id_empleado'] ?>"
                                class="users-table--delete">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>


            </tbody>
        </table>
    </div>



</body>



</html>