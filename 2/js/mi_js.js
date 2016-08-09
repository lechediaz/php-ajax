$(document).ready(function()
{
    var listaMensajes = $(".mensajes").marquee({
        duplicated: true,
        duration: 10000,
        gap: 0,
        pauseOnHover: true
    });
    
    // Atamos el evento submit de nuestro formulario a nuestro controlador.
    $(document).on("submit", "#FrmMiFormulario", function(event)
    {
        event.preventDefault(); // Evita que se realice la acción por defecto (Enviar el formulario)
        var formulario = $(this);
 
        $.ajax({
            url     : formulario.attr("action"), // Dirección a la que enviamos la info.
            data    : {
                mensaje: formulario.find("#TxtMensaje").val()
            },
            dataType: "json",
            method  : "post",  // El tipo de petición (get o post)
            success : function (jsonRecibido)
            {
                // Si la petición se hizo de forma correcta mostramos la info.
                formulario.find(".mensaje").html(
                    MostrarMensaje(jsonRecibido.mensaje, jsonRecibido.correcto
                ));
            },
            error   : function (err)
            {
                // En caso de error mostramos una alerta.
                alert("Un error: " + err.responseText);
            }
        });
    });

    function MostrarMensaje(mensaje, correcto) {
        var etiqueta = document.createElement("span");
        if (correcto) {
            etiqueta.className = "mensaje-correcto";
        } else {
            etiqueta.className = "mensaje-error";
        }
        etiqueta.textContent = mensaje;
        return etiqueta;
    }
});

