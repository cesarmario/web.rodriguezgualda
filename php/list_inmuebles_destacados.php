<?PHP
include('conexion.php');
//Filtros   
$propiedad = "";
$operacion = "";

if (isset($_REQUEST['propiedad'])) {
    if (!empty($_REQUEST['propiedad'])) {
        $propiedad = " and idPropiedad = '" . $_REQUEST['propiedad'] . "'";
    }
}
if (isset($_REQUEST['operacion'])) {
    if (!empty($_REQUEST['operacion'])) {
        $operacion = " and idOperacion = '" . $_REQUEST['operacion'] . "'";
    }
}

$filtro = $propiedad . $operacion;

$queryinmueblesdest = "SELECT * FROM vista_inmuebles WHERE baja != '1' and idInmueble != '$_REQUEST[idInmueble]' $filtro ORDER BY fecha DESC LIMIT 2";

$rtsinmueblesdest = mysqli_query($conexion, $queryinmueblesdest);

$tituloDestacado = "";
$destacado = "";
while ($inmueblesdest = mysqli_fetch_assoc($rtsinmueblesdest)) {

    $tituloDestacado = "Propiedades Similares";
    $tituloInmuebleDest = $inmueblesdest['tituloInmueble'];
    $queryimagenDest = "SELECT * FROM imagen WHERE idInmueble = '$inmueblesdest[idInmueble]' AND baja != '1' ORDER BY ordenImagen ASC LIMIT 1";
    $rtsimagenDest = mysqli_query($conexion, $queryimagenDest);
    $imgDest = mysqli_fetch_assoc($rtsimagenDest);
    $idimgDest = $imgDest['idImagen'];
    $tpimgDest = $imgDest['tipoImagen'];
    $nomimgDest = "gestion/assets/images/inmuebles/" . str_pad($idimgDest, 8, "0", STR_PAD_LEFT) . "." . $tpimgDest;

    if (!file_exists($nomimgDest)) {
        $nomimgDest = "gestion/assets/images/inmuebles/00000000.png";
    }

    if ($inmueblesdest['plantasInmueble'] > 0) {
        $plantasInmuebleDest = $inmueblesdest['plantasInmueble'] . " Planta";
        if ($inmueblesdest['plantasInmueble'] > 1) {
            $plantasInmuebleDest = $plantasInmuebleDest . "s";
        }
    } else {
        $plantasInmuebleDest = "";
    };

    if ($inmueblesdest['habitacionesInmueble'] > 0) {
        $habitacionesInmuebleDest = $inmueblesdest['habitacionesInmueble'] . "<sup>+</sup>";
    } else {
        $habitacionesInmuebleDest = "";
    };
    if ($inmueblesdest['banosInmueble'] > 0) {
        $banosInmuebleDest = $inmueblesdest['banosInmueble'];
    } else {
        $banosInmuebleDest = "";
    };
    if ($inmueblesdest['superficieCubiertaInmueble'] > 0) {
        $superficieCubiertaInmuebleDest = $inmueblesdest['superficieCubiertaInmueble'];
    } else {
        $superficieCubiertaInmuebleDest = "";
    };
    if ($inmueblesdest['valorInmueble'] > 0) {
        $valorInmuebleDest = $inmueblesdest['monedaInmueble'] . "</b>&nbsp;" . $inmueblesdest['valorInmueble'];
    } else {
        $valorInmuebleDest = "Consultar";
    };
    $domicilio = "";
    if (!empty($inmueblesdest['domicilioNumeroInmueble'])) {
        $domicilio .= " " . $inmueblesdest['domicilioNumeroInmueble'];
    }
    if (!empty($inmueblesdest['domicilioOrientacionInmueble'])) {
        $domicilio .= " " . $inmueblesdest['domicilioOrientacionInmueble'];
    }
    if (!empty($inmueblesdest['nombreLocalidad'])) {
        $domicilio .= "<br>&nbsp;<b>" . $inmueblesdest['nombreLocalidad'] . "</b>";
    }

    $nombreLocalidad = $inmueblesdest['nombreLocalidad'];
    $nombreOperacion = $inmueblesdest['nombreOperacion'];

    $destacado .= " <div class='col-md-6'>";
    $destacado .= "<article class='aa-properties-item'>";
    $destacado .= "<a class='aa-properties-item-img' href='detalle-inmueble.php?idInmueble=" . $inmueblesdest['idInmueble'] . "&operacion=" . $inmueblesdest['idOperacion'] . "&propiedad=" . $inmueblesdest['idPropiedad'] . "'>";
    $destacado .= "<img alt='img' src='" . $nomimgDest . "'></a>";
    $destacado .= "<div class='aa-tag for-sale'>" . $nombreOperacion . "</div>";
    $destacado .= "<div class='aa-properties-item-content'>";
    $destacado .= "<div class='aa-properties-info'>";
    $destacado .= "<span>" . $plantasInmuebleDest . "</span>";
    $destacado .= "<span>" . $habitacionesInmuebleDest . "</span>";
    $destacado .= "<span>" . $banosInmuebleDest . "</span>";
    $destacado .= "<span>" . $superficieCubiertaInmuebleDest . "</span>";
    $destacado .= "</div>";
    $destacado .= "<div class='aa-properties-about'>";
    $destacado .= "<h3><a href='detalle-inmueble.php?idInmueble=" . $inmueblesdest['idInmueble'] . "&operacion=" . $inmueblesdest['idOperacion'] . "&propiedad=" . $inmueblesdest['idPropiedad'] . "'>" . $tituloInmuebleDest . "</a></h3>";
    $destacado .= "<p>" . $inmuebles['estadoInmueble'] . "</p>";
    $destacado .= "</div>";
    $destacado .= "<div class='aa-properties-detial'>";
    $destacado .= "<span class='aa-price'>" . $valorInmuebleDest . "</span>";
    $destacado .= "<a href='detalle-inmueble.php?idInmueble=" . $inmueblesdest['idInmueble'] . "&operacion=" . $inmueblesdest['idOperacion'] . "&propiedad=" . $inmueblesdest['idPropiedad'] . "'>Ver detalles</a>";
    $destacado .= "</div>";
    $destacado .= "</div>";
    $destacado .= "</article>";
    $destacado .= "</div>";
}
