<?php
  // Obtener los datos enviados por la solicitud HTTP POST
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $mensaje = $_POST["mensaje"];

  // Crear el contenido del archivo de texto
  $contenido = "Nombre: " . $nombre . "\nCorreo electrónico: " . $correo . "\nMensaje: " . $mensaje;

  // Escribir los datos en un archivo de texto
  $archivo = fopen("datos.txt", "a");
  fwrite($archivo, $contenido . "\n\n");
  fclose($archivo);
?>
