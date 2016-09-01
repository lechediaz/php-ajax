<?php
/*
    Devuelve un objeto JSON con los amigos de una ciudad.

    Por:   Oscar David Díaz Fortaleché (@lechediaz)
    Fecha: 22/08/2016
*/
include_once(__DIR__.'/../config.php');

$ciudad = strlen($_GET['ciudad']) > 0 ? utf8_decode($_GET['ciudad']) : '';
echo json_encode(ObtenerAmigosDeCiudad($ciudad));
?>