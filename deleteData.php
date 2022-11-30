<?php
include 'conexion.php';
if (isset($_GET['idVJ'])) {
    $id = $_GET['idVJ'];
    $borrar = "DELETE FROM `videojuego` WHERE idVJ = '$idVJ'";
    $run = mysqli_query($conexion, $borrar);
    if ($run) {
        header('location:eliminar_juego.php');
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}
