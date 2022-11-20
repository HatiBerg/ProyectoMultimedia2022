<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lib/bootstrap/bootstrap.css">
</head>

<body>
    <div id="wrapper" class="container-fluid col-11">

        <div id="header" class="container-fluid bg-info text-center">
            <div class="container-fluid fs-1">Banner</div>
        </div>

        <div id="menu" class="container-fluid bg-primary fs-4">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
                                <a class="nav-link" href="">Catálogo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Iniciar sesion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Registrarse</a>
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

            <div id="row2" class="d-flex mb-2 fs-1">
                <div id="ofertas1" class="container-fluid col-6 bg-primary">ofertas1</div>
                <div id="ofertas2" class="container-fluid col-4 bg-primary">ofertas2</div>
            </div>

            <div id="row3" class="d-flex mb-2 fs-1">
                <div id="recomendados" class="container-fluid col-11 bg-danger">recomendados</div>
            </div>

            <div id="row4" class="d-flex mb-2 fs-1">
                <div id="videos1" class="container-fluid col-3 bg-primary">videos1</div>
                <div id="videos2" class="container-fluid col-3 bg-primary">videos2</div>
                <div id="videos3" class="container-fluid col-3 bg-primary">videos3</div>
            </div>

            <div id="row5" class="d-flex fs-1">
                <div id="categorias" class="container-fluid col-11 bg-danger">categorias</div>
            </div>

        </div>

        <div id="footer" class="d-flex justify-content-center text-center bg-secondary">
            <div class="d-flex">fotter</div>
        </div>

    </div>
    <script src="lib/bootstrap/bootstrap.js"></script>
</body>

</html>