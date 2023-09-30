<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","usuarios");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas = mysqli_fetch_array($resultado);

if ($filas) {
    if ($filas['id_cargo'] == 1) { //administrador
        header("location:../html/insertar_usuario.html");
    } else if ($filas['id_cargo'] == 2) { //administrador2
        header("location:sucursal2.php");
    } else if ($filas['id_cargo'] == 3) { //administrador3
        header("location:sucursal3.php");
    } else if ($filas['id_cargo'] == 4) { //administrador4
        header("location:sucursal4.php");
    } else if ($filas['id_cargo'] == 5) { //administrador5
        header("location:sucursal5.php");
    } else if ($filas['id_cargo'] == 6) { //cliente
        header("location:cliente.php");
    } else {
        // Cargo no válido
        include("index.html");
        echo "<h1 class='bad'>ERROR: Cargo no válido</h1>";
    }
} else {
    // No se encontraron resultados
    include("index.html");
    echo "<script>alert('ERROR: Usuario o contraseña incorrectos');</script>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);

