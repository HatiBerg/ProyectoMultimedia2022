<?php
include 'conexion.php';

/*$message = '';

if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['tipoUser'])) {
    if ($_POST['password'] === $_POST['confirm_password']) {
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
    } else {
        $message = 'Las contraseñas no coinciden';
    }
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GameCenter Admin Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="lib/adminlte/plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="lib/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="lib/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="lib/adminlte/plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="lib/adminlte/dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="lib/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="lib/adminlte/plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="lib/adminlte/plugins/summernote/summernote-bs4.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed dark-mode">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="administracion.php" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index1.php" class="nav-link">Tienda</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="administracion.php" class="brand-link">
                <span class="brand-text font-weight-light">GameCenter Admin Panel</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Administrador</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="administracion.php" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-gamepad"></i>
                                <p>
                                    Videojuegos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="añadir_juego.php" class="nav-link ">
                                        <i class="nav-icon fas fa-plus"></i>
                                        <p>Añadir Juego</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="editar_juego.php" class="nav-link">
                                        <i class="nav-icon fas fa-edit"></i>
                                        <p>Editar Juego</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="eliminar_juego.php" class="nav-link">
                                        <i class="nav-icon fas fa-trash"></i>
                                        <p>Eliminar Juego</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="añadir_usuario.php" class="nav-link active">
                                        <i class="nav-icon fas fa-plus"></i>
                                        <p>Añadir usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="editar_usuario.php" class="nav-link">
                                        <i class="nav-icon fas fa-edit"></i>
                                        <p>Editar usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="eliminar_usuario.php" class="nav-link">
                                        <i class="nav-icon fas fa-trash"></i>
                                        <p>Eliminar usuarios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Noticias
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="añadir_noticia.php" class="nav-link">
                                        <i class="nav-icon fas fa-plus"></i>
                                        <p>Añadir noticia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="editar_noticia.php" class="nav-link">
                                        <i class="nav-icon fas fa-edit"></i>
                                        <p>Editar noticia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="eliminar_noticia.php" class="nav-link">
                                        <i class="nav-icon fas fa-trash"></i>
                                        <p>Eliminar noticia</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-image"></i>
                                <p>
                                    Slider
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="añadir_imagen_slider.php" class="nav-link">
                                        <i class="nav-icon fas fa-plus"></i>
                                        <p>Añadir imagen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="eliminar_imagen_slider.php" class="nav-link">
                                        <i class="nav-icon fas fa-trash"></i>
                                        <p>Eliminar imagen</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Añadir Juego</h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-10 mx-auto">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Ingrese la Información del Juego</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body border-end border-5">
                                    <form class="mx-5 mt-4 needs-validation" novalidate action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Correo Electrónico</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="" required>
                                                <div class="invalid-feedback">Por favor ingrese su correo electrónico</div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="form-label">Contraseña</label>
                                                <input type="text" class="form-control" id="password" name="password" placeholder="" required>
                                                <div class="invalid-feedback">Por favor ingrese una contraseña</div>
                                            </div>
                                            <div class="form-group">
                                                <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                                                <input type="text" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="" required>
                                                <div class="invalid-feedback">Por favor confirmé su contraseña</div>
                                            </div>
                                            <label for="tipoUsuario" class="form-label">Tipo de Usuario</label>
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="radio" name="CLIENTE" id="CLIENTE" value="CLIENTE" checked>
                                                <label class="form-check-label" for="CLIENTE">
                                                    Cliente
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="radio" name="EMPLEADO" id="EMPLEADO" value="EMPLEADO">
                                                <label class="form-check-label" for="EMPLEADO">
                                                    Empleado
                                                </label>
                                            </div>
                                            <div class="form-group mt-4">
                                                <label for="rol" class="form-label">Rol</label>
                                            </div>
                                            <select class="form-select mb-2" aria-label="Rol">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" name="añadirUsuario" class="btn btn-primary btn-lg">Añadir Usuario</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.row (main row) -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021
                <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="lib/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="lib/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="lib/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="lib/adminlte/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="lib/adminlte/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="lib/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="lib/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="lib/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="lib/adminlte/plugins/moment/moment.min.js"></script>
    <script src="lib/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="lib/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="lib/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="lib/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="lib/adminlte/dist/js/adminlte.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>