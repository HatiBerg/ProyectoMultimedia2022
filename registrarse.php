<?php
require 'conexion.php';

$message = '';


/*if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $consultaEmail = "SELECT COUNT(id) AS existeEmail FROM usuario WHERE email = {$_POST['email']}";
    $runEmail = mysqli_query($conexion, $consultaEmail);
    $existeEmail = mysqli_fetch_array($runEmail);

    if ($existeEmail['existeEmail'] = 0) {
        $sql = "INSERT INTO usuario (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);
        if ($stmt->execute()) {
            $message = 'Usuario creado';
        } else {
            $message = 'Error al crear usuario';
        }
    } else {
        $message = 'El usuario ya existe';
    }
}
*/
if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['tipoUser'])) {

    //comprobación de datos duplicados
    $existeEmail = $conn->prepare("SELECT * FROM usuario WHERE email=:email;");
    $existeEmail->bindParam(":email", $_POST['email']);
    $existeEmail->execute();

    if ($existeEmail->rowCount() >= 1) {
        $message = 'Este correo eletrónico ya esta en uso';
    } else {
        $sql = "INSERT INTO usuario (email, password, tipoUser) VALUES (:email, :password, :tipoUser)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':tipoUser', $_POST['tipoUser']);

        if ($stmt->execute()) {
            $maxUsers = "SELECT MAX(id) AS max FROM usuario";
            $runMaxUsers = mysqli_query($conexion, $maxUsers);
            $resultMaxUsers = mysqli_fetch_array($runMaxUsers);
            $addCustomer = "INSERT INTO cliente(id) VALUES({$resultMaxUsers['max']})";
            if (mysqli_query($conexion, $addCustomer)) {
                $message = 'Usuario creado';
            }
        } else {
            $message = 'Error al crear usuario';
        }
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
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="lib/personal/style.css">
    <link rel="stylesheet" href="lib/bootstrap/bootstrap.css">

</head>

<body>
    <div id="wrapper" class="">

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
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="iniciar_sesion.php">Iniciar sesion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="registrarse.php">Registrarse</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="administracion.php">Administración</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>

        <div id="main" class="d-outline-flex justify-content-center align-items-center text-center my-5">

            <?php if (!empty($message)) : ?>
                <p><?= $message ?></p>
            <?php endif; ?>
            <h1>Registarse</h1>
            <span>o <a href="iniciar_sesion.php">Iniciar sesión</a></span>

            <form action="registrarse.php" method="POST">
                <input name="email" type="text" placeholder="Correo electrónico">
                <input name="password" type="password" placeholder="Contraseña">
                <input name="confirm_password" type="password" placeholder="Confirmar contraseña">
                <input name='tipoUser' type='hidden' value="CLIENTE">
                <input type="submit" value="Registrar datos">
            </form>
        </div>

        <div id="footer" class="d-outline-flex text-center  text-light">
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