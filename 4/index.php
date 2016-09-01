<?php
/*
    Formularios: PHP + AJAX = usuario feliz
    Mejorar la experiencia del usuario al usar formularios enviando la información desde AJAX.

    Por:  Oscar David Díaz Fortaleché (lechediaz)
    Para: Mi gente de Taringa!
    Fecha: 27/01/2016
*/
include_once(__DIR__.'/config.php');

$paises = ObtenerCiudadesDeAmigos();
?>
<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" type="text/css" href="<?=URL_CSS?>estilos.css">
		<meta charset="UTF-8"> 
		<title>Formularios: PHP + AJAX = usuario feliz III</title>
	</head>
	<body>
		<article class="contenedor-principal">
            <header>
                <h2>Formularios: PHP + AJAX = usuario feliz III</h2>
                <p>A continuación veremos la funcionalidad de los famosos Cascade Dropdown. En este ejemplo mis amigos viven en distintas 
                ciudades, entonces al seleccionar una ciudad me traerá los amigos que son de la misma y podré escoger a uno.</p>
            </header>
            <p>Ciudad: <select id="LstCiudades"><option value="">Selecciona una ciudad</option><?php
            foreach ($paises as $pais) {
                echo '<option value="'.$pais.'">'.$pais.'</option>';
            }
            ?></select></p>
            <p>Amigos: <select id="LstAmigos"><option value="">Selecciona una ciudad primero</option></select></p>
		</article>
        <p class="certificada">Por @lechediaz</p>
		<script src="<?=URL_JAVASCRIPTS?>jquery-1.11.2.min.js" type="text/javascript"></script>
		<script src="<?=URL_JAVASCRIPTS?>mi_js.js" type="text/javascript"></script>
	</body>
</html>