<?php
include 'conexion.php';
$consultaVJ = "SELECT * FROM `videojuego`";
$runVJ = mysqli_query($conexion, $consultaVJ);

if (isset($_REQUEST['editGame'])) {
    $consultaDatosVJ = "SELECT * FROM `videojuego` WHERE idVJ = {$_REQUEST['idVJ']}";
    $runDatosVJ = mysqli_query($conexion, $consultaDatosVJ);
    $rowDatosVJ = mysqli_fetch_assoc($runDatosVJ);
}

if (isset($_REQUEST['subirCambios'])) {
    if (($_REQUEST['nombreVJ'] == "") || ($_REQUEST['descripVJ'] == "") || ($_REQUEST['fechaCrea'] == "") || ($_REQUEST['editorVJ'] == "") || ($_REQUEST['desarrolladorVJ'] == "") || ($_REQUEST['precio'] == "")) {
        echo "Rellene todos los campos";
    } else {
        $nombreVJ = $_POST['nombreVJ'];
        $descripVJ = $_POST['descripVJ'];
        $fechaCrea = $_POST['fechaCrea'];
        $editorVJ = $_POST['editorVJ'];
        $desarrolladorVJ = $_POST['desarrolladorVJ'];
        $precio = $_POST['precio'];
        $estadoSubida = 1;

        $actualizar = "UPDATE videojuego SET nombreVJ= '$nombreVJ', descripVJ= '$descripVJ',  fechaCrea= '$fechaCrea',  editorVJ= '$editorVJ', desarrolladorVJ= '$desarrolladorVJ',  precio= $precio WHERE idVJ = {$_REQUEST['idVJ']}";

        if (isset($_FILES['url_foto'])) {
            $url_foto = $_FILES['url_foto'];
            $estadoFoto = 1; // estado de subida del formulario | Estados posibles ==> 0 = Error / 1 = Subir formulario

            $name_file = "img_game_" . $_REQUEST['idVJ'];
            $target_dir = "img/game/";
            $target_file = $target_dir . $name_file . '.jpg';
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $check = getimagesize($url_foto["tmp_name"]);

            //Verifica que sea una imagen
            if ($check == false) {
                $estadoFoto = 0;
                echo "El archivo no es una imagen";
                echo "<br>";
            }
            //Verificar que solo sean archivos .jpg .png .jpng
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $estadoFoto = 0;
                echo "El imagen no es de un formato valido, solo se adminten los formatos .jpg / .png / .jpng";
                echo "<br>";
            }

            //Verifica el tama??o m??ximo de la imagen sea 10MB (10mb = 10485760  bytes)
            if ($url_foto["size"] > 10485760) {
                $estadoFoto = 0;
                echo "La imagen demasiado grande, por favor use otra imagen";
                echo "<br>";
            }

            if ($estadoFoto == 1) {
                move_uploaded_file($url_foto["tmp_name"], $target_file);
            }
        }
        if ($$estadoSubida = 1) {
            if (mysqli_query($conexion, $actualizar)) {
                header('Location:editar_juego.php');
                echo "El juego se ha actualizar";
            } else {
                echo "Error: El juego no se pudo actualizar";
                echo "<br>";
            }
        } else {
            echo "Error: El juego no se pudo actualizar";
            echo "<br>";
        }
    }
}
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
    <!-- DataTables -->
    <link rel="stylesheet" href="lib/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="lib/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="lib/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
                                    <a href="a??adir_juego.php" class="nav-link">
                                        <i class="nav-icon fas fa-plus"></i>
                                        <p>A??adir Juego</p>
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
                                    <a href="a??adir_usuario.php" class="nav-link">
                                        <i class="nav-icon fas fa-plus"></i>
                                        <p>A??adir usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="editar_usuario.php" class="nav-link active">
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
                                    <a href="a??adir_noticia.php" class="nav-link">
                                        <i class="nav-icon fas fa-plus"></i>
                                        <p>A??adir noticia</p>
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
                                    <a href="a??adir_imagen_slider.php" class="nav-link">
                                        <i class="nav-icon fas fa-plus"></i>
                                        <p>A??adir imagen</p>
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
                            <h1 class="m-0">Editar Juego</h1>
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
                        <div class="col-4 mx-auto">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Ingrese la Informaci??n del Juego</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    ?>
                                    <form class="mx-5 mt-4 needs-validation" novalidate action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="nombreVJ">Nombre del Juego</label>
                                                <input type="text" class="form-control" id="nombreVJ" name="nombreVJ" placeholder="" value="<?php if (isset($rowDatosVJ['nombreVJ'])) {
                                                                                                                                                echo $rowDatosVJ['nombreVJ'];
                                                                                                                                            } ?>" required>
                                                <div class="invalid-feedback">Por favor ingrese un nombre para el juego</div>
                                            </div>
                                            <div class="form-group">
                                                <label for="descripVJ">Descripci??n del Juego</label>
                                                <textarea class="form-control" id="descripVJ" name="descripVJ" rows="5" placeholder="" required><?php if (isset($rowDatosVJ['descripVJ'])) {
                                                                                                                                                    echo $rowDatosVJ['descripVJ'];
                                                                                                                                                } ?></textarea>
                                                <div class="invalid-feedback">Por favor ingrese una descripci??n para el juego</div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fechaCrea">Fecha de Creaci??n del Juego</label>
                                                <input type="date" class="form-control" id="fechaCrea" name="fechaCrea" placeholder="" value="<?php if (isset($rowDatosVJ['fechaCrea'])) {
                                                                                                                                                    echo $rowDatosVJ['fechaCrea'];
                                                                                                                                                } ?>" required>
                                                <div class="invalid-feedback">Por favor ingrese una fecha para el juego</div>
                                            </div>
                                            <div class="form-group">
                                                <label for="editorVJ">Editor del Juego</label>
                                                <input type="text" class="form-control" id="editorVJ" name="editorVJ" placeholder="" value="<?php if (isset($rowDatosVJ['editorVJ'])) {
                                                                                                                                                echo $rowDatosVJ['editorVJ'];
                                                                                                                                            } ?>" required>
                                                <div class="invalid-feedback">Por favor ingrese un editor para el juego</div>
                                            </div>
                                            <div class="form-group">
                                                <label for="desarrolladorVJ">Desarrollador del Juego</label>
                                                <input type="text" class="form-control" id="desarrolladorVJ" name="desarrolladorVJ" placeholder="" value="<?php if (isset($rowDatosVJ['desarrolladorVJ'])) {
                                                                                                                                                                echo $rowDatosVJ['desarrolladorVJ'];
                                                                                                                                                            } ?>" required>
                                                <div class="invalid-feedback">Por favor ingrese un desarrollador para el juego</div>
                                            </div>
                                            <div class="form-group">
                                                <label for="precio">Precio del Juego</label>
                                                <input type="number" class="form-control" id="precio" name="precio" placeholder="" min="0" max="120000" value="<?php if (isset($rowDatosVJ['precio'])) {
                                                                                                                                                                    echo $rowDatosVJ['precio'];
                                                                                                                                                                } ?>" required>
                                                <div class="invalid-feedback">Por favor ingrese un precio para el juego</div>
                                            </div>
                                            <div class="form-check mt-4 mb-4">
                                                <input class="form-check-input" type="checkbox" value="" id="cambiarImagen" name="cambiarImagen">
                                                <label class="form-check-label" for="cambiarImagen">Cambiar imagen</label>
                                            </div>
                                            <div class="form-group" class="form-label">
                                                <label for="url_foto">Foto del juego</label>
                                                <input type="file" class="form-control-file" id="url_foto" name="url_foto" placeholder="" disabled>
                                                <div class="invalid-feedback">Por favor ingrese una imagen para el juego</div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <input type='hidden' name='idVJ' value=" <?php echo $rowDatosVJ['idVJ'] ?>">
                                            <button type="submit" name="subirCambios" class="btn btn-primary">Editar videojuego</button>
                                        </div>
                                    </form>
                                    </div">
                                </div>
                                <!-- /.row (main row) -->
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Juegos Registrados en la Base de Datos</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="tabla_juegos" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Fecha de Creaci??n</th>
                                                <th>Editor</th>
                                                <th>Desarrollador</th>
                                                <th>Precio</th>
                                                <th></th>
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
                                                            <td>" . $result['desarrolladorVJ'] . "</td>
                                                            <td>" . "$ " . $result['precio'] . "</td>
                                                            <td><form action='' method='POST'>
                                                            <input type='hidden' name='idVJ' value=" . $result['idVJ'] . ">
                                                            <input type='submit' class='btn btn-sm btn-warning' name='editGame' value='Editar'>
                                                            </form></td>
                                                        </tr>  
                                                    ";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.row (main row) -->
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
    <!-- DataTables  & Plugins -->
    <script src="lib/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="lib/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="lib/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="lib/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="lib/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="lib/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="lib/adminlte/plugins/jszip/jszip.min.js"></script>
    <script src="lib/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="lib/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="lib/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="lib/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="lib/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $('#tabla_juegos').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
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
    <script>
        document.getElementById('cambiarImagen').onchange = function() {
            document.getElementById('url_foto').disabled = !this.checked;
            document.getElementById('url_foto').required = this.checked;
        };
    </script>
    <script>
        $(document).ready(function() {
            maxFileSize = 10 * 1024 * 1024; // 10MB

            $("#url_foto").change(function() {
                fileSize = this.files[0].size;

                if (fileSize > maxFileSize) {
                    this.setCustomValidity("El archivo es demasiado grande, solo se admiten 10MB m??ximo");
                    this.reportValidity();
                } else {
                    this.setCustomValidity("");
                }
            });
        });
    </script>
</body>

</html>