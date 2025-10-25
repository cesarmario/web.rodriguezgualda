<?PHP
include('conexion.php');
//Filtros   
$categoria = "";
$id = "";
$limit = "";
if (isset($_REQUEST['categoria'])) {
    if (!empty($_REQUEST['propiedad'])) {
        $filtro = " and idCategoria = '" . $_REQUEST['categoria'] . "'";
    }
}

if (isset($_REQUEST['id'])) {
    if (!empty($_REQUEST['propiedad'])) {
        $filtro = " and idBlog = '" . $_REQUEST['id'] . "'";
    }
}

$filtro = $categoria . $id;

if (empty($filtro)) {
    $limit = "LIMIT 2";
}

$queryblog = "SELECT * FROM vista_blog WHERE baja != '1' $filtro ORDER BY fecha DESC $limit";

$rtsblog = mysqli_query($conexion, $queryblog);

while ($blog = mysqli_fetch_assoc($rtsblog)) {

    $queryimagen = "SELECT * FROM imagen WHERE idInmueble = '$blog[idInmueble]' AND baja != '1' ORDER BY ordenImagen ASC LIMIT 1";
    $rtsimagen = mysqli_query($conexion, $queryimagen);
    $img = mysqli_fetch_assoc($rtsimagen);

    $idimg = $img['idImagen'];
    $tpimg = $img['tipoImagen'];

    //Nombre del Mes
    $monthNum = date("m", strtotime($blog['fecha']));
    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
    $monthName = $dateObj->format('F'); // March
    //echo $monthName;

    $nomimg = "gestion/assets/images/blog/" . str_pad($idimg, 8, "0", STR_PAD_LEFT) . "." . $tpimg;

    if (!file_exists($nomimg)) {
        $nomimg = "gestion/assets/images/blog/00000000.png";
    }
    if ($blog['plantasInmueble'] > 0) {
        $plantasInmueble = $blog['plantasInmueble'] . " Planta";
        if ($blog['plantasInmueble'] > 1) {
            $plantasInmueble = $plantasInmueble . "s";
        }
    } else {
        $plantasInmueble = "";
    };
    if ($blog['habitacionesInmueble'] > 0) {
        $habitacionesInmueble = $blog['habitacionesInmueble'] . " Habitacion";
        if ($blog['habitacionesInmueble'] > 1) {
            $habitacionesInmueble = $habitacionesInmueble . "es";
        }
    } else {
        $habitacionesInmueble = "";
    };
    if ($blog['banosInmueble'] > 0) {
        $banosInmueble = $blog['banosInmueble'] . " Baños";
        if ($blog['banosInmueble'] > 1) {
            $banosInmueble = $banosInmueble . "s";
        }
    } else {
        $banosInmueble = "";
    };
    if ($blog['superficieCubiertaInmueble'] > 0) {
        $superficieCubiertaInmueble = $blog['superficieCubiertaInmueble'];
    } else {
        $superficieCubiertaInmueble = "";
    };
    if ($blog['valorInmueble'] > 0) {
        $valorInmueble = $blog['monedaInmueble'] . "</b>&nbsp;" . $blog['valorInmueble'];
    } else {
        $valorInmueble = "Consultar";
    };
    $domicilio = "";
    if (!empty($blog['domicilioCalleInmueble'])) {
        $domicilio .= $blog['domicilioCalleInmueble'];
    }
    if (!empty($blog['domicilioNumeroInmueble'])) {
        $domicilio .= " " . $blog['domicilioNumeroInmueble'];
    }
    if (!empty($blog['domicilioOrientacionInmueble'])) {
        $domicilio .= " " . $blog['domicilioOrientacionInmueble'];
    }
    if (!empty($blog['nombreLocalidad'])) {
        $domicilio .= " - " . $blog['nombreLocalidad'] . "</b>";
    }

    $nombreOperacion = $blog['nombreOperacion'];
    $nombreLocalidad = $blog['nombreLocalidad'];

    $listado .= "<li>";
    $listado .= "<article class='aa-properties-item'>";
    $listado .= "<a href='detalle-inmueble.php?idInmueble=" . $blog['idInmueble'] . "&operacion=" . $blog['idOperacion'] . "&propiedad=" . $blog['idPropiedad'] . "' class='aa-properties-item-img'>";
    $listado .= "<img src='" . $nomimg . "' alt='img'>";
    $listado .= "</a>";
    $listado .= "<div class='aa-tag for-sale'>";
    $listado .= $nombreOperacion;
    $listado .= "</div>";
    $listado .= "<div class='aa-properties-item-content'>";
    $listado .= "<div class='aa-properties-info'>";
    $listado .= "<span>" . $plantasInmueble . "</span>";
    $listado .= "<span>" . $habitacionesInmueble . "</span>";
    $listado .= "<span>" . $banosInmueble . "</span>";
    $listado .= "<span>" . $superficieCubiertaInmueble . "</span>";
    $listado .= "</div>";
    $listado .= "<div class='aa-properties-about'>";
    $listado .= "<h3><a href='detalle-inmueble.php?idInmueble=" . $blog['idInmueble'] . "&operacion=" . $blog['idOperacion'] . "&propiedad=" . $blog['idPropiedad'] . "'>" .  $blog['tituloInmueble'] . "</a></h3>";
    $listado .= "<p>" . $blog['estadoInmueble'] . ".</p>";
    $listado .= "</div>";
    $listado .= "<div class='aa-properties-detial'>";
    $listado .= "<span class='aa-price'>";
    $listado .= $valorInmueble;
    $listado .= "</span>";
    $listado .= "<a href='detalle-inmueble.php?idInmueble=" . $blog['idInmueble'] . "&operacion=" . $blog['idOperacion'] . "&propiedad=" . $blog['idPropiedad'] . "' class='aa-secondary-btn'>Ver detalles</a>";
    $listado .= "</div>";
    $listado .= "</div>";
    $listado .= "</article>";
    $listado .= "</li>";
}
