<?PHP
include('php/list_opciones.php');
include('php/list_inmuebles.php');
include('php/list_inmuebles_ultimos.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Propiedades</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/img-logo/costela-fb.png" type="image/x-icon">


    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body class="aa-price-range">
    <!-- Pre Loader -->
    <div id="aa-preloader-area">
        <div class="pulse"></div>
    </div>
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->


    <!-- Start header section -->
    <header id="aa-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-area">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="aa-header-left">
                                    <div class="aa-telephone-no">
                                        <span class="fa fa-phone"></span> 264 459 5997
                                    </div>
                                    <div class="aa-email hidden-xs">
                                        <span class="fa fa-envelope-o"></span>info@estebancostela.com.ar
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="aa-header-right">
                                    <a href="gestion/login.html" class="aa-login">Ingresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header section -->
    <!-- Start menu section -->
    <section id="aa-menu-area">
        <nav class="navbar navbar-default main-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- Text based logo -->
                    <a class="navbar-brand" href="index.php">
                        <img src="img/img-logo/costela-transparente3.png" width="220px" alt="" />
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active"><a href="propiedades.php">Propiedades</a></li>
                        <li><a href="nosotros.html">Nosotros</a></li>
                        <li><a href="servicios.html">Servicios</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="contacto.html">Contacto <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="contacto.html">Contacto Rápido</a></li>
                                <li><a href="./e/index.php">Tarjeta de Presentación</a></li>
                                <li><a href="turnos.html">Solicitar Turno</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </section>
    <!-- End menu section -->

    <!-- Start Proerty header  -->

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Propiedades</h2>
                        <ol class="breadcrumb">
                            <li><a>Venta</a></li>
                            <li class="active">Alquiler</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->

    <!-- Start Properties  -->
    <section id="aa-properties">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="aa-properties-content">
                        <!-- start properties content head -->
                        <div class="aa-properties-content-head">
                            <div class="aa-properties-content-head-left">
                                <form action="" class="aa-sort-form">
                                    <!-- <label for="">Ordenar por</label>
                                    <select name="">
                                        <option value="1" selected="Default">Default</option>
                                        <option value="2">Nombre</option>
                                        <option value="3">Precio</option>
                                        <option value="4">Fecha</option>
                                    </select> -->
                                </form>
                                <form action="" class="aa-show-form">
                                    <!-- <label for="">Mostrar</label>
                                    <select name="">
                                        <option value="1" selected="12">6</option>
                                        <option value="2">12</option>
                                        <option value="3">24</option>
                                    </select> -->
                                </form>
                            </div>
                            <div class="aa-properties-content-head-right">
                                <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                                <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
                            </div>
                        </div>
                        <!-- Start properties content body -->
                        <div class="aa-properties-content-body">
                            <ul class="aa-properties-nav">
                                <?PHP echo $listado; ?>
                            </ul>
                        </div>
                        <!-- Start properties content bottom -->
                        <!-- <div class="aa-properties-content-bottom">
                            <nav>
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="active"><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->
                    </div>
                </div>
                <!-- Start properties sidebar -->
                <div class="col-md-4">
                    <aside class="aa-properties-sidebar">
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3>Buscador</h3>
                            <form action="propiedades.php">
                                <div class="aa-single-advance-search">
                                    <input type="text" placeholder="Buscar">
                                </div>
                                <div class="aa-single-advance-search">
                                    <select name="propiedad">
                                        <option value="0" selected>Propiedad</option>
                                        <?PHP while ($propiedad = mysqli_fetch_assoc($rtspropiedad)) { ?>
                                            <option value="<?PHP echo $propiedad['idPropiedad']; ?>"> <?PHP echo $propiedad['nombrePropiedad']; ?></option>
                                        <?PHP } ?>
                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select name="operacion">
                                        <option value="0" selected>Operación</option>
                                        <?PHP while ($operacion = mysqli_fetch_assoc($rtsoperacion)) { ?>
                                            <option value="<?PHP echo $operacion['idOperacion']; ?>"> <?PHP echo $operacion['nombreOperacion']; ?></option>
                                        <?PHP } ?>
                                    </select>
                                </div>
                                <div class="aa-single-advance-search">
                                    <select name="localidad">
                                        <option value="0" selected>Localidad</option>
                                        <?PHP while ($localidad = mysqli_fetch_assoc($rtslocalidad)) { ?>
                                            <option value="<?PHP echo $localidad['idLocalidad']; ?>"> <?PHP echo $localidad['nombreLocalidad']; ?></option>
                                        <?PHP } ?>
                                    </select>
                                </div>

                                <div class="aa-single-advance-search">
                                    <input type="submit" value="Buscar" class="aa-search-btn">
                                </div>
                            </form>
                        </div>
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3>Últimos agregados</h3>
                            <?PHP echo $listadoUltimos; ?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- / Properties  -->

    <!-- Footer -->
    <footer id="aa-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-area">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="aa-footer-left">
                                    <p>
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> Todos los derechos reservados | Esteban Costela Propiedades
                                        <br><b>"Excelencia en Negocios Inmobiliarios"</b>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="aa-footer-middle">
                                    <a href="https://www.facebook.com/Estebancostelapropiedades" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/esteban_costela/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/@estebancostelapropiedades4439" target="_blank"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="aa-footer-right">
                                    <a href="index.php">Inicio</a>
                                    <a href="propiedades.php">Propiedades</a>
                                    <a href="nosotros.html">Nosotros</a>
                                    <a href="servicios.html">Servicios</a>
                                    <a href="blog.html">Blog</a>
                                    <a href="contacto.html">Contacto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / Footer -->



    <!-- jQuery library -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="js/slick.js"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="js/nouislider.js"></script>
    <!-- mixit slider -->
    <script type="text/javascript" src="js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
    <!-- Custom js -->
    <script src="js/custom.js"></script>

</body>

</html>