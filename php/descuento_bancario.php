<?php
include("../php/connection.php");
$con = connection();

if(isset($_POST['nombre_banco'], $_POST['monto'], $_POST['nombre'], $_POST['plazo'], $_POST['id_empleado'])) {
    $id_banco = null;
    $nombre_banco = $_POST['nombre_banco'];
    $monto = $_POST['monto'];
    $nombre = $_POST['nombre'];
    $plazo = $_POST['plazo'];
    $id_empleado = $_POST['id_empleado'];

    $sql_salario = "SELECT salario FROM users WHERE id_empleado = '$id_empleado'";
    $resultado = mysqli_query($con, $sql_salario);

    if ($resultado && $row = mysqli_fetch_assoc($resultado)) {
        $salario = $row['salario'];
        $salario_descontado = $salario - $monto;
        $plazo = date('Y-m-d', strtotime($plazo));

        $sql_descuento = "INSERT INTO descuento_bancario (id_banco, nombre_banco, monto, nombre, plazo, id_empleado) 
                          VALUES ('$id_banco', '$nombre_banco', '$monto', '$nombre', '$plazo', '$id_empleado')";

        if ($con->query($sql_descuento) === TRUE) {
            $sql_actualizar_descuento = "UPDATE users SET salario_descontado = '$salario_descontado' WHERE id_empleado = '$id_empleado'";
            $con->query($sql_actualizar_descuento);
            
            echo "Descuento bancario registrado correctamente.";
            
            echo "<script>
                    setTimeout(function() {
                        window.location.href = '../html/descuento_banco.html';
                    }, 2000);
                  </script>";
        } else {
            echo "Error al guardar el descuento bancario: " . $con->error;
        }
    } else {
        echo "Error al obtener el salario del usuario.";
    }
} else {
    echo "No se recibieron todos los datos del formulario.";
}

$con->close();
?>
