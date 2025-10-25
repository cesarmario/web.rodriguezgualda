<?PHP
include('php/list_categorias.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>

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

<body>

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
                        <li><a href="propiedades.php">Propiedades</a></li>
                        <li><a href="nosotros.html">Nosotros</a></li>
                        <li><a href="servicios.html">Servicios</a></li>
                        <li class="active"><a href="blog.html">Blog</a></li>
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
    <section id="aa-property-header2">

    </section>
    <!-- End Proerty header  -->

    <!-- Start Blog  -->
    <section id="aa-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-title">
                        <h2>BLOG</h2>
                        <span></span>
                        <p>
                            Enterate de las últimas novedades
                        </p>
                    </div>
                    <div class="aa-blog-area">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="aa-blog-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <article class="aa-blog-single aa-blog-details">
                                                <figure class="aa-blog-img">
                                                    <a href="#"><img alt="img" src="img/img-blog/portada-1.png"></a>
                                                    <span class="aa-date-tag">21 de Septiembre de 2023</span>
                                                </figure>
                                                <div class="aa-blog-single-content">
                                                    <h2>Recomendaciones antes de alquilar</h2>
                                                    <div class="aa-blog-single-bottom">
                                                        <a class="aa-blog-author" href="nosotros.html"><i class="fa fa-user"></i> Esteban Costela</a>
                                                    </div>
                                                    <p>
                                                        Después de hacer una búsqueda intensiva por nuestra web, y que
                                                        tengas en carpeta varias opciones, es importante tener en cuenta
                                                        las siguientes recomendaciones:
                                                    </p>
                                                    <p>
                                                        Realiza toda tramitación siempre con Corredores Inmobiliarios
                                                        matriculados, es la forma de garantizar que la operación llegue
                                                        a buen puerto.
                                                    </p>
                                                    <p>
                                                        Asesorate con agentes matriculados al firmar el Contrato de
                                                        Alquiler, el mismo es un instrumento legal importante y debe ser
                                                        redactado y supervisado por profesionales.
                                                    </p>
                                                    <p>
                                                        Pregunta condiciones de la propiedad, sobre reuniones
                                                        familiares, si aceptan o no mascotas y cual son los horarios
                                                        prudentes para poner música.
                                                    </p>
                                                    <p>
                                                        No solo te centres en la propiedad sino también en la zona, si
                                                        hay plazas o parques para niños, colegios o guarderías, paradas
                                                        de colectivo, salas de urgencia, etc.
                                                    </p>
                                                    <p>
                                                        Seguramente hay miles de preguntas más, no dudes en
                                                        contactarnos.
                                                    </p>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Related blog post -->
                                        <div class="col-md-12 ">
                                            <div class="aa-blog-related-post ">
                                                <div class="aa-title ">
                                                    <h2>OTRAS NOVEDADES</h2>
                                                    <span></span>
                                                </div>
                                                <div class="aa-blog-related-post-area ">
                                                    <div class="row ">
                                                        <div class="col-md-6 col-sm-6 ">
                                                            <article class="aa-blog-single ">
                                                                <figure class="aa-blog-img ">
                                                                    <a href="# "><img src="img/img-servicios/servicios-documentos.png " alt="img "></a>
                                                                    <span class="aa-date-tag ">20 de Agosto de
                                                                        2023</span>
                                                                </figure>
                                                                <div class="aa-blog-single-content ">
                                                                    <h3>
                                                                        <a href="# ">La importancia de los contratos
                                                                            bien hechos.</a>
                                                                    </h3>
                                                                    <p>Conocé a fondo todo lo que debes saber acerca de
                                                                        los contratos de compra-venta, comodato o
                                                                        alquiler. Te lo explico de forma sencilla y
                                                                        entendible.
                                                                    </p>
                                                                    <div class="aa-blog-single-bottom ">
                                                                        <a href="nosotros.html" class="aa-blog-author "><i class="fa fa-user "></i> Por Esteban
                                                                            Costela</a>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 ">
                                                            <article class="aa-blog-single ">
                                                                <figure class="aa-blog-img ">
                                                                    <a href="# "><img src="img/img-servicios/servicios-marketing.png " alt="img "></a>
                                                                    <span class="aa-date-tag ">15 de Julio de
                                                                        2023</span>
                                                                </figure>
                                                                <div class="aa-blog-single-content ">
                                                                    <h3><a href="# ">El uso del marketing para
                                                                            promocionar tus propiedades.</a></h3>
                                                                    <p>Las redes sociales son importantes para poder
                                                                        alcanzar tus metas. Desde Esteban Costela
                                                                        Propiedades te ayuidamos a potenciar tu
                                                                        transacción.
                                                                    </p>
                                                                    <div class="aa-blog-single-bottom ">
                                                                        <a href="nosotros.html" class="aa-blog-author "><i class="fa fa-user "></i> Por Esteban
                                                                            Costela</a>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Start blog sidebar -->
                            <div class="col-md-4 ">
                                <aside class="aa-blog-sidebar ">
                                    <!-- Start single sidebar -->
                                    <div class=f "aa-blog-sidebar-single ">
                                        <form action=" ">
                                            <div class="aa-blog-search ">
                                                <input class="aa-search-text " type="text " placeholder="Buscar... ">
                                                <button class="aa-search-submit " type="submit ">
                                                    <i class="fa fa-search "></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Start single sidebar -->
                                    <div class="aa-blog-sidebar-single ">
                                        <h3>Categorías</h3>
                                        <ul class="aa-blog-catg ">
                                            <!-- <li><a href="blog.html ">Propiedades</a> <span>14</span></li> -->
                                            <?PHP echo $filtroCategorias; ?>
                                        </ul>
                                    </div>

                                    <!-- Start single sidebar -->
                                    <div class="aa-blog-sidebar-single ">
                                        <h3>Publicaciones recientes</h3>
                                        <div class="aa-blog-recent-post ">
                                            <div class="media ">
                                                <div class="media-left ">
                                                    <a href="# ">
                                                        <img alt="img " src="img/img-blog-reciente/ley-alquiler.jpeg " class="media-object ">
                                                    </a>
                                                </div>
                                                <div class="media-body ">
                                                    <h4 class="media-heading "><a href="# ">Ley de alquiler</a></h4>
                                                    <p>Todo lo referido a esta Ley de la que tanto se habló.</p>
                                                    <span>21 de Septiembre de 2023</span>
                                                </div>
                                            </div>
                                            <div class="media ">
                                                <div class="media-left ">
                                                    <a href="# ">
                                                        <img alt="img " src="img/img-blog-reciente/mascotas.jpeg " class="media-object ">
                                                    </a>
                                                </div>
                                                <div class="media-body ">
                                                    <h4 class="media-heading "><a href="# ">Sobre las mascotas</a></h4>
                                                    <p>Tu mascota es como tu familia, te informamos que debes hacer.</p>
                                                    <span>4 de Septiembre de 2023</span>
                                                </div>
                                            </div>
                                            <div class="media ">
                                                <div class="media-left ">
                                                    <a href="# ">
                                                        <img alt="img " src="img/img-blog-reciente/cultivo.jpeg " class="media-object ">
                                                    </a>
                                                </div>
                                                <div class="media-body ">
                                                    <h4 class="media-heading "><a href="# ">Terrenos para cultivo</a>
                                                    </h4>
                                                    <p>Entrevistamos a un especialista en recursos agrarios.</p>
                                                    <span>30 de Agosto de 2023</span>
                                                </div>
                                            </div>
                                            <div class="media ">
                                                <div class="media-left ">
                                                    <a href="# ">
                                                        <img alt="img " src="img/img-blog-reciente/vecino.jpeg " class="media-object ">
                                                    </a>
                                                </div>
                                                <div class="media-body ">
                                                    <h4 class="media-heading "><a href="# ">Atento inquilino</a></h4>
                                                    <p>Ser inquilino e tu casa también es saber convivir al vecino.</p>
                                                    <span>19 de Junio de 2023</span>
                                                </div>
                                            </div>
                                            <div class="media ">
                                                <div class="media-left ">
                                                    <a href="# ">
                                                        <img alt="img " src="img/img-blog-reciente/matriculaciones.jpeg " class="media-object ">
                                                    </a>
                                                </div>
                                                <div class="media-body ">
                                                    <h4 class="media-heading "><a href="# ">Matriculaciones</a></h4>
                                                    <p>Te cuento de la importancia de elegir a tu gestor matriculado.
                                                    </p>
                                                    <span>5 de Mayo de 2023</span>
                                                </div>
                                            </div>
                                            <div class="media ">
                                                <div class="media-left ">
                                                    <a href="# ">
                                                        <img alt="img " src="img/img-blog-reciente/cursos.jpeg " class="media-object ">
                                                    </a>
                                                </div>
                                                <div class="media-body ">
                                                    <h4 class="media-heading "><a href="# ">Cursos para Agentes</a></h4>
                                                    <p>Dictamos un curso para que te vayas acercando al mundo
                                                        inmobiliario.
                                                    </p>
                                                    <span>16 de Abril de 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Blog  -->

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
    <div id="fb-root "></div>
    <script async defer crossorigin="anonymous " src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v18.0 " nonce="txoN43wE "></script>
</body>

</html>