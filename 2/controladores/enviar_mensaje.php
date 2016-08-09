<?php
/*
    Formularios: PHP + AJAX = usuario feliz
    Recibe los datos captados por el formulario y devuelve un resultado.

    Por:  Oscar David Díaz Fortaleché (lechediaz)
    Para: Mi gente de Taringa!
*/
include_once(__DIR__.'/../config.php');

// Capturamos el mensaje enviado por POST
$mensajeRecibido = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

// JSON para devolver como respuesta
$json = [
    'correcto' => false,
    'mensaje' => ''
];

// Validamos que el mensaje no este vacío
if (strlen($mensajeRecibido) == 0) {
    $json['mensaje'] = 'El mensaje no puede estar vacío';
    exit(json_encode($json));
}

$insertarMensaje = 'INSERT INTO `mensaje` (`mensaje`, `fecha`) VALUES (?, ?)';
$conexion = new Conexion();

// Ejecutar la sentencia
if ($sentencia = $conexion->prepare($insertarMensaje)) {
    $sentencia->bind_param('ss', $mensajeRecibido, date("Y-m-d H:i:s"));

    if ($json['correcto'] = $sentencia->execute()) {
        $json['mensaje'] = 'Tu mensaje se ha enviado exitosamente.';
    } else {
        $json['mensaje'] = 'Ha ocurrido un error inesperado.';
    }

    $sentencia->close();
}

$conexion->close();

echo json_encode($json);
?>