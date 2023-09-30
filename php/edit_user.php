<?php

include("connection.php");
$con = connection();


$id_empleado = $_POST['id_empleado'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo_electronico = $_POST['correo_electronico'];
$foto = $_POST['foto'];
$fecha_de_ingreso = $_POST['fecha_de_ingreso'];
$salario = $_POST['salario'];
$id_departamento = $_POST['id_departamento'];
$id_empresa = $_POST['id_empresa'];
$id_descuento_bancario = $_POST['id_descuento_bancario'];

$sql = "UPDATE users SET nombre='$nombre', apellido='$apellido', fecha_de_nacimiento='$fecha_de_nacimiento', direccion='$direccion', telefono='$telefono', correo_electronico='$correo_electronico' , foto='$foto' , fecha_de_ingreso='$fecha_de_ingreso' , salario='$salario' WHERE id_empleado='$id_empleado'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: tabla.php");
} else {

}

?>