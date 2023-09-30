<?php
include("connection.php");
$con = connection();

$id_empleado = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo_electronico = $_POST['correo_electronico'];
if (!filter_var($correo_electronico, FILTER_VALIDATE_EMAIL)) {
    echo "El correo electrónico no es válido.";
    exit; // Detener la ejecución del script
}

$foto = $_POST['foto'];
$fecha_de_ingreso = $_POST['fecha_de_ingreso'];
$salario = $_POST['salario'];
$salario_descontado = $_POST['salario_descontado'];
// Verificar si $salario es un número válido
if (!is_numeric($salario)) {
    echo "El salario debe ser un número válido.";
    exit; // Detener la ejecución del script
}

$id_departamento = null;
$id_empresa = null;
$id_descuento_bancario = null;

$sql = "INSERT INTO users VALUES('$id_empleado','$nombre','$apellido','$fecha_de_nacimiento','$direccion','$telefono','$correo_electronico','$foto','$fecha_de_ingreso','$salario', '$salario_descontado', '$id_departamento','$id_empresa','$id_descuento_bancario' )";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: tabla.php");
} else {

}

?>