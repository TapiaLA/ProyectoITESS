<?php
// Simula datos de usuario (en un entorno real, esto vendría de una sesión o base de datos)
$user = [
    "name" => "Luis Ángel Tapia Ramírez",
    "email" => "luis.angel@itess.edu.mx",
    "studentId" => "20250001",
    "career" => "Tecnologías de la Información y Comunicación",
    "status" => "Activo",
    "lastLogin" => "2025-07-27 10:30 AM"
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Mi Perfil - ITESS</title>
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
        <div class="profile-header animate__animated animate__fadeInDown">
            <img src="https://placehold.co/120x120/0046b8/ffffff?text=Avatar" alt="Avatar de Usuario" class="profile-avatar">
            <h1 class="profile-name"><?php echo $user['name']; ?></h1>
            <p class="profile-email"><?php echo $user['email']; ?></p>
        </div>

        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp">
            <div class="card-body profile-info">
                <h4 class="card-title mb-4 text-center">Detalles del Perfil</h4>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">ID de Estudiante:</div>
                    <div class="col-md-8"><?php echo $user['studentId']; ?></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Carrera:</div>
                    <div class="col-md-8"><?php echo $user['career']; ?></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Estado:</div>
                    <div class="col-md-8"><?php echo $user['status']; ?></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Último Acceso:</div>
                    <div class="col-md-8"><?php echo $user['lastLogin']; ?></div>
                </div>
                <div class="text-center mt-4">
                    <a href="/editar-perfil.php" class="btn btn-primary me-2">Editar Perfil</a>
                    <a href="/logout.php" class="btn btn-outline-danger">Cerrar Sesión</a>
                </div>
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
