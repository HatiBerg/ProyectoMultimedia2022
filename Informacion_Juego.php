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
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid  fs-1 col-10 justify-content-center ">
            <div id="JuegoSeleccionado" class="container-fluid col-12 my-5">Apex
                <figure class="figure">
                    <img class="img-fluid rounded" src="./img/Apex.jpg">
                    <div id="InformaciónJuego" class="container-fluid col-4">
                        <h1>Acerca del juego</h1>
                        <h4>Apex Legends es un videojuego gratuito perteneciente a los géneros battle royale y hero shooter
                            en primera persona, desarrollado por Respawn Entertainment y publicado por Electronic Arts.</h4>
                        <div id="main" class="d-outline-flex justify-content-center align-items-center text-center my-2">
                            <figcaption class="figure-caption text-end"></figcaption>
                </figure>
                <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/innmNewjkuk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="footer" class="d-outline-flex text-center text-light">
        <div class="d-grid gap-2">
            <button id="btn-back-to-top" class="btn fs-5" type="button">Inicio de Página</button>
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