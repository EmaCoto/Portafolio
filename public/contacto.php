<?php
// Permitir peticiones desde tu sitio
header("Access-Control-Allow-Origin: *");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar campos según los atributos 'name' del formulario Astro
    $nombre  = strip_tags(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensaje = strip_tags(trim($_POST["message"]));

    // Configuración del correo
    $destinatario = "emanuelcortesochoa@gmail.com";
    $asunto = "Nuevo contacto de: $nombre";
    
    $cuerpo = "Has recibido un nuevo mensaje desde tu portafolio:\n\n";
    $cuerpo .= "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Enviar correo
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        http_response_code(200);
        echo "Mensaje enviado correctamente";
    } else {
        http_response_code(500);
        echo "Error al enviar el correo";
    }
} else {
    http_response_code(403);
    echo "Acceso denegado";
}
?>