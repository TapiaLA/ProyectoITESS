<?php
// Lógica PHP específica para la página de Materias
$materiasDisponibles = [
    ["nombre" => "Programación Orientada a Objetos", "semestre" => "3ro", "creditos" => "5", "descripcion" => "Conceptos avanzados de programación con enfoque en objetos."],
    ["nombre" => "Estructuras de Datos y Algoritmos", "semestre" => "4to", "creditos" => "5", "descripcion" => "Análisis y diseño de algoritmos eficientes."],
    ["nombre" => "Redes de Computadoras I", "semestre" => "3ro", "creditos" => "4", "descripcion" => "Fundamentos de redes, protocolos y topologías."],
    ["nombre" => "Bases de Datos Avanzadas", "semestre" => "5to", "creditos" => "5", "descripcion" => "Diseño, implementación y optimización de bases de datos complejas."],
    ["nombre" => "Desarrollo de Aplicaciones Móviles", "semestre" => "6to", "creditos" => "6", "descripcion" => "Creación de aplicaciones para plataformas Android e iOS."],
    ["nombre" => "Inteligencia Artificial", "semestre" => "7mo", "creditos" => "6", "descripcion" => "Introducción a los principios y aplicaciones de la IA."],
    ["nombre" => "Ciberseguridad", "semestre" => "7mo", "creditos" => "5", "descripcion" => "Protección de sistemas y datos contra amenazas cibernéticas."],
    ["nombre" => "Gestión de Proyectos de TI", "semestre" => "8vo", "creditos" => "4", "descripcion" => "Metodologías y herramientas para la gestión exitosa de proyectos tecnológicos."],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Materias - ITESS</title>
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
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Plan de Estudios y Materias</h1>
        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp">
            <p>Descubre las materias que conforman el innovador plan de estudios de la carrera de Tecnologías de la Información y Comunicación en ITESS. Nuestro programa está diseñado para brindarte una formación integral y actualizada.</p>

            <h3 class="mt-4 mb-3">Materias Clave:</h3>
            <?php if (empty($materiasDisponibles)): ?>
                <p class="text-center text-muted">No hay materias disponibles en este momento.</p>
            <?php else: ?>
                <div class="row">
                    <?php foreach ($materiasDisponibles as $materia): ?>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $materia['nombre']; ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Semestre: <?php echo $materia['semestre']; ?> | Créditos: <?php echo $materia['creditos']; ?></h6>
                                    <p class="card-text"><?php echo $materia['descripcion']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <p class="mt-4">Para detalles específicos del plan de estudios y prerrequisitos, consulta la documentación oficial de la carrera.</p>
            <div class="text-center mt-4">
                <a href="/oferta-educativa.php" class="btn btn-primary">Ver Oferta Educativa Completa</a>
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
