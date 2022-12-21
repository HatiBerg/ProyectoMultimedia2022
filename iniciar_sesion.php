<?php
//if (isset($_COOKIE["EMAIL"])) {
//echo $_COOKIE["EMAIL"];
//}

/*session_start();*/

require 'conexion.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuario WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
        header("location:index1.php");
    } else {
        $message = 'la contraseña no corresponde';
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
                                <a class="nav-link" href="catalogo.php">Catálogo</a>
                            <li class="nav-item">
                                <a class="nav-link" href="">Noticias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Estadísticas</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="iniciar_sesion.php">Iniciar sesion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registrarse.php">Registrarse</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="administracion.php">Administración</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div id="main" class="d-outline-flex justify-content-center align-items-center text-center my-2">


            <h1>Iniciar sesión</h1>
            <span>o <a href="registrarse.php">Registrarse</a></span>

            <?php if (!empty($message)) : ?>
                <p><?= $message ?></p>
            <?php endif; ?>

            <form action="iniciar_sesion.php" method="POST">
                <input name="email" type="text" placeholder="Correo electrónico">
                <input name="password" type="password" placeholder="Contaseña">
                <input type="submit" value="Ingresar">
            </form>
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