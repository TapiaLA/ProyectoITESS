<?php
// Lógica PHP específica para la página de Política de Cookies
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Política de Cookies - ITESS</title>
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
        /* Estilos específicos para el contenido de texto */
        .content-card p, .content-card ul, .content-card ol, .content-card h2, .content-card h3 {
            color: var(--text-main); /* Asegura que el texto sea visible en ambos modos */
            line-height: 1.7;
            margin-bottom: 1rem;
        }
        body.dark-mode .content-card p,
        body.dark-mode .content-card ul,
        body.dark-mode .content-card ol,
        body.dark-mode .content-card h2,
        body.dark-mode .content-card h3 {
            color: #e0e0e0; /* Color claro para el texto en modo oscuro */
        }
        .content-card h2, .content-card h3 {
            color: var(--primary); /* Títulos con color primario */
            font-weight: 600;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }
        body.dark-mode .content-card h2,
        body.dark-mode .content-card h3 {
            color: var(--primary); /* Asegura color primario en dark mode */
        }
    </style>
</head>
<body>
    <?php include_once 'includes/navbar.php'; // Incluye la barra de navegación ?>

    <div class="container my-5">
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Política de Cookies</h1>
        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp content-card">
            <p>Este sitio web, como la mayoría de los sitios en Internet, utiliza cookies propias y de terceros para mejorar la experiencia del usuario y ofrecerle contenido y servicios adaptados a sus intereses.</p>

            <h2>¿Qué son las cookies?</h2>
            <p>Las cookies son pequeños archivos de texto que un sitio web o una aplicación móvil almacena en su ordenador o dispositivo móvil cuando usted visita el sitio o utiliza la aplicación. Las cookies permiten al sitio web recordar sus acciones y preferencias (como el inicio de sesión, el idioma, el tamaño de fuente y otras preferencias de visualización) durante un período de tiempo, para que no tenga que volver a introducirlas cada vez que regrese al sitio o navegue de una página a otra.</p>

            <h2>Tipos de Cookies que Utilizamos</h2>
            <ul>
                <li><strong>Cookies técnicas:</strong> Son aquellas que permiten al usuario la navegación a través de una página web, plataforma o aplicación y la utilización de las diferentes opciones o servicios que en ella existan.</li>
                <li><strong>Cookies de personalización:</strong> Son aquellas que permiten al usuario acceder al servicio con algunas características de carácter general predefinidas en función de una serie de criterios en el terminal del usuario (por ejemplo, el idioma, el tipo de navegador a través del cual accede al servicio, la configuración regional desde donde accede al servicio, etc.).</li>
                <li><strong>Cookies de análisis:</strong> Son aquellas que, bien tratadas por nosotros o por terceros, nos permiten cuantificar el número de usuarios y así realizar la medición y análisis estadístico de la utilización que hacen los usuarios del servicio ofertado. Para ello se analiza su navegación en nuestra página web con el fin de mejorar la oferta de productos o servicios que le ofrecemos.</li>
                <li><strong>Cookies publicitarias:</strong> Son aquellas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que, en su caso, el editor haya incluido en una página web, aplicación o plataforma desde la que presta el servicio solicitado en base a criterios como el contenido editado o la frecuencia en la que se muestran los anuncios.</li>
            </ul>

            <h2>Gestión de Cookies</h2>
            <p>Usted puede controlar y/o eliminar las cookies como desee. Puede eliminar todas las cookies que ya están en su ordenador y puede configurar la mayoría de los navegadores para evitar que se instalen. Sin embargo, si hace esto, es posible que tenga que ajustar manualmente algunas preferencias cada vez que visite un sitio y que algunos servicios y funcionalidades no funcionen.</p>
            <p>La mayoría de los navegadores le permiten gestionar sus preferencias de cookies. Puede ajustar su navegador para rechazar cookies o eliminar determinadas cookies. Por lo general, también debería poder gestionar tecnologías similares de la misma manera que gestiona las cookies, utilizando las preferencias de su navegador.</p>

            <p class="mt-4">Última actualización: 27 de julio de 2025</p>
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
