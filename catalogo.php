<?php
include 'conexion.php';
$consultaVJ = "SELECT * FROM videojuego";
$runVJ = mysqli_query($conexion, $consultaVJ);

session_start();

if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuario WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="lib/personal/style.css">
    <link rel="stylesheet" href="lib/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
</head>

<body>
    <div id="wrapper">

        <div id="header" class="container-fluid text-center">
            <div class="container-fluid fs-1">Banner</div>
        </div>

        <div id="menu" class="container-fluid fs-5">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid text-light">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index1.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="catalogo.php">Cat??logo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="noticia.php">Noticias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Estad??sticas</a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link" href="iniciar_sesion.php">Iniciar sesion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registrarse.php">Registrarse</a>
                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link" href="administracion.php">Administraci??n</a>
                            </li>
                        </ul>
                        <?php if (!empty($user)) : ?>
                            <div class="d-flex">
                                <p class="me-3" style="color:rgb(1000,1000,1000);">Bienvenido. <?= $user['email']; ?></p>
                                <a href="iniciar_sesion.php">
                                    Salir
                                </a>
                            <?php else : ?>
                            <?php endif; ?>
                            </div>
                    </div>
                </div>
            </nav>
        </div>

        <div id="main" class="d-outline-flex justify-content-center align-items-center text-center my-2">
            <div class="d-flex col-10 mx-auto">
                <table id="table_catalogo" class="display">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Fecha de Creaci??n</th>
                            <th>Editor</th>
                            <th>Desarrollador</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($num = mysqli_num_rows($runVJ) > 0) {
                            while ($result = mysqli_fetch_assoc($runVJ)) {
                                echo "  
                            <tr class='data'>  
                                <td>" . $result['idVJ'] . "</td>  
                                <td>" . $result['nombreVJ'] . "</td>  
                                <td>" . $result['descripVJ'] . "</td>  
                                <td>" . $result['fechaCrea'] . "</td>  
                                <td>" . $result['editorVJ'] . "</td>  
                                <td>" . $result['desarrolladorVJ'] . "</td>";
                                if ($result['precio'] == 0) {
                                    echo '<td>Gratis</td>';
                                } else {
                                    echo "<td>" . "$ " . $result['precio'] . "</td>";
                                }
                                echo "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="footer" class="d-outline-flex text-center text-light">
            <div class="d-grid gap-2">
                <button id="btn-back-to-top" class="btn fs-5" type="button">Inicio de P??gina</button>
            </div>
            <div class="container-fluid col-10 justify-content-center ">
                <button type="button" class="btn btn-link text-light">Acerca de nosotros</button>
            </div>
        </div>

    </div>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/personal/javascript.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_catalogo').DataTable();
        });
    </script>
</body>

</html>