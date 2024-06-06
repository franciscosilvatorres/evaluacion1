<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $respuesta = insertarContacto($nombre, $email, $telefono, $mensaje);

    if ($respuesta['status'] == 'success') {
        echo 'Mensaje enviado con éxito';
    } else {
        echo 'Hubo un problema al enviar el mensaje';
    }
}
?>