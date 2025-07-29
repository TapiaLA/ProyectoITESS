<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Documentación - ITESS</title>
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
        /* Estilos específicos para la sección de documentación */
        .documentation-section h2, .documentation-section h3 {
            color: var(--primary);
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }
        .documentation-section p, .documentation-section ul, .documentation-section ol {
            color: var(--text-main);
            line-height: 1.6;
            margin-bottom: 1rem;
        }
        .documentation-section ul, .documentation-section ol {
            margin-left: 20px;
            padding-left: 0;
        }
        .documentation-section ul li, .documentation-section ol li {
            margin-bottom: 0.5rem;
        }
        /* Adaptación a modo oscuro */
        body.dark-mode .documentation-section h2,
        body.dark-mode .documentation-section h3 {
            color: var(--primary); /* Asegurar color primario en dark mode */
        }
        body.dark-mode .documentation-section p,
        body.dark-mode .documentation-section ul li,
        body.dark-mode .documentation-section ol li {
            color: var(--text-main); /* Texto claro en dark mode */
        }
    </style>
</head>
<body>
    <?php include_once 'includes/navbar.php'; // Incluye la barra de navegación ?>

    <div class="container my-5">
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Documentación</h1>
        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp documentation-section">
            <p>Bienvenido a la sección de documentación del ITESS. Aquí encontrarás guías, manuales y recursos útiles para estudiantes, profesores y personal administrativo.</p>

            <h2 class="mt-4">1. Guías de Usuario</h2>
            <p>Encuentra manuales detallados sobre el uso de nuestras plataformas y sistemas.</p>
            <ul>
                <li>Guía del Portal del Estudiante</li>
                <li>Manual de Uso de la Plataforma de Aulas Virtuales</li>
                <li>Instrucciones para Acceso a la Red Wi-Fi Institucional</li>
            </ul>

            <h2 class="mt-4">2. Documentación de API (para desarrolladores)</h2>
            <p>Si eres desarrollador y necesitas integrar sistemas con nuestras plataformas, aquí encontrarás la documentación de nuestras APIs.</p>
            <p><strong>Nota:</strong> El acceso a ciertas APIs puede requerir credenciales y autorización previa.</p>
            <ul>
                <li>API de Consulta de Calificaciones</li>
                <li>API de Gestión de Horarios</li>
                <li>API de Eventos Académicos</li>
            </ul>

            <h2 class="mt-4">3. Preguntas Frecuentes (FAQ)</h2>
            <p>Consulta las respuestas a las preguntas más comunes sobre trámites, servicios y vida académica en el ITESS.</p>
            <ol>
                <li>¿Cómo puedo solicitar una constancia de estudios?</li>
                <li>¿Cuáles son los requisitos para la titulación?</li>
                <li>¿Dónde puedo encontrar información sobre becas?</li>
                <li>¿Cómo accedo a mi correo institucional?</li>
            </ol>

            <h2 class="mt-4">4. Recursos Adicionales</h2>
            <p>Otros documentos y enlaces de interés.</p>
            <ul>
                <li>Reglamento Académico General</li>
                <li>Calendario Escolar</li>
                <li>Directorio de Contactos Clave</li>
            </ul>

            <p class="mt-4 text-center">Si no encuentras la información que buscas, no dudes en contactarnos a través de nuestra sección de <a href="/contacto.php">Contacto</a>.</p>
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
