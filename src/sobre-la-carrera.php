<?php
// Lógica PHP específica para la página "Sobre la Carrera"
$objetivos = [
    "Formar profesionales capaces de diseñar, desarrollar e implementar soluciones tecnológicas innovadoras.",
    "Capacitar en la gestión de proyectos de TI y la administración de redes y sistemas.",
    "Desarrollar habilidades en ciberseguridad, análisis de datos y desarrollo de software.",
    "Fomentar el pensamiento crítico y la resolución de problemas en entornos tecnológicos."
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Sobre la Carrera de TIC - ITESS</title>
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
        /* Estilos específicos para la página "Sobre la Carrera" */
        .card {
            background-color: var(--card-bg);
            color: var(--text-main);
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .list-group-item {
            background-color: var(--card-bg); /* Se adapta al modo oscuro */
            color: var(--text-main); /* Se adapta al modo oscuro */
            border-color: var(--chatbot-border-color); /* Borde que se adapta al modo oscuro */
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
        body.dark-mode .list-group-item {
            background-color: #3a3a3a; /* Fondo más oscuro para elementos de lista en dark mode */
            border-color: #555; /* Borde más oscuro */
        }
        body.dark-mode .card,
        body.dark-mode .card p,
        body.dark-mode .card h3 {
            color: var(--text-main);
        }

        /* Estilo de prueba: Si ves este color, el CSS está funcionando */
        .test-css-indicator {
            border: 2px solid red !important;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php include_once 'includes/navbar.php'; // Incluye la barra de navegación ?>

    <div class="container my-5">
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Sobre la Carrera de Tecnologías de la Información y Comunicación (TIC)</h1>
        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp">
            <p>La carrera de Tecnologías de la Información y Comunicación (TIC) en el Instituto Tecnológico Superior de Salvatierra está diseñada para preparar a la próxima generación de líderes tecnológicos. Nuestro programa se enfoca en proporcionar una base sólida en los principios fundamentales de las TIC, combinada con la exposición a las últimas tendencias y herramientas del sector.</p>

            <h3 class="mt-4 mb-3">Objetivos de la Carrera:</h3>
            <ul class="list-group list-group-flush">
                <?php foreach ($objetivos as $objetivo): ?>
                    <li class="list-group-item"><?php echo $objetivo; ?></li>
                <?php endforeach; ?>
            </ul>

            <p class="mt-4">Nuestros egresados están preparados para trabajar en una amplia gama de roles en la industria tecnológica, incluyendo desarrollo de software, administración de bases de datos, redes, ciberseguridad, inteligencia artificial y más. Fomentamos un aprendizaje práctico a través de proyectos reales, prácticas profesionales y oportunidades de investigación.</p>
            <div class="text-center mt-4">
                <a href="/materias.php" class="btn btn-primary me-2">Ver Plan de Estudios</a>
                <a href="/profesores.php" class="btn btn-outline-secondary">Conocer a los Profesores</a>
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

    <!-- Scripts de JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/JS/script.js"></script>
    <script>
        // Script de prueba: Si ves este mensaje en la consola, el JS en línea funciona
        console.log("El JavaScript en línea de sobre-la-carrera.php se ha ejecutado.");
        // alert("¡JavaScript en línea activado!"); // Comentado para evitar interrupciones
    </script>
</body>
</html>
