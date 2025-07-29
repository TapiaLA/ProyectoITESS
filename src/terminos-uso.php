<?php
// Lógica PHP específica para la página de Términos de Uso
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Términos de Uso - ITESS</title>
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
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Términos de Uso</h1>
        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp content-card">
            <p>Bienvenido al sitio web del Instituto Tecnológico Superior de Salvatierra (ITESS). Al acceder y utilizar este sitio, usted acepta cumplir y estar sujeto a los siguientes términos y condiciones de uso. Si no está de acuerdo con alguna parte de estos términos, por favor, no utilice nuestro sitio web.</p>

            <h2>1. Aceptación de los Términos</h2>
            <p>Estos Términos de Uso constituyen un acuerdo legalmente vinculante entre usted y el ITESS. Nos reservamos el derecho de modificar estos términos en cualquier momento. Su uso continuado del sitio después de cualquier modificación constituye su aceptación de los nuevos términos.</p>

            <h2>2. Uso del Sitio Web</h2>
            <ul>
                <li>El contenido de las páginas de este sitio web es para su información general y uso exclusivo. Está sujeto a cambios sin previo aviso.</li>
                <li>No garantizamos la exactitud, puntualidad, rendimiento, integridad o idoneidad de la información y los materiales encontrados u ofrecidos en este sitio web para ningún propósito particular. Usted reconoce que dicha información y materiales pueden contener inexactitudes o errores y excluimos expresamente la responsabilidad por tales inexactitudes o errores en la máxima medida permitida por la ley.</li>
                <li>Su uso de cualquier información o material en este sitio web es bajo su propio riesgo, para lo cual el ITESS no será responsable. Será su propia responsabilidad asegurarse de que cualquier producto, servicio o información disponible a través de este sitio web cumpla con sus requisitos específicos.</li>
            </ul>

            <h2>3. Propiedad Intelectual</h2>
            <p>Este sitio web contiene material que es propiedad o está licenciado al ITESS. Este material incluye, pero no se limita a, el diseño, el diseño, el aspecto, la apariencia y los gráficos. La reproducción está prohibida salvo de conformidad con el aviso de derechos de autor, que forma parte de estos términos y condiciones.</p>

            <h2>4. Enlaces a Otros Sitios Web</h2>
            <p>De vez en cuando, este sitio web también puede incluir enlaces a otros sitios web. Estos enlaces se proporcionan para su conveniencia para proporcionar más información. No significan que respaldamos los sitios web. No tenemos ninguna responsabilidad por el contenido de los sitios web vinculados.</p>

            <h2>5. Limitación de Responsabilidad</h2>
            <p>En ningún caso el ITESS será responsable de cualquier pérdida o daño, incluyendo, sin limitación, pérdidas o daños indirectos o consecuentes, o cualquier pérdida o daño que surja de la pérdida de datos o ganancias que surjan de, o en conexión con, el uso de este sitio web.</p>

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
