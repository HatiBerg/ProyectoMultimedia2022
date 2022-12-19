<?php
include 'conexion.php';

if(isset($_POST['añadirJuego'])){
    $idVJ = $_GET['idVJ'];
        $nombreVJ = $_POST['nombreVJ'];
        $descripVJ = $_POST['descripVJ'];
        $fechaCrea = $_POST['fechaCrea'];
        $editorVJ = $_POST['editorVJ'];
        $desarrolladorVJ = $_POST['desarrolladorVJ'];
        $precio = $_POST['precio'];

    $sql = "INSERT INTO `videojuego`(`nombreVJ`,`descripVJ`, `fechaCrea`, `editorVJ`', `desarrolladorVJ`, `precio`) 
            VALUES ('$nombreVJ', $descripVJ, '$fechaCrea','$editorVJ', $desarrolladorVJ, '$precio')";
 
    if(mysqli_query($conexion, $consulta) === TRUE){
        echo "added successfully";
    }else{
        echo "something went wrong";
    }
}else{
    echo "no submit";
}
