<?php
// Permitir peticiones desde tu sitio
header("Access-Control-Allow-Origin: *");
// Aseguramos que la respuesta sea interpretada correctamente por el Fetch de Astro
header("Content-Type: application/json"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar campos según los atributos 'name' del formulario Astro
    $nombre  = strip_tags(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensaje = strip_tags(trim($_POST["message"]));

    // Validar que los campos no estén vacíos antes de proceder
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        http_response_code(400);
        echo json_encode(["error" => "Por favor, completa todos los campos."]);
        exit;
    }

    // ==========================================
    // 1. GUARDAR EN LA BASE DE DATOS DE SITEGROUND
    // ==========================================
    $host = "localhost"; // En SiteGround siempre es localhost
    $dbname = "TU_NOMBRE_DE_BD"; // Reemplaza con tu BD de SiteGround
    $username = "TU_USUARIO_DE_BD"; // Reemplaza con tu usuario de BD
    $password = "TU_CONTRASEÑA_DE_BD"; // Reemplaza con tu contraseña de BD

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insertar los datos en la tabla (asegúrate de crear la tabla antes en SiteGround)
        $stmt = $pdo->prepare("INSERT INTO contactos (nombre, email, mensaje) VALUES (:nombre, :email, :mensaje)");
        $stmt->execute([
            ':nombre' => $nombre,
            ':email' => $email,
            ':mensaje' => $mensaje
        ]);
        
        $guardado_en_bd = true;
    } catch (PDOException $e) {
        // Si falla la base de datos, registramos el error interno pero permitimos intentar enviar el mail
        $guardado_en_bd = false;
    }

    // ==========================================
    // 2. CONFIGURACIÓN Y ENVÍO DEL CORREO
    // ==========================================
    $destinatario = "emanuelcortesochoa@gmail.com";
    $asunto = "Nuevo contacto de: $nombre";
    
    $cuerpo = "Has recibido un nuevo mensaje desde tu portafolio:\n\n";
    $cuerpo .= "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    // NOTA DE SEGURIDAD PARA SITEGROUND: 
    // Muchos servidores bloquean correos si el "From" no pertenece al dominio del hosting.
    // Lo ideal es que el "From" sea un correo de tu dominio (ej: info@tu-dominio.com) 
    // y uses el email del cliente en "Reply-To" para poder responderle directamente.
    $headers = "From: " . $destinatario . "\r\n"; 
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $correo_enviado = mail($destinatario, $asunto, $cuerpo, $headers);

    // ==========================================
    // 3. RESPUESTA AL FORMULARIO DE ASTRO
    // ==========================================
    if ($guardado_en_bd || $correo_enviado) {
        // Con que se cumpla una de las dos (idealmente ambas), le damos éxito al usuario en el frontend
        http_response_code(200);
        echo json_encode(["status" => "success", "message" => "Mensaje procesado correctamente."]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Error al procesar el mensaje."]);
    }

} else {
    http_response_code(403);
    echo json_encode(["error" => "Acceso denegado"]);
}
?>