<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Licencia del Proyecto - ITESS</title>
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
        .license-section h2, .license-section h3 {
            color: var(--primary);
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }
        .license-section p, .license-section ul, .license-section ol, .license-section pre {
            color: var(--text-main);
            line-height: 1.6;
            margin-bottom: 1rem;
        }
        .license-section pre {
            background-color: var(--light-bg);
            border: 1px solid var(--chatbot-border-color);
            border-radius: 8px;
            padding: 15px;
            overflow-x: auto; /* Permite scroll horizontal si el código es muy largo */
            font-family: 'Courier New', Courier, monospace;
            font-size: 0.9em;
            color: var(--text-main);
        }
        /* Adaptación a modo oscuro */
        body.dark-mode .license-section h2,
        body.dark-mode .license-section h3 {
            color: var(--primary); /* Asegurar color primario en dark mode */
        }
        body.dark-mode .license-section p,
        body.dark-mode .license-section ul li,
        body.dark-mode .license-section ol li {
            color: var(--text-main); /* Texto claro en dark mode */
        }
        body.dark-mode .license-section pre {
            background-color: #1f1f1f; /* Fondo más oscuro para el bloque de código */
            border-color: #444; /* Borde más oscuro */
            color: #e0e0e0; /* Texto claro para el código */
        }
    </style>
</head>
<body>
    <?php include_once 'includes/navbar.php'; // Incluye la barra de navegación ?>

    <div class="container my-5">
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Licencia del Proyecto</h1>
        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp license-section">
            <p>Este proyecto se distribuye bajo la siguiente licencia, que define los términos de uso, copia, modificación y distribución del software.</p>

            <h2 class="mt-4">Licencia MIT (Exemplo)</h2>
            <p>A continuación, se presenta un ejemplo de la Licencia MIT. Tenga en cuenta que esta es una plantilla y debe ser adaptada a las necesidades específicas de su proyecto.</p>

            <pre>
MIT License

Copyright (c) 2025 [Tu Nombre o el Nombre de tu Organización]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
            </pre>

            <h3 class="mt-4">Puntos Clave de la Licencia MIT:</h3>
            <ul>
                <li><strong>Permisiva:</strong> Permite el uso, copia, modificación, fusión, publicación, distribución, sublicencia y venta del software.</li>
                <li><strong>Atribución:</strong> Requiere que el aviso de copyright y el aviso de permiso se incluyan en todas las copias o porciones sustanciales del software.</li>
                <li><strong>Sin Garantía:</strong> El software se proporciona "tal cual", sin garantía de ningún tipo, expresa o implícita.</li>
                <li><strong>Limitación de Responsabilidad:</strong> Los autores o titulares de los derechos de autor no son responsables de ninguna reclamación, daño u otra responsabilidad.</li>
            </ul>

            <p class="mt-4">Para obtener más información sobre las licencias de software de código abierto, puede consultar recursos como la <a href="https://opensource.org/licenses/" target="_blank">Iniciativa de Código Abierto (OSI)</a>.</p>
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
