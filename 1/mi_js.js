$(document).ready(function()
{
    // Atamos el evento submit de nuestro formulario a nuestro controlador.
    $("#FrmMiFormulario").submit(function(event)
    {
        event.preventDefault(); // Detiene que se realice la acción por defecto (Enviar el formulario)
        
        var formulario = $(this);

        // Los datos que vamos a enviar
        var datosEnviar = {
            edad: formulario.find("#TxtEdad").val(),
            nombre: formulario.find("#TxtNombre").val()
        };

        $.ajax({
            url     : formulario.attr("action"), // Dirección a la que enviamos la info.
            data    : datosEnviar,
            method  : "post",  // El tipo de petición (get o post)
            success : function (datosRecibidos)
            {
                // Si la petición se hizo de forma correcta mostramos la info.
                formulario.find(".mensaje").html(datosRecibidos);
            },
            error   : function (err)
            {
                // En caso de error mostramos una alerta.
                alert("Un error: " + err.responseText);
            }
        });
    });
});