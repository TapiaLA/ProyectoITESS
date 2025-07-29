<?php
// Lógica PHP específica para la página de Cursos
$cursosDisponibles = [
    ["nombre" => "Introducción a la Programación con Python", "duracion" => "40 horas", "modalidad" => "Online", "descripcion" => "Curso fundamental para principiantes en programación."],
    ["nombre" => "Desarrollo Web Frontend con React", "duracion" => "60 horas", "modalidad" => "Presencial", "descripcion" => "Aprende a construir interfaces de usuario interactivas."],
    ["nombre" => "Bases de Datos SQL y NoSQL", "duracion" => "30 horas", "modalidad" => "Online", "descripcion" => "Dominio de sistemas de gestión de bases de datos."],
    ["nombre" => "Ciberseguridad Esencial", "duracion" => "45 horas", "modalidad" => "Mixta", "descripcion" => "Fundamentos para proteger sistemas y redes."],
    ["nombre" => "Inteligencia Artificial para No Programadores", "duracion" => "25 horas", "modalidad" => "Online", "descripcion" => "Conceptos básicos de IA y sus aplicaciones."],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Cursos - ITESS</title>
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
        /* Estilos específicos para las tarjetas de curso */
        .card.h-100 {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
            overflow: hidden; /* Asegura que el contenido no se desborde con el borde redondeado */
        }
        .card.h-100:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .card-title {
            color: var(--primary); /* Título de la tarjeta usa color primario */
            font-weight: 600;
            font-size: 1.25rem;
        }
        .card-subtitle {
            color: var(--text-main); /* Subtítulo se adapta al modo oscuro */
            opacity: 0.8;
            font-size: 0.9rem;
        }
        .card-text {
            color: var(--text-main); /* Texto de la tarjeta se adapta al modo oscuro */
            font-size: 0.95rem;
            line-height: 1.6;
        }
        body.dark-mode .card-title {
            color: var(--primary); /* Asegurar color primario en dark mode */
        }
        body.dark-mode .card-subtitle,
        body.dark-mode .card-text {
            color: #e0e0e0; /* Texto claro explícito en modo oscuro */
        }
        /* Asegurar que el texto con la clase 'text-muted' se vea bien en modo oscuro */
        body.dark-mode .text-muted {
            color: #b0b0b0 !important; /* Un color claro para el texto "muted" en modo oscuro */
        }
        /* Nueva regla: Asegurar que párrafos y h3 dentro de la tarjeta principal sean claros en modo oscuro */
        body.dark-mode .card p,
        body.dark-mode .card h3 {
            color: var(--text-main); /* Usar la variable --text-main que es clara en dark mode */
        }
    </style>
</head>
<body>
    <?php include_once 'includes/navbar.php'; // Incluye la barra de navegación ?>

    <div class="container my-5">
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Nuestros Cursos Disponibles</h1>
        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp">
            <p>Explora nuestra amplia gama de cursos diseñados para potenciar tus habilidades en Tecnologías de la Información y Comunicación. Desde fundamentos hasta especializaciones avanzadas, tenemos algo para cada nivel de experiencia.</p>

            <h3 class="mt-4 mb-3">Lista de Cursos:</h3>
            <div class="row">
                <?php if (empty($cursosDisponibles)): ?>
                    <p class="text-center text-muted">No hay cursos disponibles en este momento.</p>
                <?php else: ?>
                    <?php foreach ($cursosDisponibles as $curso): ?>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $curso['nombre']; ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Duración: <?php echo $curso['duracion']; ?> | Modalidad: <?php echo $curso['modalidad']; ?></h6>
                                    <p class="card-text"><?php echo $curso['descripcion']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <p class="mt-4">Inscríbete hoy y comienza tu camino hacia el éxito en el mundo de la tecnología.</p>
            <div class="text-center mt-4">
                <a href="/contacto.php" class="btn btn-primary">Más Información e Inscripciones</a>
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
