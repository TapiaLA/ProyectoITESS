<?php
// Lógica PHP para manejar el inicio de sesión
$mensajeExito = '';
$mensajeError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email'] ?? '');
    $password = htmlspecialchars($_POST['password'] ?? '');
    $rememberMe = isset($_POST['remember_me']);

    // Validación básica
    if (empty($email) || empty($password)) {
        $mensajeError = "Por favor, introduce tu correo electrónico y contraseña.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensajeError = "Por favor, introduce una dirección de correo electrónico válida.";
    } else {
        // Simulación de autenticación
        // En un entorno real, aquí se verificarían las credenciales contra una base de datos
        // y se usarían funciones seguras para el manejo de contraseñas (ej. password_verify)
        if ($email === "usuario@itess.edu.mx" && $password === "password123") {
            $mensajeExito = "¡Inicio de sesión exitoso! Bienvenido.";
            // Aquí podrías iniciar una sesión PHP, redirigir al usuario, etc.
            // Por ejemplo: header("Location: /perfil.php"); exit();
        } else {
            $mensajeError = "Correo electrónico o contraseña incorrectos.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Iniciar Sesión - ITESS</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="/CSS/styles.css">
    <!-- Animate.css para animaciones -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
    <style>
        /* Estilos específicos para la página de login */
        .login-card {
            max-width: 450px;
            margin: 50px auto;
            border-radius: 15px;
            overflow: hidden;
            background-color: var(--card-bg); /* Se adapta al modo oscuro */
            transition: background-color 0.3s ease;
        }
        .login-card .card-header {
            background-color: var(--primary);
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 1.5rem;
            font-weight: 600;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .login-card .card-body {
            padding: 30px;
        }
        .login-card .form-label {
            color: var(--text-main); /* Se adapta al modo oscuro */
            transition: color 0.3s ease;
        }
        .login-card .form-control {
            background-color: var(--light-bg); /* Se adapta al modo oscuro */
            color: var(--text-main); /* Se adapta al modo oscuro */
            border-color: var(--chatbot-border-color); /* Se adapta al modo oscuro */
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
        .login-card .form-check-label {
            color: var(--text-main); /* Se adapta al modo oscuro */
            transition: color 0.3s ease;
        }
        .login-card .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .login-card .btn-primary:hover {
            background-color: #003a9e; /* Un tono más oscuro del primario */
            border-color: #003a9e;
        }
        body.dark-mode .login-card .card-header {
            background-color: var(--primary); /* Asegurar color primario en dark mode */
        }
        body.dark-mode .login-card .form-label,
        body.dark-mode .login-card .form-check-label {
            color: var(--text-main); /* Texto claro en dark mode */
        }
        body.dark-mode .login-card .form-control {
            background-color: #3c3c3c; /* Fondo oscuro para inputs */
            border-color: #555; /* Borde más oscuro */
            color: var(--text-main); /* Texto claro */
        }
        body.dark-mode .login-card a {
            color: var(--primary); /* Enlaces con color primario en dark mode */
        }
    </style>
</head>
<body>
    <?php include_once 'includes/navbar.php'; // Incluye la barra de navegación ?>

    <div class="container my-5">
        <div class="card login-card shadow-lg animate__animated animate__fadeInDown">
            <div class="card-header">
                Iniciar Sesión
            </div>
            <div class="card-body">
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

                <form method="POST" action="login.php">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me" <?php echo isset($_POST['remember_me']) ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="remember_me">Recordarme</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        <a href="#" class="text-center text-decoration-none mt-2">¿Olvidaste tu contraseña?</a>
                    </div>
                </form>
                <hr class="my-4">
                <p class="text-center">¿No tienes una cuenta? <a href="/registro.php">Regístrate aquí</a></p>
            </div>
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
