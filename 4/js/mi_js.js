$(document).ready(function()
{
    var etiquetaAmigos = $('#LstAmigos');

    $('#LstCiudades').change(function(event)
    {
        var etiqueta = $(this);
        if (etiqueta.val().length > 0)
        {
            $.ajax({
                url: 'controladores/obtener_amigos_de_ciudad.php',
                dataType: 'json',
                data: { ciudad: etiqueta.val() },
                success: function(recibido)
                {
                    if (recibido.length > 0)
                    {
                        LimpiarAmigos();
                        etiquetaAmigos.find('option').text('Selecciona un amigo');

                        var i = 0;

                        // Añadir las nuevas opciones
                        while (i < recibido.length) {
                            etiquetaAmigos.append('<option value="' + recibido[i].id + '">' + recibido[i].nombre + '</option>');
                            i++;
                        }
                    }
                },
                error: function(xhr, error)
                {
                    alert("Error: " + error);
                }
            })
        }
        else
        {
            LimpiarAmigos();
            etiquetaAmigos.find('option').text('Selecciona una ciudad primero');
        }
    });

    etiquetaAmigos.change(function(event)
    {
        if (etiquetaAmigos.val().length > 0)
        {
            alert('Mi amigo ' + etiquetaAmigos.find(':selected').text() + ' es de ' + $('#LstCiudades').val());
        }
    });

    // Limpia los amigos, pero deja la primera opción.
    function LimpiarAmigos()
    {
        etiquetaAmigos.find(':not(option:first)').remove();
    }
});

