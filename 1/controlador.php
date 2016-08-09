<?php
/*
    Formularios: PHP + AJAX = usuario feliz
    Recibe los datos captados por el formulario y devuelve un resultado.

    Por:  Oscar David Díaz Fortaleché (lechediaz)
    Para: Mi gente de Taringa!
*/
$nombre = isset($_POST['nombre'])   ? $_POST['nombre']          : '';
$edad   = isset($_POST['edad'])     ? ((int) $_POST['edad'])    : 0;

echo  'Hola '.$nombre.', tienes '.$edad.' años, ¿cuántos me pones a mí?';
?>