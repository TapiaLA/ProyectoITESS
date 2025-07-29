<?php
// Lógica PHP específica para la página de Profesores
$profesores = [
    [
        "nombre" => "Dr. Francisco Javier Montecillo Puentes",
        "especialidad" => "Electrónica y Sistemas Embebidos",
        "email" => "f.montecillo@itess.edu.mx",
        "descripcion" => "Doctor en Electrónica con amplia experiencia en el desarrollo de sistemas embebidos y robótica. Investigador activo en proyectos de automatización industrial.",
        "imagen" => "https://placehold.co/150x150/0046b8/ffffff?text=Dr.+Montecillo"
    ],
    [
        "nombre" => "Mtra. Ana Sofía García López",
        "especialidad" => "Desarrollo Web Full Stack",
        "email" => "a.garcia@itess.edu.mx",
        "descripcion" => "Maestra en Tecnologías de la Información. Experta en frameworks modernos de desarrollo web (React, Node.js) y bases de datos NoSQL. Lidera proyectos de aplicaciones web escalables.",
        "imagen" => "https://placehold.co/150x150/00a99d/ffffff?text=Mtra.+Garcia"
    ],
    [
        "nombre" => "Ing. Carlos Alberto Ramírez Soto",
        "especialidad" => "Ciberseguridad y Redes",
        "email" => "c.ramirez@itess.edu.mx",
        "descripcion" => "Ingeniero en Sistemas Computacionales con certificaciones en seguridad de redes (CCNA Security, CompTIA Security+). Especialista en auditorías de seguridad y protección de infraestructuras críticas.",
        "imagen" => "https://placehold.co/150x150/007f7f/ffffff?text=Ing.+Ramirez"
    ],
    [
        "nombre" => "Dra. Laura Elena Mendoza Torres",
        "especialidad" => "Inteligencia Artificial y Machine Learning",
        "email" => "l.mendoza@itess.edu.mx",
        "descripcion" => "Doctora en Ciencias de la Computación. Su investigación se centra en algoritmos de aprendizaje automático, procesamiento de lenguaje natural y visión por computadora. Ha publicado en diversas conferencias internacionales.",
        "imagen" => "https://placehold.co/150x150/5a94ff/ffffff?text=Dra.+Mendoza"
    ],
    [
        "nombre" => "Mtro. José Luis Hernández Pérez",
        "especialidad" => "Bases de Datos y Big Data",
        "email" => "j.hernandez@itess.edu.mx",
        "descripcion" => "Maestro en Ingeniería de Software. Experto en diseño y optimización de bases de datos relacionales y no relacionales. Imparte cursos sobre gestión de grandes volúmenes de datos y herramientas de Big Data.",
        "imagen" => "https://placehold.co/150x150/2db3a8/ffffff?text=Mtro.+Hernandez"
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Nuestros Profesores - ITESS</title>
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
        /* Estilos específicos para las tarjetas de profesor */
        .professor-card {
            background-color: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 25px;
            text-align: center;
            height: 100%; /* Asegura que todas las tarjetas tengan la misma altura */
        }
        .professor-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        .professor-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary);
            margin-bottom: 15px;
            transition: border-color 0.3s ease;
        }
        .professor-name {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }
        .professor-specialty {
            font-size: 0.95rem;
            color: var(--secondary);
            margin-bottom: 10px;
        }
        .professor-description {
            font-size: 0.9rem;
            color: var(--text-main);
            line-height: 1.6;
            flex-grow: 1; /* Permite que la descripción ocupe el espacio restante */
        }
        .professor-contact {
            margin-top: 15px;
            font-size: 0.9rem;
            color: var(--text-main);
        }
        .professor-contact a {
            color: var(--primary);
            text-decoration: none;
        }
        .professor-contact a:hover {
            text-decoration: underline;
        }

        /* Adaptación a modo oscuro */
        body.dark-mode .professor-card {
            background-color: var(--card-bg); /* Fondo de tarjeta en dark mode */
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
        }
        body.dark-mode .professor-img {
            border-color: var(--primary); /* Borde de imagen en dark mode */
        }
        body.dark-mode .professor-name {
            color: var(--primary); /* Nombre en dark mode */
        }
        body.dark-mode .professor-specialty {
            color: var(--secondary); /* Especialidad en dark mode */
        }
        body.dark-mode .professor-description,
        body.dark-mode .professor-contact {
            color: var(--text-main); /* Texto claro en dark mode */
        }
        body.dark-mode .professor-contact a {
            color: var(--primary); /* Enlace en dark mode */
        }
    </style>
</head>
<body>
    <?php include_once 'includes/navbar.php'; // Incluye la barra de navegación ?>

    <div class="container my-5">
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Nuestros Profesores</h1>
        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp">
            <p class="text-center mb-4">Conoce al equipo de docentes altamente calificados que te guiarán en tu camino por las Tecnologías de la Información y Comunicación en ITESS.</p>

            <?php if (empty($profesores)): ?>
                <p class="text-center text-muted">No hay información de profesores disponible en este momento.</p>
            <?php else: ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <?php foreach ($profesores as $profesor): ?>
                        <div class="col">
                            <div class="professor-card">
                                <img src="<?php echo $profesor['imagen']; ?>" alt="Foto de <?php echo $profesor['nombre']; ?>" class="professor-img">
                                <h5 class="professor-name"><?php echo $profesor['nombre']; ?></h5>
                                <p class="professor-specialty"><?php echo $profesor['especialidad']; ?></p>
                                <p class="professor-description"><?php echo $profesor['descripcion']; ?></p>
                                <p class="professor-contact">
                                    Contacto: <a href="mailto:<?php echo $profesor['email']; ?>"><?php echo $profesor['email']; ?></a>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <p class="mt-4 text-center">Nuestro equipo docente está comprometido con la excelencia académica y tu desarrollo profesional.</p>
            <div class="text-center mt-4">
                <a href="/contacto.php" class="btn btn-primary">Contactar a la Coordinación Académica</a>
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
