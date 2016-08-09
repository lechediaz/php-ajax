<?php
/*
    Se definen variables y demás configuraciones para usar la aplicación
	Creado por Oscar David Díaz Fortaleché el 27/01/2016
*/

$path = '/ejemplo_2/';
$host = $_SERVER['HTTP_HOST'];

/**************************************************** Constantes globales ****************************************************/
/*** Capertas ***/
define('CARPETA_APLICACION', $_SERVER['DOCUMENT_ROOT'].$path);
define('CARPETA_CONTROLADORES', CARPETA_APLICACION.'controladores/');
define('CARPETA_MODELOS', CARPETA_APLICACION.'modelos/');
define('CARPETA_IMAGENES', CARPETA_APLICACION.'img/');
define('CARPETA_JAVASCRIPTS', CARPETA_APLICACION.'js/');
define('CARPETA_CSS', CARPETA_APLICACION.'css/');

/*** Urls ***/
define('URL_APLICACION', 'http://'.$host.$path);
define('URL_CONTROLADORES', URL_APLICACION.'controladores/');
define('URL_MODELOS', URL_APLICACION.'modelos/');
define("URL_IMAGENES", URL_APLICACION.'img/');
define("URL_CSS", URL_APLICACION.'css/');
define("URL_JAVASCRIPTS", URL_APLICACION.'js/');

/*** Clases ***/
define('CLASE_CONEXION', CARPETA_MODELOS.'Class.Conexion.php');

// Zona horaria por defecto
date_default_timezone_set('America/Lima');

// error_reporting(E_ALL); // Mostrar todos los errores

session_start(); // Inicia la sesion

/**************************************************** includes generales ****************************************************/
/*
	Incluir las clases que se usan de manera general.
	Acerca de include_once: http://php.net/manual/es/function.include-once.php
*/
include_once(CLASE_CONEXION);