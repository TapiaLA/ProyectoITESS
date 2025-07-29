<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Aviso de Privacidad - ITESS</title>
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
        /* Estilos específicos si son necesarios para esta página */
        .privacy-section h2, .privacy-section h3 {
            color: var(--primary);
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }
        .privacy-section p, .privacy-section ul {
            color: var(--text-main);
            line-height: 1.6;
        }
        .privacy-section ul {
            list-style-type: disc;
            margin-left: 20px;
            padding-left: 0;
        }
        .privacy-section ul li {
            margin-bottom: 0.5rem;
        }
        /* Adaptación a modo oscuro */
        body.dark-mode .privacy-section h2,
        body.dark-mode .privacy-section h3 {
            color: var(--primary); /* Asegurar color primario en dark mode */
        }
        body.dark-mode .privacy-section p,
        body.dark-mode .privacy-section ul li {
            color: var(--text-main); /* Texto claro en dark mode */
        }
    </style>
</head>
<body>
    <?php include_once 'includes/navbar.php'; // Incluye la barra de navegación ?>

    <div class="container my-5">
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Aviso de Privacidad</h1>
        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp privacy-section">
            <p>El Instituto Tecnológico Superior de Salvatierra (ITESS), con domicilio en [Dirección del ITESS], es responsable del tratamiento de sus datos personales, del uso que se les dé y de su protección.</p>

            <h2 class="mt-4">Finalidades del Tratamiento de Datos Personales</h2>
            <p>Sus datos personales serán utilizados para las siguientes finalidades:</p>
            <ul>
                <li>Proveer los servicios educativos que ha solicitado.</li>
                <li>Informar sobre cambios o nuevos servicios relacionados con el ámbito educativo.</li>
                <li>Dar cumplimiento a obligaciones contraídas con nuestros estudiantes.</li>
                <li>Evaluar la calidad del servicio.</li>
                <li>Realizar estudios sobre hábitos de consumo y preferencias para fines académicos y de mejora continua.</li>
            </ul>

            <h2 class="mt-4">Datos Personales Recabados</h2>
            <p>Para las finalidades señaladas en el presente aviso de privacidad, podemos recabar sus datos personales de distintas formas: cuando usted nos los proporciona directamente; cuando visita nuestro sitio de internet o utiliza nuestros servicios en línea, y cuando obtenemos información a través de otras fuentes que están permitidas por la ley.</p>
            <p>Los datos personales que recabamos de forma directa y/o indirecta son, entre otros:</p>
            <ul>
                <li>Nombre completo, fecha de nacimiento, género.</li>
                <li>Dirección, teléfono, correo electrónico.</li>
                <li>Información académica y trayectoria educativa.</li>
                <li>Datos de facturación (en caso de requerirse).</li>
            </ul>

            <h2 class="mt-4">Transferencia de Datos Personales</h2>
            <p>Sus datos personales pueden ser transferidos y tratados dentro y fuera del país, por personas distintas a esta institución. En ese sentido, su información puede ser compartida con:</p>
            <ul>
                <li>Instituciones educativas asociadas para fines de intercambio académico.</li>
                <li>Autoridades competentes para el cumplimiento de obligaciones legales.</li>
                <li>Proveedores de servicios que apoyan el funcionamiento de la institución (ej. plataformas de gestión académica, servicios de correo electrónico).</li>
            </ul>
            <p>Nos comprometemos a no transferir su información personal a terceros sin su consentimiento, salvo las excepciones previstas en el artículo 37 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, así como a realizar esta transferencia en los términos que fija esa ley.</p>

            <h2 class="mt-4">Derechos ARCO (Acceso, Rectificación, Cancelación y Oposición)</h2>
            <p>Usted tiene derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no está siendo utilizada adecuadamente (Cancelación); así como oponerse al uso de sus datos personales para fines específicos (Oposición).</p>
            <p>Para ejercer cualquiera de los derechos ARCO, usted deberá presentar la solicitud respectiva a través de un correo electrónico a [correo_contacto@itess.edu.mx] o directamente en nuestras oficinas.</p>

            <h2 class="mt-4">Cambios al Aviso de Privacidad</h2>
            <p>El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales; de nuestras propias necesidades por los productos o servicios que ofrecemos; de nuestras prácticas de privacidad; de cambios en nuestro modelo de negocio, o por otras causas.</p>
            <p>Nos comprometemos a mantenerlo informado sobre los cambios que pueda sufrir el presente aviso de privacidad, a través de nuestro sitio web oficial https://itess.edu.mx/.</p>

            <p class="mt-4 text-center"><strong>Fecha de última actualización:</strong> 28 de Julio de 2025</p>
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