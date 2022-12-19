<?php
    include 'conexion.php';

    if(isset($_GET['idVJ']) && isset($_POST['editGame'])){
        $idVJ = $_GET['idVJ'];
        $nombreVJ = $_POST['nombreVJ'];
        $descripVJ = $_POST['descripVJ'];
        $fechaCrea = $_POST['fechaCrea'];
        $editorVJ = $_POST['editorVJ'];
        $desarrolladorVJ = $_POST['desarrolladorVJ'];
        $precio = $_POST['precio'];

        $actualizar = "UPDATE `videojuego` 
                       SET `nombreVJ`= '$nombreVJ',`descripVJ`= '$descripVJ', `fechaCrea`= '$fechaCrea', `editorVJ`= '$editorVJ', 
                           `desarrolladorVJ`= '$desarrolladorVJ', `precio`= '$precio'
                       WHERE idVJ = $idVJ";

        if(mysqli_query($conexion, $consulta) === TRUE){
            header('Location:editar_juego');
        }else{
            echo "something went wrong";
        }
    }else{
        echo "invalid";
    }