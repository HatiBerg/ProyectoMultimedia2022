<?php
include 'conexion.php';

$consultaVJ = "SELECT * FROM videojuego WHERE mostrarSlider= 1";
$runVJ = mysqli_query($conexion, $consultaVJ);
$imageVJ = mysqli_fetch_assoc($runVJ);

$consultaN = "SELECT * FROM noticia WHERE mostrarSlider= 1";
$runN = mysqli_query($conexion, $consultaN);
$imageN = mysqli_fetch_assoc($runN);

session_start();

require 'conexion.php';

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
</head>

<body>
    <div id="wrapper">

        <div id="header" class="container-fluid text-center">
            <div class="container-fluid fs-1">GameCenter</div>
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
                                <a class="nav-link active" aria-current="page" href="index1.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="catalogo.php">Catálogo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Noticias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Estadísticas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="iniciar_sesion.php">Iniciar sesion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registrarse.php">Registrarse</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="administracion.php">Administración</a>
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
            </nav>
        </div>

        <div id="main" class="d-outline-flex justify-content-center align-items-center text-center my-2">

            <div id="row1" class="d-flex mb-2">
                <div id="slider" class="container-fluid carousel slide col-8" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php

                        echo '
                         <div class="carousel-item active" data-bs-interval="7000">
                            <img id="slider-img" src="' . $imageVJ["url_foto"] . '" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="text-danger">"' . $imageVJ["nombreVJ"] . '"</h1>
                            </div>
                        </div>
                    ';
                        while ($resultImg = mysqli_fetch_assoc($runVJ)) {
                            echo '
                         <div class="carousel-item" data-bs-interval="7000">
                            <img id="slider-img" src="' . $resultImg["url_foto"] . '" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="text-danger">"' . $resultImg["nombreVJ"] . '"</h1>
                            </div>
                        </div>
                    ';
                        }
                        ?>
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div id="row2" class="d-flex row mb-2 fs-1">
                <div id="ofertas1" class="container-fluid col-lg-5 col-sm-11">
                    <img class="img-fluid rounded" src="./img/ofertas2.jpg">
                </div>
                <div id="ofertas2" class="container-fluid col-lg-5 col-sm-11">
                    <img class="img-fluid rounded" src="./img/ofertas3.jpg">
                </div>
            </div>

            <div id="row3" class="d-flex mb-2 fs-1">

                <div id="recomendados" class="container-fluid col-11">
                    <a href="">
                        <img class="img-fluid rounded" src="./img/recomendados.jpg">
                    </a>
                </div>

            </div>

            <div id="row4" class="d-flex row mb-2 fs-1">
                <div id="videos1" class="container-fluid col-lg-3 col-sm-11"><iframe width="445" height="245" src="https://www.youtube.com/embed/o3V-GvvzjE4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div id="videos2" class="container-fluid col-lg-3 col-sm-11"><iframe width="445" height="245" src="https://www.youtube.com/embed/CptaXqVY6-E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div id="videos3" class="container-fluid col-lg-3 col-sm-11"><iframe width="445" height="245" src="https://www.youtube.com/embed/F3jePdO9_jc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            </div>
            <div id="row5" class="d-flex mb-2">
                <div id="sliderN" class="container-fluid carousel slide col-8" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php

                        echo ' <a href="https://as.com/meristation/2022/12/20/noticias/1671546763_735511.html"> 
                         <div class="carousel-item active" data-bs-interval="7000">
                            <img id="slider-imgN" src="' . $imageN["fotoN"] . '" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="shadow bg-dark">"' . $imageN["tituloN"] . '"</h2>
                                <p class="shadow bg-dark">"' . $imageN["descripN"] . '"</p>
                            </div>
                        </div>
                        </a>
                    ';
                        while ($resultImgN = mysqli_fetch_assoc($runN)) {
                            echo ' <a href="https://www.nintenderos.com/2022/12/nintendo-recomienda-todos-estos-juegos-para-un-jugador-en-switch/"> 
                            
                         <div class="carousel-item" data-bs-interval="7000">
                            <img id="slider-imgN" src="' . $resultImgN["fotoN"] . '" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="shadow bg-dark">"' . $resultImgN["tituloN"] . '"</h2>
                                <p class="shadow bg-dark">"' . $resultImgN["descripN"] . '"</p>
                            </div>
                            
                        </div>
                        </a>
                    ';
                        }
                        ?>
                        <button class="carousel-control-prev" type="button" data-bs-target="#sliderN" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#sliderN" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#sliderN" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#sliderN" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div id="footer" class="d-outline-flex text-center text-light">
            <div class="d-grid gap-2">
                <button id="btn-back-to-top" class="btn btn-dark fs-5" type="button">Inicio de Página</button>
            </div>
            
            <div class="container-fluid col-10 justify-content-center ">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                    <button type="button" class="btn btn-link text-light">Acerca de nosotros</button>
                </a>
            </div>
        </div>

    </div>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/personal/javascript.js"></script>
</body>

</html>