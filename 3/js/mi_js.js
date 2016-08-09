$(document).ready(function()
{
    /*
        Controlamos el evento click del botón "Añadir" para agregar estudiantes 
        a la lista.
    */
    $('#BtnAnadir').click(function(event){
        event.preventDefault();
        var estudiantes = ObtenerEstudiantes();
        var estudianteAnadir = $('#TxtNombre');

        if (estudianteAnadir.val().length > 0) {
            if (estudiantes.indexOf(estudianteAnadir.val()) == -1) {
                console.log("SI");
                $('#lista-estudiantes').append('<li>' + estudianteAnadir.val() + '</li>')
                .fadeIn();
            }
        }
    });

    /*
        Atamos el evento click de un elemento <li> dentro de una lista <ul> para
        que sea eliminado.
    */
    $('#lista-estudiantes > li').click(function(event)
    {
        event.preventDefault();
        // Eliminamos el elemento <li> seleccionado.
        $(this).remove();
    });

    /*
        Atamos el evento click del botón "Pasar al tablero" para escoger un 
        estudiante al azar.
    */
    $('#BtnPasarAlTablero').click(function(event){
        event.preventDefault();
        var estudiantes = ObtenerEstudiantes();

        // Comprobamos que haya estudiantes en la lista
        if (estudiantes.length > 0) {
            // Si solo hay un estudiante muestra a ese
            if (estudiantes.length == 1) {
                alert('Al tablero debe ir: ' + estudiantes[0]);
            } else {
                // calculamos un indice al azar
                var indiceEstudiante = Math.floor(Math.random() * estudiantes.length);
                alert('Al tablero debe ir: ' + estudiantes[indiceEstudiante]);
            }
        } else {
            alert('¿Estás solo en clase máquina?');
        }
    });

    /*
        Consultamos los estudiantes que están incluidos como <li> dentro 
        del <ul> con id lista-estudiantes y devolvemos un arreglo de strings 
        con los nombres de los estudiantes.
    */
    function ObtenerEstudiantes() {
        // Arreglo a devolver
        var estudiantes = [];

        // Recorremos la lista y añadimos los nombres al arreglo
        $('#lista-estudiantes > li').each(function(index, element){
            estudiantes.push(element.textContent);
        });
        return estudiantes;
    }
});