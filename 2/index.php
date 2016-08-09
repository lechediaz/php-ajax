<?php
/*
    Formularios: PHP + AJAX = usuario feliz
    Mejorar la experiencia del usuario al usar formularios enviando la información desde AJAX.

    Por:  Oscar David Díaz Fortaleché (lechediaz)
    Para: Mi gente de Taringa!
    Fecha: 27/01/2016
*/
include_once(__DIR__.'/config.php');

$consulta = 'SELECT `mensaje`, `fecha` FROM `mensaje` ORDER BY `fecha` DESC LIMIT 7';
$mensajes = [];
$conexion = new Conexion();

// Consultar 7 mensajes de texto enviados últimamente para mostrar
if ($sentencia = $conexion->prepare($consulta)) {
    if ($sentencia->execute()) {
        $sentencia->store_result();
        $sentencia->bind_result($mensaje, $fecha);

        while ($sentencia->fetch()) {
            $mensajes[] = [
                'texto' => utf8_encode($mensaje),
                'fecha' => $fecha
            ];
        }

        unset($mensaje);
        $sentencia->free_result();
    }
    $sentencia->close();
}

$conexion->close();
?>
<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" type="text/css" href="<?=URL_CSS?>estilos.css">
		<meta charset="UTF-8"> 
		<title>Desgraciasdos.com</title>
	</head>
	<body>
		<article class="contenedor-principal">
            <header>
                <h2>Desgraciados.com</h2>
                <p>Trata de ligar a alguien desde 
                    <a href="<?=URL_APLICACION?>formulario_mensaje.php" target="_blank">aquí</a>.</p>
            </header>
			<iframe class="video" width="480" height="360" src="https://www.youtube.com/embed/CV87-38W5R0" 
                frameborder="0" allowfullscreen></iframe>
            <div class="mensajes"><span>Envía tu mensaje también, anímate que es gratis.</span><?php
foreach ($mensajes as $mensaje) {
    echo '<span fecha-mensaje="'.$mensaje['fecha'].'">'.$mensaje['texto'].'</span>';
}
unset($mensaje);
 ?>
            </div>
            <p class="certificada">Por @lechediaz</p>
		</article>
		<script src="<?=URL_JAVASCRIPTS?>jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="<?=URL_JAVASCRIPTS?>jquery.marquee.min.js" type="text/javascript"></script>
		<script src="<?=URL_JAVASCRIPTS?>mi_js.js" type="text/javascript"></script>
	</body>
</html>