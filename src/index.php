<?php
$file = 'visitas.txt';
$visitas = file_exists($file) ? intval(file_get_contents($file)) : 0;
file_put_contents($file, $visitas); // Asegúrate de que el contador se actualice

// Lógica PHP para manejar el envío del formulario de registro
$mensajeFormularioExito = '';
$mensajeFormularioError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_form'])) {
    $nombre = htmlspecialchars($_POST['nombre_completo'] ?? '');
    $email = htmlspecialchars($_POST['correo_electronico'] ?? '');
    $telefono = htmlspecialchars($_POST['telefono_contacto'] ?? '');
    $genero = htmlspecialchars($_POST['genero'] ?? '');
    $fecha_nacimiento = htmlspecialchars($_POST['fecha_nacimiento'] ?? '');
    $acepta_terminos = isset($_POST['acepta_terminos']);

    // Validación básica
    if (empty($nombre) || empty($email) || empty($telefono) || empty($genero) || empty($fecha_nacimiento)) {
        $mensajeFormularioError = "Por favor, completa todos los campos del formulario.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensajeFormularioError = "Por favor, introduce una dirección de correo electrónico válida.";
    } elseif (!$acepta_terminos) {
        $mensajeFormularioError = "Debes aceptar los términos y condiciones.";
    } else {
        $destinatario = "tu_correo@itess.edu.mx"; // CAMBIA ESTO A UN CORREO REAL
        $asunto = "Nuevo Registro desde la Landing Page ITESS";
        $cabeceras = "From: " . $email . "\r\n" .
                     "Reply-To: " . $email . "\r\n" .
                     "X-Mailer: PHP/" . phpversion();
        $contenidoCorreo = "Nuevo registro en la landing page:\n\n" .
                           "Nombre Completo: " . $nombre . "\n" .
                           "Correo Electrónico: " . $email . "\n" .
                           "Teléfono de Contacto: " . $telefono . "\n" .
                           "Género: " . $genero . "\n" .
                           "Fecha de Nacimiento: " . $fecha_nacimiento . "\n" .
                           "Acepta Términos: " . ($acepta_terminos ? "Sí" : "No") . "\n";

        // Descomenta la siguiente línea para intentar enviar el correo.
        // Si descomentas esta línea, el mensaje simulado solo se mostrará si mail() tiene éxito.
        // Si mail() falla, se mostrará el mensaje de error.
        // if (mail($destinatario, $asunto, $contenidoCorreo, $cabeceras)) {
        //     $mensajeFormularioExito = "¡Gracias por registrarte! Hemos recibido tu información.";
        //     $_POST = array(); // Limpiar campos después de un envío exitoso
        // } else {
        //     $mensajeFormularioError = "Hubo un problema al enviar tu registro. Por favor, inténtalo de nuevo más tarde. (Error de envío de correo)";
        // }

        // Si la función mail() está comentada, siempre se mostrará el mensaje de éxito simulado.
        if (!isset($mensajeFormularioError) || empty($mensajeFormularioError)) { // Solo si no hay errores de validación
            $mensajeFormularioExito = "¡Gracias por registrarte! Hemos recibido tu información (simulado).";
            $_POST = array(); // Limpiar campos después de un envío exitoso simulado
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ITESS - Tecnologías de la Información y Comunicación</title>
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

    <!-- Hero Section -->
    <section id="hero-section" class="hero-section container animate__animated animate__fadeIn">
        <div class="text-center mb-4">
            <h2 class="bg-primary text-white p-3 rounded">
                Conoce más sobre la carrera de TIC
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex flex-wrap gap-3 justify-content-center">
                <a href="/sobre-la-carrera.php" class="btn-tic">
                    <span>Información de la carrera</span>
                    <div class="ellipse">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </a>
                <a href="/oferta-educativa.php" class="btn-tic">
                    <span>Especialidades</span>
                    <div class="ellipse">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </a>
                <a href="/cursos.php" class="btn-tic">
                    <span>Cursos</span>
                    <div class="ellipse">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </a>
                <a href="/testimonios.php" class="btn-tic">
                    <span>Experiencias de alumnos</span>
                    <div class="ellipse">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </a>
                <a href="/residencias.php" class="btn-tic">
                    <span>Información de residencias</span>
                    <div class="ellipse">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </a>
                <a href="/profesores.php" class="btn-tic">
                    <span>Profesores</span>
                    <div class="ellipse">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <div class="carousel slide" data-bs-ride="carousel" id="carouselExample">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="Estudiantes en el laboratorio" class="d-block w-100" src="img/tic1.png"/>
                            <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                <p>Te ofrecemos la mejor oferta educativa de la región...</p>
                                <a class="btn btn-primary" href="#">Más detalles</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img alt="Profesor explicando a estudiantes" class="d-block w-100" src="img/tic2.png"/>
                            <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                <p>Conoce a nuestros docentes y sus proyectos innovadores.</p>
                                <a class="btn btn-primary" href="#">Ver más</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img alt="Estudiantes colaborando en un proyecto" class="d-block w-100" src="img/tic3.png"/>
                            <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                                <p>Participa en talleres y eventos de tecnología.</p>
                                <a class="btn btn-primary" href="#">Explorar</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExample" type="button">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExample" type="button">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección con imagen + texto -->
    <section id="seccion-oportunidades" class="custom-section py-5 animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 mb-4 mb-md-0">
                    <img alt="Imagen de ejemplo" class="img-fluid rounded shadow-sm" src="img/tic6.png"/>
                </div>
                <div class="col-md-7">
                    <h2 class="mb-3">Oportunidades académicas</h2>
                    <p class="mb-4">Prepárate para un futuro lleno de innovación y tecnología con programas diseñados para líderes del mañana.</p>
                    <div class="item-row mb-3">
                        <div class="item-subtitle fw-bold">Innovación:</div>
                        <div>Desarrolla soluciones tecnológicas avanzadas con el apoyo de expertos en nuevas tecnologías.</div>
                    </div>
                    <div class="item-row mb-3">
                        <div class="item-subtitle fw-bold">Proyectos:</div>
                        <div>Participa en proyectos reales con empresas líderes en tecnología e innovación educativa.</div>
                    </div>
                    <div class="item-row">
                        <div class="item-subtitle fw-bold">Redes:</div>
                        <div>Conéctate con alumnos y egresados destacados que están trabajando en el sector tecnológico nacional e internacional.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 1 -->
    <section id="seccion-1" class="seccion animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <p style="font-size:24px; font-weight:700;">
                        "Estudiantes de todas partes del mundo llegan al Instituto Tecnológico Superior de Salvatierra donde imparto clases. En mis grupos he tenido ingenieros especializados, emprendedores tecnológicos, científicos, desarrolladores, expertos en ciberseguridad y profesionales de distintas etapas en sus trayectorias dentro del sector digital."
                    </p>
                    <button class="button" style="margin-top:16px;">
                        Acerca de mi...
                    </button>
                    <p style="margin-top:12px; font-size:16px;">
                        <strong>Francisco Javier Montecillo Puentes</strong><br/>
                        Doctor en Electrónica y profesor en ITESS en la carrera de TIC.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img alt="Dr Montecillo" class="responsive" src="img/tic4.png"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 2 -->
    <section id="seccion-2" class="seccion animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <h2 class="text-center">¿Qué hace único al ITESS en la carrera de TIC?</h2>
                    <p class="text-center">Descubre el mundo de la formación en Tecnologías de la Información y la Comunicación (TIC) a través de las experiencias de nuestros estudiantes.
Escucha por qué eligieron ITESS — ya sea por sus docentes especializados en tecnologías emergentes , la comunidad académica diversa e innovadora o la formación práctica orientada a resolver desafíos reales del sector digital .</p>
                    <div class="d-flex justify-content-center">
                        <button class="button">Escucha a nuestros estudiantes</button>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/WLsTzYBFb8I?si=yvsy8kD0AgHN__0p" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 3 -->
    <section id="seccion-3" class="seccion animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="bg-title mx-auto" style="max-width: 600px;">
                        Acerca de la carrera de TIC en ITESS
                    </div>
                    <p class="mx-auto" style="max-width:512px; margin-top:16px;">
                        La carrera de Tecnologías de la Información y la Comunicación en ITESS está diseñada para formar profesionales capaces de diseñar, implementar y gestionar soluciones tecnológicas en un entorno digital en constante evolución. Desde su creación, el programa ha enfocado sus esfuerzos en brindar oportunidades educativas flexibles y de calidad, orientadas a estudiantes que combinan su vida laboral o personal con la formación académica, con el objetivo de generar un impacto significativo en el sector tecnológico nacional e internacional.
                    </p>
                    <div class="d-flex justify-content-center mt-3">
                        <button class="button">Conozca más</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 4 -->
    <section id="seccion-programas" class="seccion animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="bg-title mx-auto" style="max-width: 600px;">
                        Explora nuestros programas
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="programa-card">
                        <div class="info">
                            <h4>Certificados especializados en TIC</h4>
                            <p>Desarrolla competencias técnicas y habilidades prácticas en áreas como ciberseguridad , análisis de datos , desarrollo de software o gestión de tecnologías emergentes para impulsar tu carrera profesional en el sector digital.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="programa-card">
                        <div class="info">
                            <h4>Certificados técnicos en TIC</h4>
                            <p>Explora temas específicos como redes seguras , programación avanzada , inteligencia artificial o cloud computing para complementar tu formación o alcanzar objetivos profesionales concretos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="programa-card">
                        <div class="info">
                            <h4>Licenciatura en TIC</h4>
                            <p>Formación integral y flexible para profesionales en tecnologías digitales. Combina estudios teóricos y prácticos en áreas como desarrollo ágil , seguridad informática , gestión de proyectos y innovación tecnológica , adaptada a tus horarios.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="programa-card">
                        <div class="info">
                            <h4>Especialización en Tecnologías Emergentes</h4>
                            <p>Prepárate para dominar tendencias como el Internet de las Cosas (IoT) , blockchain , computación cuántica o metaverso , con enfoque en aplicaciones prácticas y casos reales del sector.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="programa-card">
                        <div class="info">
                            <h4>Cursos técnicos y talleres</h4>
                            <p>Aprende habilidades clave en semestres cortos: desde ciberseguridad ética hasta automatización de procesos o desarrollo de apps móviles , con metodología práctica y mentorías personalizadas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="programa-card">
                        <div class="info">
                            <h4>Posgrados en TIC</h4>
                            <p>Adquiere conocimientos avanzados y habilidades especializadas para liderar proyectos tecnológicos, innovar en entornos empresariales o contribuir al desarrollo de soluciones digitales con impacto real.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 5: Últimos blogs, noticias y anuncios de la carrera de TICs en ITESS -->
    <section id="seccion-blogs" class="seccion animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="bg-title mx-auto" style="max-width: 600px;">
                        Últimos blogs, noticias y anuncios de la carrera de TICs en ITESS
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-nowrap overflow-auto pb-3 custom-scroll-container">
                        <!-- Card 1 -->
                        <div class="card flex-shrink-0 me-3 news-card-custom">
                            <img alt="Innovaciones en ciberseguridad" src="img/tic5.png" class="card-img-top"/>
                            <div class="card-body text-center">
                                <p class="card-text">Innovaciones en ciberseguridad 2025-2026</p>
                                <button class="button">Leer más</button>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="card flex-shrink-0 me-3 news-card-custom">
                            <img alt="Hackathon 2025" src="img/tic7.png" class="card-img-top"/>
                            <div class="card-body text-center">
                                <p class="card-text">ITESS celebra Hackathon Nacional de IA 2025</p>
                                <button class="button">Leer más</button>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="card flex-shrink-0 me-3 news-card-custom">
                            <img alt="Nuevo laboratorio de robótica" src="img/tic8.png" class="card-img-top"/>
                            <div class="card-body text-center">
                                <p class="card-text">Inauguración del nuevo laboratorio de robótica</p>
                                <button class="button">Leer más</button>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="card flex-shrink-0 me-3 news-card-custom">
                            <img alt="Conferencia de desarrollo web" src="img/tic9.png" class="card-img-top"/>
                            <div class="card-body text-center">
                                <p class="card-text">Conferencia anual de desarrollo web</p>
                                <button class="button">Leer más</button>
                            </div>
                        </div>
                        <!-- Card 5 -->
                        <div class="card flex-shrink-0 me-3 news-card-custom">
                            <img alt="Proyectos estudiantiles destacados" src="img/tic10.png" class="card-img-top"/>
                            <div class="card-body text-center">
                                <p class="card-text">Proyectos estudiantiles destacados del semestre</p>
                                <button class="button">Leer más</button>
                            </div>
                        </div>
                        <!-- Card 6 -->
                        <div class="card flex-shrink-0 news-card-custom">
                            <img alt="Seminario de Big Data" src="img/tic11.png" class="card-img-top"/>
                            <div class="card-body text-center">
                                <p class="card-text">Seminario internacional de Big Data</p>
                                <button class="button">Leer más</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 6 -->
    <section id="seccion-formulario" class="seccion animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mx-auto mb-4 mb-md-0">
                    <div class="formulario mx-auto">
                        <h3 class="text-center">Regístrese para que no se pierda de nada</h3>
                        <?php if ($mensajeFormularioExito): ?>
                            <div class="alert alert-success text-center animate__animated animate__fadeIn" role="alert">
                                <?php echo $mensajeFormularioExito; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($mensajeFormularioError): ?>
                            <div class="alert alert-danger text-center animate__animated animate__fadeIn" role="alert">
                                <?php echo $mensajeFormularioError; ?>
                            </div>
                        <?php endif; ?>
                        <form method="POST" action="/index.php">
                            <div class="mb-3">
                                <input class="form-control" placeholder="Nombre completo" type="text" name="nombre_completo" value="<?php echo $_POST['nombre_completo'] ?? ''; ?>" required/>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" placeholder="Correo electrónico" type="email" name="correo_electronico" value="<?php echo $_POST['correo_electronico'] ?? ''; ?>" required/>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" placeholder="Teléfono de contacto" type="tel" name="telefono_contacto" value="<?php echo $_POST['telefono_contacto'] ?? ''; ?>" required/>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" placeholder="Género" type="text" name="genero" value="<?php echo $_POST['genero'] ?? ''; ?>" required/>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" placeholder="Fecha de nacimiento" type="date" name="fecha_nacimiento" value="<?php echo $_POST['fecha_nacimiento'] ?? ''; ?>" required/>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" id="terms" name="acepta_terminos" <?php echo isset($_POST['acepta_terminos']) ? 'checked' : ''; ?>/>
                                <label class="form-check-label" for="terms">
                                    Usted acepta nuestros
                                    <a href="terminos-uso.php">términos y condiciones</a>
                                </label>
                            </div>
                            <div class="d-grid">
                                <button class="button submit mx-auto" style="width: 200px;" type="submit" name="submit_form">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 mx-auto text-center">
                    <img alt="Estudiante" class="responsive" src="img/tic12.png"/>
                </div>
            </div>
        </div>
    </section>

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
