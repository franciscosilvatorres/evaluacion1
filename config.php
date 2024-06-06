<?php
function insertarContacto($nombre, $email, $telefono, $mensaje) {
    $respuesta = [
        'status' => 'success',
        'message' => 'Datos insertados correctamente',
        'data' => [
            'id' => rand(1, 1000), 
            'nombre' => $nombre,
            'email' => $email,
            'telefono' => $telefono,
            'mensaje' => $mensaje
        ]
    ];

    return $respuesta;
}
?> 