<?php
// Incluye la barra de navegación desde la carpeta includes
// Importante: Asegúrate de que este 'include_once' esté solo AQUÍ,
// y no antes del DOCTYPE o en cualquier otro lugar de este archivo.
// La lógica PHP para datos del kardex va aquí, antes del HTML.
$userName = "Nombre del Estudiante"; // Ejemplo
$studentId = "20250001"; // Ejemplo
$courses = [
    ["name" => "Programación Avanzada", "grade" => "95", "credits" => "5"],
    ["name" => "Redes de Computadoras II", "grade" => "88", "credits" => "5"],
    ["name" => "Bases de Datos Relacionales", "grade" => "92", "credits" => "5"]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Kardex - ITESS</title>
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
    <?php include_once 'includes/navbar.php'; // Incluye la barra de navegación (solo una vez) ?>

    <div class="container my-5">
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Kardex de <?php echo $userName; ?></h1>
        <p class="text-center animate__animated animate__fadeInUp">ID de Estudiante: <?php echo $studentId; ?></p>

        <div class="card shadow-sm mt-4 animate__animated animate__fadeInUp">
            <div class="card-body">
                <h4 class="card-title mb-3">Cursos Inscritos</h4>
                <ul class="list-group">
                    <?php foreach ($courses as $course): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><?php echo $course['name']; ?></span>
                            <span class="badge bg-primary rounded-pill">Calificación: <?php echo $course['grade']; ?></span>
                            <span class="badge bg-secondary rounded-pill">Créditos: <?php echo $course['credits']; ?></span>
                        </li>
                    <?php endforeach; ?>
                    <?php if (empty($courses)): ?>
                        <li class="list-group-item text-center text-muted">No hay cursos registrados.</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

    <?php include_once 'includes/footer.php'; // Incluye el footer (solo una vez) ?>

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
