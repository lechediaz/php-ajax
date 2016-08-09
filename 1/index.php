<?php
/*
    Formularios: PHP + AJAX = usuario feliz
    Mejorar la experiencia del usuario al usar formularios enviando la información desde AJAX.

    Por:  Oscar David Díaz Fortaleché (lechediaz)
    Para: Mi gente de Taringa!
*/
?>
<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" type="text/css" href="estilos.css">
		<meta charset="UTF-8"> 
		<title>Formularios: PHP + AJAX = usuario feliz</title>
	</head>
	<body>
		<article class="contenedor-principal">
            <header>
                <h2>Formularios: PHP + AJAX = usuario feliz</h2>
                <p>Para mejorar la experiencia del usuario, vamos a permitir que se envíen los formularios a través del uso de AJAX :)</p>
            </header>
			<form action="controlador.php" id="FrmMiFormulario" method="post">
                <label for="TxtNombre">Nombre completo</label>
                <input id="TxtNombre" placeholder="ingresa tu nombre completo" name="nombre"
                    title="ingresa tu nombre completo" type="text">
                <label for="TxtEdad">Edad</label>
                <input id="TxtEdad" placeholder="ingresa tu edad" max="120" min="1" name="edad"
                    title="ingresa tu edad" type="number">
                <p class="mensaje" style="display: block;"></p>
                <input type="submit" value="Enviar">
			</form>
            <p class="certificada">Por @lechediaz</p>
		</article>
		<script src="jquery-1.11.2.min.js" type="text/javascript"></script>
		<script src="mi_js.js" type="text/javascript"></script>
	</body>
</html>