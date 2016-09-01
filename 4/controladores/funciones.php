<?php
// Permite obtener las ciudades en donde viven mis amigos
function ObtenerCiudadesDeAmigos()
{
    $consulta = 'SELECT `ciudad` FROM `amigo` GROUP BY `ciudad` ORDER BY `ciudad`';
    $ciudades = [];
    $conexion = new Conexion();

    // Consultamos las ciudades de mis amigos imaginarios.
    if ($sentencia = $conexion->prepare($consulta))
    {
        if ($sentencia->execute())
        {
            $sentencia->store_result();
            $sentencia->bind_result($ciudad);

            while ($sentencia->fetch())
            {
                $ciudades[] = utf8_encode($ciudad);
            }

            unset($ciudad);
            $sentencia->free_result();
        }
        $sentencia->close();
    }

    $conexion->close();
    return $ciudades;
}

// Permite obtener amigos según la ciudad.
function ObtenerAmigosDeCiudad($ciudad = '')
{
    $amigos = [];

    if (strlen($ciudad) > 0)
    {
        $consulta = 'SELECT `id`, `nombre` FROM `amigo` WHERE `ciudad` = ?';
        $conexion = new Conexion();

        // Consultamos amigos según la ciudad.
        if ($sentencia = $conexion->prepare($consulta))
        {
            $sentencia->bind_param('s', $ciudad);

            if ($sentencia->execute())
            {
                $sentencia->store_result();
                $sentencia->bind_result($id, $nombre);

                while ($sentencia->fetch())
                {
                    $amigos[] = [
                        'id' => $id,
                        'nombre' => utf8_encode($nombre)
                    ];
                }

                unset($id);
                unset($nombre);
                $sentencia->free_result();
            }
            $sentencia->close();
        }

        $conexion->close();
    }

    return $amigos;
}