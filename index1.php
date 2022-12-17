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
                                <a class="nav-link" href="iniciar_sesion.php">Iniciar sesion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registrarse.php">Registrarse</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="administracion.php">Administración</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <div id="main" class="d-outline-flex justify-content-center align-items-center text-center my-2">

            <div id="row1" class="d-flex mb-2">
                <div id="slider" class="container-fluid carousel slide col-8" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="7000">
                            <img id="slider-img" src="img/test/csgo.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-bs-interval="7000">
                            <img id="slider-img" src="img/test/warzone2.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-bs-interval="7000">
                            <img id="slider-img" src="img/test/apex.png" class="d-block w-100">
                        </div>
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
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                <img class="img-fluid rounded" src="./img/recomendados.jpg">
                </a>
                </div>
                
            </div>

            <div id="row4" class="d-flex row mb-2 fs-1">
                <div id="videos1" class="container-fluid col-lg-3 col-sm-11"><iframe width="445" height="245" 
                src="https://www.youtube.com/embed/o3V-GvvzjE4" title="YouTube video player" frameborder="0"
                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                 allowfullscreen></iframe></div>
                <div id="videos2" class="container-fluid col-lg-3 col-sm-11"><iframe width="445" height="245" 
                src="https://www.youtube.com/embed/CptaXqVY6-E" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                 allowfullscreen></iframe></div>
                <div id="videos3" class="container-fluid col-lg-3 col-sm-11"><iframe width="445" height="245" 
                src="https://www.youtube.com/embed/F3jePdO9_jc" title="YouTube video player" frameborder="0"
                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe></div>
            </div>

            <div id="row5" class="d-flex fs-1">
                
                <div id="menu" class="container-fluid fs-5">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid text-light">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index1.php">Acción</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Aventura</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Arcade</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Deportes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Estrategia</a>
                                <li class="nav-item">
                                <a class="nav-link" href="">Simulación</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Juegos de mesa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Juegos musicales</a>
                            </li>
                            </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        </div>

        <div id="footer" class="d-outline-flex text-center text-light">
            <div class="d-grid gap-2">
                <button id="btn-back-to-top" class="btn btn-dark fs-5" type="button">Inicio de Página</button>
            </div>
            <div class="container-fluid col-10 justify-content-center ">
                <button type="button" class="btn btn-link text-light">Acerca de nosotros</button>
            </div>
        </div>

    </div>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/personal/javascript.js"></script>
</body>

</html>