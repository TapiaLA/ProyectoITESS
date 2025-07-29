<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Información de la Landing Page - ITESS</title>
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
        /* Estilos específicos para la lista de información */
        .list-group-item {
            background-color: var(--card-bg); /* Se adapta al modo oscuro */
            color: var(--text-main); /* Se adapta al modo oscuro */
            border-color: var(--chatbot-border-color); /* Borde que se adapta al modo oscuro */
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
        .list-group-item strong {
            color: var(--primary); /* Títulos en la lista usan color primario */
        }
        body.dark-mode .list-group-item strong {
            color: var(--primary); /* Asegurar color primario en dark mode */
        }
    </style>
</head>
<body>
    <?php include_once 'includes/navbar.php'; // Incluye la barra de navegación ?>

    <div class="container my-5">
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Información Detallada de la Landing Page</h1>
        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp">
            <p>Esta sección proporciona detalles sobre el propósito y los contenidos de la página de inicio (landing page) del Instituto Tecnológico Superior de Salvatierra.</p>
            <p>La landing page está diseñada para ser el primer punto de contacto para futuros estudiantes y visitantes interesados en la carrera de Tecnologías de la Información y Comunicación (TIC). Su objetivo principal es:</p>
            <ul>
                <li class="list-group-item">Presentar de manera atractiva la carrera de TIC en ITESS.</li>
                <li class="list-group-item">Destacar los beneficios y oportunidades de estudiar en nuestra institución.</li>
                <li class="list-group-item">Facilitar el acceso a información clave y recursos relevantes.</li>
                <li class="list-group-item">Captar el interés de potenciales estudiantes a través de un formulario de registro.</li>
            </ul>

            <h3 class="mt-4 mb-3 list-group-item animate__animated animate__fadeInDown">Contenidos clave de la Landing Page:</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Hero Section:</strong> Introducción a la carrera de TIC y enlaces rápidos a áreas clave.</li>
                <li class="list-group-item"><strong>Oportunidades Académicas:</strong> Beneficios y enfoque innovador de la educación en ITESS.</li>
                <li class="list-group-item"><strong>Testimonios:</strong> Experiencias de estudiantes y profesores destacados.</li>
                <li class="list-group-item"><strong>¿Qué hace único al ITESS?:</strong> Video y texto explicando los diferenciadores de la institución.</li>
                <li class="list-group-item"><strong>Acerca de la Carrera de TIC:</strong> Descripción detallada del plan de estudios y objetivos.</li>
                <li class="list-group-item"><strong>Explora Nuestros Programas:</strong> Tarjetas con información sobre certificados, licenciaturas y posgrados.</li>
                <li class="list-group-item"><strong>Últimos Blogs, Noticias y Anuncios:</strong> Novedades y eventos recientes de la carrera.</li>
                <li class="list-group-item"><strong>Formulario de Registro:</strong> Para que los interesados puedan suscribirse y recibir actualizaciones.</li>
            </ul>
            <p class="mt-4">Nuestro objetivo es brindar una experiencia de usuario clara y atractiva, facilitando el acceso a la información más relevante sobre la carrera de TIC en ITESS.</p>
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
