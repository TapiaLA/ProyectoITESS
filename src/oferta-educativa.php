<?php
// Lógica PHP específica para la página de oferta educativa
$programasOfrecidos = [
    "Licenciatura en Tecnologías de la Información y Comunicación",
    "Certificado en Ciberseguridad Avanzada",
    "Diplomado en Desarrollo Web Full Stack",
    "Especialización en Inteligencia Artificial y Machine Learning",
    "Curso de Programación para Principiantes con Python"
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Oferta Educativa - ITESS</title>
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
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Nuestra Oferta Educativa</h1>
        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp">
            <p>En el Instituto Tecnológico Superior de Salvatierra, estamos comprometidos con la excelencia académica y la innovación. Nuestra oferta educativa en Tecnologías de la Información y Comunicación (TIC) está diseñada para formar profesionales altamente capacitados, listos para enfrentar los desafíos del mundo digital.</p>
            <p>Ofrecemos una variedad de programas que se adaptan a diferentes niveles y necesidades, desde formación básica hasta posgrados especializados.</p>

            <h3 class="mt-4 mb-3">Programas Destacados:</h3>
            <ul class="list-group list-group-flush">
                <?php foreach ($programasOfrecidos as $programa): ?>
                    <li class="list-group-item"><?php echo $programa; ?></li>
                <?php endforeach; ?>
            </ul>

            <p class="mt-4">Para más detalles sobre cada programa, incluyendo planes de estudio, requisitos de admisión y perfiles de egreso, te invitamos a explorar las secciones correspondientes o contactar a nuestro departamento de admisiones.</p>
            <div class="text-center mt-4">
                <a href="/contacto.php" class="btn btn-primary">Contáctanos para más información</a>
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
