<?php
// Lógica PHP para manejar el envío del formulario de contacto
$mensajeExito = '';
$mensajeError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $asunto = htmlspecialchars($_POST['asunto'] ?? '');
    $mensaje = htmlspecialchars($_POST['mensaje'] ?? '');

    // Validación básica
    if (empty($nombre) || empty($email) || empty($asunto) || empty($mensaje)) {
        $mensajeError = "Por favor, completa todos los campos del formulario.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensajeError = "Por favor, introduce una dirección de correo electrónico válida.";
    } else {
        // Aquí iría la lógica para enviar el correo electrónico
        // Por ejemplo, usando la función mail() de PHP o una librería de envío de correos.
        // En un entorno real, NO usarías mail() directamente para producción por seguridad y fiabilidad.
        // Usarías una librería como PHPMailer o un servicio de envío de correos (SendGrid, Mailgun, etc.).

        // Simulación de envío de correo
        $destinatario = "tu_correo@itess.edu.mx"; // Cambia esto a un correo real
        $cabeceras = "From: " . $email . "\r\n" .
                     "Reply-To: " . $email . "\r\n" .
                     "X-Mailer: PHP/" . phpversion();
        $contenidoCorreo = "Nombre: $nombre\n" .
                           "Email: $email\n" .
                           "Asunto: $asunto\n" .
                           "Mensaje:\n$mensaje";

        // Descomenta la siguiente línea para intentar enviar el correo.
        // if (mail($destinatario, $asunto, $contenidoCorreo, $cabeceras)) {
        //     $mensajeExito = "¡Gracias! Tu mensaje ha sido enviado correctamente.";
        //     $_POST = array(); // Limpiar campos después de un envío exitoso
        // } else {
        //     $mensajeError = "Hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
        // }

        // Si la función mail() está comentada, siempre se mostrará el mensaje de éxito simulado.
        if (empty($mensajeError)) { // Solo si no hay errores de validación
            $mensajeExito = "¡Gracias! Tu mensaje ha sido enviado correctamente (simulado).";
            $_POST = array(); // Limpiar campos después de un envío exitoso simulado
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Contacto - ITESS</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="/CSS/styles.css">
    <!-- Animate.css para animaciones -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
</head>
<body>
    <?php include_once 'includes/navbar.php'; // Incluye la barra de navegación ?>

    <div class="container my-5">
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Contáctanos</h1>
        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp">
            <p class="text-center mb-4">Estamos aquí para responder a todas tus preguntas. Envíanos un mensaje y nos pondremos en contacto contigo lo antes posible.</p>

            <?php if ($mensajeExito): ?>
                <div class="alert alert-success text-center animate__animated animate__fadeIn" role="alert">
                    <?php echo $mensajeExito; ?>
                </div>
            <?php endif; ?>
            <?php if ($mensajeError): ?>
                <div class="alert alert-danger text-center animate__animated animate__fadeIn" role="alert">
                    <?php echo $mensajeError; ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="/contacto.php" class="formulario">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_POST['nombre'] ?? ''; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="asunto" class="form-label">Asunto</label>
                    <input type="text" class="form-control" id="asunto" name="asunto" value="<?php echo $_POST['asunto'] ?? ''; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Tu Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required><?php echo $_POST['mensaje'] ?? ''; ?></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="button submit">Enviar Mensaje</button>
                </div>
            </form>
        </div>
    </div>

    <?php include_once 'includes/footer.php'; // Incluye el footer ?>

    <!-- Botón flotante del chatbot y ventana del chatbot -->
    <button id="chatbotBtn" onclick="toggleChatbot()">
        <i class="bi bi-chat-dots"></i>
    </button>
    <div id="chatbotWindow">
        <div id="chatHeader">
            <span>Chat con TICBot</span>
            <button class="close-btn" onclick="toggleChatbot()">×</button>
        </div>
        <div id="chatMessages" class="chat-messages"></div>
        <div id="chatInput">
            <input id="userMessage" placeholder="Escribe tu mensaje..." type="text"/>
            <button id="sendBtn" onclick="sendMessage()"><i class="bi bi-send"></i></button>
        </div>
    </div>

    <!-- Scripts de JavaScript al final del body para asegurar que el DOM esté cargado -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/JS/script.js"></script>
</body>
</html>