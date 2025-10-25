<?PHP
include('conexion.php');
$querycategoria = "SELECT * FROM blogCategoria ORDER BY nombreCategoria";
$rtscategoria = mysqli_query($conexion, $querycategoria);
//$localidad=mysqli_fetch_assoc($rtslocalidad)

$filtroCategorias = "";

while ($categoriasBusq = mysqli_fetch_assoc($rtscategoria)) {
    $filtroCategorias .= "<li><a href='blog.php'>" .  $categoriasBusq['nombreCategoria'] . "</a> </li>";
}
