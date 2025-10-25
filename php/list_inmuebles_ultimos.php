<?PHP
include('conexion.php');

$queryinmuebles = "SELECT * FROM vista_inmuebles WHERE baja != '1' ORDER BY fecha DESC LIMIT 9";

$rtsinmuebles = mysqli_query($conexion, $queryinmuebles);

$listadoUltimos = "";

while ($inmuebles = mysqli_fetch_assoc($rtsinmuebles)) {

    $queryimagen = "SELECT * FROM imagen WHERE idInmueble = '$inmuebles[idInmueble]' AND baja != '1' ORDER BY ordenImagen ASC LIMIT 1";
    $rtsimagen = mysqli_query($conexion, $queryimagen);
    $img = mysqli_fetch_assoc($rtsimagen);
    $idimg = $img['idImagen'];
    $tpimg = $img['tipoImagen'];
    $nomimg = "gestion/assets/images/inmuebles/" . str_pad($idimg, 8, "0", STR_PAD_LEFT) . "." . $tpimg;

    if (!file_exists($nomimg)) {
        $nomimg = "gestion/assets/images/inmuebles/00000000.png";
    }
    if ($inmuebles['plantasInmueble'] > 0) {
        $plantasInmueble = $inmuebles['plantasInmueble'] . " Planta";
        if ($inmuebles['plantasInmueble'] > 1) {
            $plantasInmueble = $plantasInmueble . "s";
        }
    } else {
        $plantasInmueble = "";
    };
    if ($inmuebles['habitacionesInmueble'] > 0) {
        $habitacionesInmueble = $inmuebles['habitacionesInmueble'] . " Habitacion";
        if ($inmuebles['habitacionesInmueble'] > 1) {
            $habitacionesInmueble = $habitacionesInmueble . "es";
        }
    } else {
        $habitacionesInmueble = "";
    };
    if ($inmuebles['banosInmueble'] > 0) {
        $banosInmueble = $inmuebles['banosInmueble'] . " Baños";
        if ($inmuebles['banosInmueble'] > 1) {
            $banosInmueble = $banosInmueble . "s";
        }
    } else {
        $banosInmueble = "";
    };
    if ($inmuebles['superficieCubiertaInmueble'] > 0) {
        $superficieCubiertaInmueble = $inmuebles['superficieCubiertaInmueble'];
    } else {
        $superficieCubiertaInmueble = "";
    };
    if ($inmuebles['valorInmueble'] > 0) {
        $valorInmueble = $inmuebles['monedaInmueble'] . "</b>&nbsp;" . $inmuebles['valorInmueble'];
    } else {
        $valorInmueble = "Consultar";
    };
    $domicilio = "";
    if (!empty($inmuebles['domicilioCalleInmueble'])) {
        $domicilio .= $inmuebles['domicilioCalleInmueble'];
    }
    if (!empty($inmuebles['domicilioNumeroInmueble'])) {
        $domicilio .= " " . $inmuebles['domicilioNumeroInmueble'];
    }
    if (!empty($inmuebles['domicilioOrientacionInmueble'])) {
        $domicilio .= " " . $inmuebles['domicilioOrientacionInmueble'];
    }
    if (!empty($inmuebles['nombreLocalidad'])) {
        $domicilio .= " - " . $inmuebles['nombreLocalidad'] . "</b>";
    }

    $nombreOperacion = $inmuebles['nombreOperacion'];
    $nombreLocalidad = $inmuebles['nombreLocalidad'];

    $listadoUltimos .= "<div class='media'>";
    $listadoUltimos .= "<div class='media-left'>";
    $listadoUltimos .= "<a href='detalle-inmueble.php?idInmueble=" . $inmuebles['idInmueble'] . "&operacion=" . $inmuebles['idOperacion'] . "&propiedad=" . $inmuebles['idPropiedad'] . "'>";
    $listadoUltimos .= "<img class='media-object' src='" . $nomimg . "' alt='img'></a>";
    $listadoUltimos .= "</div>";
    $listadoUltimos .= "<div class='media-body'>";
    $listadoUltimos .= "<h4 class='media-heading'><a href='detalle-inmueble.php?idInmueble=" . $inmuebles['idInmueble'] . "&operacion=" . $inmuebles['idOperacion'] . "&propiedad=" . $inmuebles['idPropiedad'] . "'>" .  $inmuebles['tituloInmueble'] . "</a></h4>";
    $listadoUltimos .= "<p>" . $nombreOperacion . "</p>";
    $listadoUltimos .= "<span>Consultar</span>";
    $listadoUltimos .= "</div>";
    $listadoUltimos .= "</div>";
}
