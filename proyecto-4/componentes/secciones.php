<?php
$inicio = [
    'titulo' => 'Bienvenidos al emporio',
    'contenido' => 'El mejor contenido sobre el emporio de Nadia',
    'imagen' => 'http://lorempixel.com/400/200/sports/1',
];
$shop = [
    'titulo' => 'N-Shop',
    'contenido' => 'Cuuii cuuii',
    'imagen' => 'http://lorempixel.com/400/200/sports/2',
];
$contacto = [
    'titulo' => 'Contacto',
    'contenido' => 'Informacion',
    'imagen' => 'http://lorempixel.com/400/200/sports/3',
];
$casimiro = [
    'titulo' => 'Casimiro',
    'contenido' => 'si, ok ',
    'imagen' => 'http://lorempixel.com/400/200/sports/4',
];
$secciones = [
    'p1' => $inicio,
    'p2' => $shop,
    'p3' => $contacto,
    'p4' => $casimiro,
];  
/* VICTOR!!!! */
if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
}
if (!isset($_GET['seccion'])) {
    $seccion = 'p1';
}

$titulo = $secciones[$seccion]['titulo'];
$contenido = $secciones[$seccion]['contenido'];
$imagen = $secciones[$seccion]['imagen'];

?>