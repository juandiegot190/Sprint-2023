<?php

include("../php/connection.php");
$con = connection();

$id_empleado = $_GET["id_empleado"];

$sql = "DELETE FROM users WHERE id_empleado='$id_empleado'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: tabla.php");
} else {

}

?>