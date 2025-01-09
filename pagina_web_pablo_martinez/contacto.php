<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Construye el contenido del correo
    $contenido = "Nombre: $nombre\nApellido: $apellido\nEmail: $email\nMensaje:\n$mensaje";

    // Envía el correo
    mail("albertogrande1993@gmail.com", "Nuevo mensaje de contacto", $contenido);

    // Redirige al usuario a una página de confirmación
    header("Location: confirmacion.html");
    exit;
}
?>