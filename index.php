<?php

$rutas_validas = array(
    'index',
    'login',
    'registrar',
);

$page = 'index';
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
}

if (!in_array($page, $rutas_validas)) {
    $page = '404';
}

include 'conexion/conexion.php';
include 'controladores/' . $page . '.php';
include 'layout/default.php';
