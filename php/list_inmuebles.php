<?PHP
include('conexion.php');
//Filtros   
$propiedad = "";
$operacion = "";
$localidad = "";
$limit = "";
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
if (isset($_REQUEST['localidad'])) {
    if (!empty($_REQUEST['localidad'])) {
        $localidad = " and idLocalidad = '" . $_REQUEST['localidad'] . "'";
    }
}
$filtro = $propiedad . $operacion . $localidad;
// echo "Propiedad: " . $propiedad . "<br>";
//echo "Operacion: " . $operacion . "<br>";
//echo "Localidad: " . $localidad . "<br>";   
//echo $filtro;
if (empty($filtro)) {
    $limit = "LIMIT 9";
}
$queryinmuebles = "SELECT * FROM vista_inmuebles WHERE baja != '1' $filtro ORDER BY fecha DESC $limit";

$rtsinmuebles = mysqli_query($conexion, $queryinmuebles);

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

    $nombrePropiedad = $inmuebles['nombrePropiedad'];
    $nombreOperacion = $inmuebles['nombreOperacion'];
    $nombreLocalidad = $inmuebles['nombreLocalidad'];

    $listado .= "<li>";
    $listado .= "<article class='aa-properties-item'>";
    $listado .= "<a href='detalle-inmueble.php?idInmueble=" . $inmuebles['idInmueble'] . "&operacion=" . $inmuebles['idOperacion'] . "&propiedad=" . $inmuebles['idPropiedad'] . "' class='aa-properties-item-img'>";
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
    $listado .= "<h3><a href='detalle-inmueble.php?idInmueble=" . $inmuebles['idInmueble'] . "&operacion=" . $inmuebles['idOperacion'] . "&propiedad=" . $inmuebles['idPropiedad'] . "'>" .  $inmuebles['tituloInmueble'] . "</a></h3>";
    $listado .= "<p>" . $nombrePropiedad . " | " . $nombreLocalidad . ".</p>";
    $listado .= "</div>";
    $listado .= "<div class='aa-properties-detial'>";
    $listado .= "<span class='aa-price'>";
    $listado .= $valorInmueble;
    $listado .= "</span>";
    $listado .= "<a href='detalle-inmueble.php?idInmueble=" . $inmuebles['idInmueble'] . "&operacion=" . $inmuebles['idOperacion'] . "&propiedad=" . $inmuebles['idPropiedad'] . "' class='aa-secondary-btn'>Ver detalles</a>";
    $listado .= "</div>";
    $listado .= "</div>";
    $listado .= "</article>";
    $listado .= "</li>";

    //     <li>
    //     <article class="aa-properties-item">
    //         <a href="detalle-inmueble.html" class="aa-properties-item-img">
    //             <img src="img/img-portadas/lista1.jpeg" alt="img">
    //         </a>
    //         <div class="aa-tag for-sale">
    //             Venta
    //         </div>
    //         <div class="aa-properties-item-content">
    //             <div class="aa-properties-info">
    //                 <span>5 Ambientes</span>
    //                 <span>2 Habitaciones</span>
    //                 <span>3 Baños</span>
    //                 <span>172 m2</span>
    //             </div>
    //             <div class="aa-properties-about">
    //                 <h3><a href="detalle-inmueble.html">Casa en Rivadavia</a></h3>
    //                 <p>Casa con quinta en zona de Marquesado, ideal para vacacionar. Tiene pileta y quincho.</p>
    //             </div>
    //             <div class="aa-properties-detial">
    //                 <span class="aa-price">
    //                     USD 135.000
    //                 </span>
    //                 <a href="detalle-inmueble.html" class="aa-secondary-btn">Ver
    //                     detalles</a>
    //             </div>
    //         </div>
    //     </article>
    // </li>
}
