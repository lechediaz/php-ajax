<?php
/*
    Formularios: PHP + AJAX = usuario feliz
    Mejorar la experiencia del usuario al usar formularios enviando la información desde AJAX.

    Por:  Oscar David Díaz Fortaleché (lechediaz)
    Para: Mi gente de Taringa!
    Fecha: 27/01/2016
*/

include_once(__DIR__.'/config.php');
?>
<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
		<meta charset="UTF-8"> 
		<title>Formularios: PHP + AJAX = usuario feliz</title>
	</head>
	<body>
		<article class="contenedor-principal">
            <header>
                <h2>Formularios: PHP + AJAX = usuario feliz II</h2>
                <p>Para mejorar la experiencia del usuario, vamos a permitir que se envíen los formularios a través del uso de AJAX :)</p>
                <p>En esta ocasión simularemos el envío de mensajes a un canal de televisión con el fin de ligar unas cuantas minas, 
                    la idea es usar el formulario para enviar el mensaje y en otra página vaya apareciendo los mensajes desesperados.</p>
                <p>Para esto usaremos una base de datos <a href="sql/base_de_datos.sql" target="_blank">MySQL</a> para guardar 
                    los mensajes que envía la gente de Taringa!, PHP, HTML, CSS y por supuesto jQuery (AJAX)</p>
            </header>
			<form action="<?=URL_CONTROLADORES?>enviar_mensaje.php" id="FrmMiFormulario" method="post">
                <p class="titulo-formulario">Anímate a enviar mensajes lince</p>
                <p><label for="TxtMensaje">Nombre completo</label></p>
                <textarea id="TxtMensaje" placeholder="Ingresa tu mensaje para que todos lo vean" 
                    name="nombre" rows="4"
                    title="Ingresa tu mensaje para que todos lo vean"></textarea>
                <div class="mensaje"></div>
                <input type="submit" value="Enviar">
			</form>
            <p class="certificada">Por @lechediaz</p>
		</article>
		<script src="<?=URL_JAVASCRIPTS?>jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="<?=URL_JAVASCRIPTS?>jquery.marquee.min.js" type="text/javascript"></script>
		<script src="<?=URL_JAVASCRIPTS?>mi_js.js" type="text/javascript"></script>
	</body>
</html>