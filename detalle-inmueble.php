<?PHP
include('php/det_inmueble.php');
include('php/list_inmuebles_destacados.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalles del Inmueble</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/img-logo/costela-fb.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
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
    <!-- Agregar esta referencia a la librería Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />

    <style>
        /* Add your fullscreen CSS styles here */

        #fullscreen-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            text-align: center;
            z-index: 9999;
        }

        #fullscreen-image {
            max-width: 90%;
            max-height: 90%;
            margin: auto;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        #close-button {
            color: white;
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>

</head>

<body class="aa-price-range">
    <!-- Pre Loader -->
    <div id="aa-preloader-area">
        <div class="pulse"></div>
    </div>
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=5492644595997&text=Hola Esteban, quisiera más información sobre el siguiente inmueble..." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

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
                        <!-- <li><a href="index.php">Inicio</a></li> -->
                        <li><a href="propiedades.php">Volver a Propiedades</a></li>
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
                        <h2>Detalles del Inmueble</h2>
                        <ol class="breadcrumb">
                            <li><a>Analiza a fondo tu próxima propiedad</a></li>
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
                        <!-- Start properties content body -->
                        <div class="aa-properties-details">
                            <!-- <div class="aa-properties-details-img"> -->
                            <!-- <img src="img/img-detalle/1.jpeg" alt="img" onclick="openFullscreen('img/img-detalle/1.jpeg')"> -->
                            <?PHP echo $listadoImg; ?>
                            <!-- </div> -->
                            <div class="aa-properties-info" align="justify">
                                <h2><?PHP echo $tituloInmueble; ?></h2>
                                <span class="aa-price"><?PHP echo $valorInmueble; ?></span>
                                <p>
                                    <?PHP echo $descripcionInmueble; ?>
                                </p>
                                <h4>Características</h4>
                                <div class="col-md-12 tour-wrap">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Operación</th>
                                                <td>
                                                    <p><?PHP echo $nombreOperacion; ?></p>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <!-- END TR-->
                                            <tr>
                                                <th scope="row">Tipo de Propiedad</th>
                                                <td>
                                                    <p><?PHP echo $$nombrePropiedad; ?></p>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <!-- END TR-->
                                            <tr>
                                                <th scope="row">Localización</th>
                                                <td>
                                                    <p><?PHP echo $nombreLocalidad; ?></p>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <!-- END TR-->
                                            <tr>
                                                <th scope="row">Habitaciones</th>
                                                <td>
                                                    <p><?PHP echo $habitacionesInmueble; ?></p>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <!-- END TR-->
                                            <tr>
                                                <th scope="row">Baños</th>
                                                <td>
                                                    <p><?PHP $banosInmueble; ?></p>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <!-- END TR-->
                                            <tr>
                                                <th scope="row">Superficie Cubierta</th>
                                                <td>
                                                    <p><?PHP echo $superficieCubiertaInmueble; ?></p>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <!-- END TR-->
                                            <tr>
                                                <th scope="row">Superficie Total</th>
                                                <td>
                                                    <p><?PHP echo $superficieTotalInmueble; ?></p>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <!-- END TR-->
                                            <tr>
                                                <th scope="row">Incluido</th>
                                                <td class="d-flex">
                                                    <ul>
                                                        <?PHP if ($cocheraInmueble == "Si") {
                                                            echo "<li>Cochera" . $tipoCocheraInmueble . "</li>";
                                                        } ?>
                                                        <?PHP if ($pavimentoInmueble == "Si") {
                                                            echo "<li>Calle pavimentada</li>";
                                                        } ?>
                                                    </ul>
                                                    <ul>
                                                        <?PHP if ($cloacaInmueble == "Si") {
                                                            echo "<li>Cloacas</li>";
                                                        } ?>
                                                        <?PHP if ($gasNaturalInmueble == "Si") {
                                                            echo "<li>Gas Natural</li>";
                                                        } ?>
                                                        <?PHP if ($aguaCorrienteInmueble == "Si") {
                                                            echo "<li>Agua Corriente</li>";
                                                        } ?>
                                                        <?PHP if (!empty($tipoAguaCalienteInmueble)) {
                                                            echo "<li>" . $tipoAguaCalienteInmueble . "</li>";
                                                        } ?>
                                                    </ul>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <!-- END TR-->
                                            <!-- <tr>
                                                <th scope="row">No incluido</th>
                                                <td class="d-flex">
                                                    <ul>
                                                        <li>Mejoras en los últimos 3 años</li>
                                                    </ul>
                                                    <ul>
                                                        <li>Amoblamiento</li>
                                                    </ul>
                                                </td>
                                                <td></td>
                                            </tr> -->
                                            <!-- END TR-->
                                        </tbody>
                                    </table>
                                </div>
                                <?PHP
                                $video = "/gestion/assets/videos/" . str_pad($_REQUEST['idInmueble'], 8, "0", STR_PAD_LEFT) . ".mp4";
                                if (file_exists($_SERVER['DOCUMENT_ROOT'] . $video)) { ?>
                                    <h4>Video de la propiedad</h4>
                                    <video width="auto" height="auto" controls poster="vistaprevia.jpg">
                                        <source src="<?PHP echo $video; ?>" type="video/mp4">
                                    </video>
                                <?PHP } ?>
                                <h4>Ubicación</h4>
                                <p><?PHP echo $domicilio; ?></p>
                                <?PHP if (!empty($ubicacionInmueble)) { ?>

                                    <div id="myMap" name="myMap" style="height: 400px" required></div>
                                    <a href="https://www.google.com/maps?q=<?PHP echo $ubicacionInmueble; ?>&z=17&hl=es" target="_blank" class="btn btn-info">Ver en el Mapa</a>
                                <?PHP } ?>

                                <!-- <h4>Video de la propiedad</h4>
                                <iframe width="100%" height="480" src="https://www.youtube.com/embed/CegXQps0In4" frameborder="0" allowfullscreen></iframe> -->
                                <!-- <h4>Ubicación</h4>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1372.5706790798445!2d-68.49696261960807!3d-31.643826684996043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2ses!4v1692913969628!5m2!1ses-419!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

                            </div>
                            <!-- Properties social share -->
                            <div class="aa-properties-social">
                                <ul>
                                    <li>Visita nuestras Redes</li>
                                    <li><a href="https://www.facebook.com/Estebancostelapropiedades"><i class="fa fa-facebook" target="_blank"></i></a></li>
                                    <li><a href="https://www.instagram.com/esteban_costela/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/@estebancostelapropiedades4439"><i class="fa fa-youtube" target="_blank"></i></a></li>
                                </ul>
                            </div>
                            <!-- Nearby properties -->
                            <div class="aa-nearby-properties">
                                <div class="aa-title">
                                    <h2><?PHP echo $tituloDestacado; ?></h2>
                                    <span></span>
                                </div>
                                <div class="aa-nearby-properties-area">
                                    <div class="row">
                                        <?PHP echo $destacado; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start properties sidebar -->
                <div class="col-md-4">
                    <aside class="aa-properties-sidebar">
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3>Agendá y consultanos</h3>
                            <a href="https://api.whatsapp.com/send?phone=5492644595997&text=Hola Esteban, quisiera más información sobre el siguiente inmueble..." target="_blank"><img src="img/img-qr/v-card.png " width="100% " alt=" "></a>
                        </div>
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar " align="justify ">
                            <h3>Información</h3>
                            <p>
                                Formamos parte del sitio web ENLACE INMOBILIARIO donde corredores inmobiliarios matriculados y de extrema confianza ética irreprochable comparten inmuebles destacados de sus inmobiliarias.
                            </p>
                            <p>
                                <b>Nos distingue la excelencia en negocios inmobiliarios.</b>
                            </p>
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
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js "></script> -->
    <script src="js/jquery.min.js "></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js "></script>
    <!-- slick slider -->
    <script type="text/javascript " src="js/slick.js "></script>
    <!-- Price picker slider -->
    <script type="text/javascript " src="js/nouislider.js "></script>
    <!-- mixit slider -->
    <script type="text/javascript " src="js/jquery.mixitup.js "></script>
    <!-- Add fancyBox -->
    <script type="text/javascript " src="js/jquery.fancybox.pack.js "></script>
    <!-- Custom js -->
    <script src="js/custom.js "></script>

    <div id="fullscreen-container">
        <span id="close-button" onclick="closeFullscreen()">Volver</span>
        <img id="fullscreen-image" src="" alt="Fullscreen Image">
    </div>
    <script>
        function openFullscreen(imageSrc) {
            var fullscreenContainer = document.getElementById("fullscreen-container");
            var fullscreenImage = document.getElementById("fullscreen-image");

            fullscreenImage.src = imageSrc;
            fullscreenContainer.style.display = "block";
        }

        function closeFullscreen() {
            var fullscreenContainer = document.getElementById("fullscreen-container");
            fullscreenContainer.style.display = "none";
        }
    </script>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin="">
    </script>
    <!--script src="assets/js/mapview.js"></script-->

    <script>
        const tilesProvider = "	https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"

        var latlng = "<?= $ubicacionInmueble ?>";
        //console.log("Ubicacion: " + latlng); 

        let coordenadas = latlng.split(',')
        let myMap = L.map('myMap').setView(coordenadas, 15)

        //let myMap = L.map('myMap').setView([-31.5373, -68.5251], 14)

        L.tileLayer(tilesProvider, {
            maxZoom: 18,
        }).addTo(myMap)

        let marker = L.marker(coordenadas).addTo(myMap)
    </script>
</body>

</html>