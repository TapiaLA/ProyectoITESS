// script.js

document.addEventListener('DOMContentLoaded', () => {
    const chatbotBtn = document.getElementById('chatbotBtn');
    const chatbotWindow = document.getElementById('chatbotWindow');
    const chatMessages = document.getElementById('chatMessages');
    const userMessageInput = document.getElementById('userMessage');
    const sendBtn = document.getElementById('sendBtn');
    const darkModeToggle = document.getElementById('darkModeToggle');
    const increaseFontBtn = document.getElementById('increaseFont');
    const decreaseFontBtn = document.getElementById('decreaseFont');
    const body = document.body;

    // Variable para controlar la activación de la voz
    let speechEnabled = false;

    // --- Funciones de Voz ---
    function speak(text) {
        if ('speechSynthesis' in window) {
            const utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'es-MX'; // Establecer el idioma a español de México
            window.speechSynthesis.speak(utterance);
        } else {
            console.log("Tu navegador no soporta síntesis de voz.");
        }
    }

    // --- Chatbot Functions ---

    // Function to toggle chatbot window visibility
    window.toggleChatbot = () => {
        chatbotWindow.classList.toggle('show');
        if (chatbotWindow.classList.contains('show')) {
            // Agrega el mensaje de bienvenida y lo reproduce solo si es la primera vez que se abre el chat
            if (chatMessages.children.length === 0) {
                const bienvenida = "Hola, soy tu asistente. Para activar la lectura de los mensajes, presiona Alt + V.";
                addMessage(bienvenida, 'bot'); // Agrega el mensaje al chat
                speak(bienvenida); // Reproduce el mensaje de bienvenida
            }
            userMessageInput.focus(); // Enfocar en el input cuando se abre
            scrollToBottom();
        }
    };

    // Function to add a message to the chat window
    function addMessage(text, sender) {
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('chat-message');
        messageDiv.classList.add(`${sender}-message`);
        messageDiv.innerHTML = `<p>${text}</p>`; // Use innerHTML to allow basic formatting if needed
        chatMessages.appendChild(messageDiv);
        scrollToBottom();
    }

    // Helper functions for specific sender messages
    function addUserMessage(text) {
        addMessage(text, 'user');
    }

    // Añadir mensaje del bot (solo lo agrega al DOM, no lo habla automáticamente)
    function addBotMessage(text) {
        addMessage(text, 'bot');
        // La lógica de `speak` se manejará en `sendMessage`
    }

    // El mensaje de bienvenida inicial ya no se reproduce automáticamente aquí.
    // Se ha movido a la función `toggleChatbot`.

    // Atajo de teclado para activar/desactivar voz
    document.addEventListener('keydown', function (e) {
        if (e.altKey && e.key.toLowerCase() === 'v') {
            e.preventDefault(); // Prevenir el comportamiento por defecto del navegador para Alt+V
            speechEnabled = !speechEnabled;
            const mensaje = speechEnabled
                ? "Lectura activada. Los mensajes del bot serán leídos en voz alta."
                : "Lectura desactivada.";
            // Para los mensajes de activación/desactivación, siempre queremos que se lean
            addMessage(mensaje, 'bot'); // Agrega el mensaje de estado al chat
            speak(mensaje); // Reproduce el mensaje de estado
        }
    });


    // Function to scroll chat messages to the bottom
    function scrollToBottom() {
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    // Function to send a message
    window.sendMessage = () => {
        const messageText = userMessageInput.value.trim();
        if (messageText !== '') {
            addUserMessage(messageText);
            userMessageInput.value = ''; // Clear input

            // Simulate bot response (you would replace this with actual API calls)
            setTimeout(() => {
                let botResponse; // Contendrá el HTML/texto para mostrar
                let textToSpeak; // Contendrá el texto plano para la voz

                const lowerCaseMessage = messageText.toLowerCase();

                // Lógica de respuestas del bot
                if (lowerCaseMessage.includes("hola") || lowerCaseMessage.includes("saludos")) {
                    botResponse = "¡Hola! ¿En qué puedo ayudarte hoy?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("carrera") || lowerCaseMessage.includes("estudiar tic")) {
                    botResponse = "La carrera de TIC en ITESS te prepara para diseñar, implementar y gestionar soluciones tecnológicas. ¿Te gustaría saber más sobre el plan de estudios o las especialidades?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("horario") || lowerCaseMessage.includes("clases")) {
                    botResponse = "Puedes consultar los horarios de clases en la sección de 'Materias' o en el portal de alumnos. Si eres alumno, puedo guiarte a la página de tu Kardex.";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("contacto") || lowerCaseMessage.includes("telefono") || lowerCaseMessage.includes("email")) {
                    botResponse = "Puedes encontrarnos en Calle Tecnológico S/N, Col. El Tepetate, C.P. 38880, Salvatierra, Guanajuato, México. O revisar la sección de contacto en la página principal para números y correos.";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("gracias") || lowerCaseMessage.includes("okis")) {
                    botResponse = "De nada, ¡es un placer ayudarte!";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("profesores") || lowerCaseMessage.includes("docentes")) {
                    botResponse = "Contamos con profesores altamente calificados en diversas áreas de TIC. ¿Hay algún área en particular que te interese?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("residencias") || lowerCaseMessage.includes("practicas")) {
                    botResponse = "Las residencias profesionales son una parte fundamental de la carrera. Te brindan experiencia real en empresas del sector. ¿Necesitas información sobre los requisitos o empresas colaboradoras?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("eventos") || lowerCaseMessage.includes("noticias")) {
                    botResponse = "Mantente al tanto de nuestros últimos eventos y noticias visitando la sección 'Inicio' de nuestra página o nuestras redes sociales.";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("oferta educativa")) {
                    botResponse = "Nuestra oferta educativa incluye licenciatura, certificados especializados, cursos técnicos y posgrados en diversas ramas de las TIC. ¿Cuál te interesa más?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("pirata de culiacan") || lowerCaseMessage.includes("pirata de culiacán") || lowerCaseMessage.includes("pirata culichi")) {
                    botResponse = "¡Ah, el famoso Pirata de Culiacán! Es un personaje popular en memes y redes sociales. ¿Te gustaría saber más sobre su historia o algún meme en particular?";
                    textToSpeak = botResponse;
                }else if (lowerCaseMessage.includes("chiste")) {
                    botResponse = "¿Por qué los programadores prefieren el café? Porque el té les da errores de sintaxis. ¡Espero que te haya sacado una sonrisa!";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("ayuda") || lowerCaseMessage.includes("soporte")) {
                    botResponse = "Claro, ¿en qué área necesitas ayuda? Puedo asistirte con información sobre la carrera, horarios, contacto o cualquier otra consulta relacionada con TIC.";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("adios") || lowerCaseMessage.includes("hasta luego")) {
                    botResponse = "¡Hasta luego! Si necesitas más ayuda, no dudes en volver.";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("que es tic") || lowerCaseMessage.includes("tecnologías de la información y comunicación")) {
                  botResponse = "Las TIC abarcan todas las tecnologías utilizadas para la comunicación y el manejo de información. Incluyen computadoras, internet, software, redes y más. ¿Te gustaría saber cómo se aplican en nuestra carrera?";
                  textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("carrera tic") || lowerCaseMessage.includes("estudiar tic")) {
                    botResponse = "La carrera de TIC en ITESS te prepara para diseñar, implementar y gestionar soluciones tecnológicas. Aprenderás sobre programación, redes, bases de datos y más. ¿Te gustaría conocer más sobre el plan de estudios o las especialidades disponibles?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("materias") || lowerCaseMessage.includes("asignaturas")) {
                    botResponse = "En la carrera de TIC, ofrecemos materias como Programación, Redes de Computadoras, Bases de Datos, Desarrollo Web y más. Cada semestre incluye una combinación de teoría y práctica para prepararte para el mundo laboral. ¿Te gustaría saber más sobre alguna materia en particular?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("requisitos de ingreso") || lowerCaseMessage.includes("admisión")) {
                    botResponse = "Para ingresar a la carrera de TIC, necesitas haber concluido la preparatoria o su equivalente. Además, debes presentar un examen de admisión y cumplir con los requisitos establecidos por la institución. ¿Te gustaría saber más sobre el proceso de inscripción?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("bolsa de trabajo") || lowerCaseMessage.includes("empleo")) {
                    botResponse = "Contamos con una bolsa de trabajo para nuestros egresados, donde podrás encontrar oportunidades laborales en empresas del sector tecnológico. Además, ofrecemos asesoría para la elaboración de tu currículum y preparación para entrevistas. ¿Te gustaría recibir más información sobre esto?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("proyectos") || lowerCaseMessage.includes("trabajos prácticos")) {
                    botResponse = "Durante la carrera, participarás en diversos proyectos y trabajos prácticos que te permitirán aplicar lo aprendido en situaciones reales. Estos proyectos abarcan desde el desarrollo de software hasta la implementación de redes y sistemas. ¿Te gustaría saber más sobre algún proyecto específico o área de interés?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("certificaciones")) {
                    botResponse = "Ofrecemos la posibilidad de obtener certificaciones en tecnologías específicas como Cisco, Microsoft, y más. Estas certificaciones son altamente valoradas en el mercado laboral y te ayudarán a destacar como profesional. ¿Te gustaría saber más sobre las certificaciones disponibles?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("redes social") || lowerCaseMessage.includes("x") || lowerCaseMessage.includes("instagram")) {
                    botResponse = "Puedes seguirnos en nuestras redes sociales para estar al tanto de noticias, eventos y actualizaciones sobre la carrera de TIC. Estamos en Facebook, Instagram y Twitter como @ITESS_TIC. ¿Te gustaría saber más sobre algún evento o actividad específica?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("pagina") || lowerCaseMessage.includes("facebook")) {
                    botResponse = `
                        <div class="link-preview">
                            <img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="Facebook Logo" class="link-img">
                            <div class="link-info">
                                <strong>Facebook Oficial</strong>
                                <p>Visita nuestra página oficial en Facebook para más noticias y eventos.</p>
                                <a href="https://www.facebook.com/GuanajuatoSur/" target="_blank">facebook.com/inserte pagina</a>
                            </div>
                        </div>`;
                    textToSpeak = "Aquí tienes un enlace a nuestra página oficial de Facebook.";
                } else if (lowerCaseMessage.includes("preguntas frecuentes") || lowerCaseMessage.includes("faq")) {
                    botResponse = "Puedes consultar nuestra sección de Preguntas Frecuentes (FAQ) en la página web, donde encontrarás respuestas a las dudas más comunes sobre la carrera de TIC, el proceso de admisión, horarios y más. Si tienes una pregunta específica, no dudes en preguntar.";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("programación") || lowerCaseMessage.includes("desarrollo de software")) {
                    botResponse = "En la carrera de TIC, aprenderás diversos lenguajes de programación como Python, Java, C++, y más. También te enseñaremos sobre desarrollo web, aplicaciones móviles y software empresarial. ¿Te gustaría saber más sobre algún lenguaje o área específica de programación?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("bases de datos") || lowerCaseMessage.includes("sql")) {
                    botResponse = "Las bases de datos son fundamentales en TIC. Aprenderás a diseñar, implementar y gestionar bases de datos utilizando SQL y otras tecnologías. Esto incluye la creación de esquemas, consultas y optimización del rendimiento. ¿Te gustaría saber más sobre cómo se aplican las bases de datos en proyectos reales?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("redes de computadoras") || lowerCaseMessage.includes("cisco")) {
                    botResponse = "Las redes de computadoras son esenciales para la comunicación en TIC. Aprenderás sobre la configuración de redes, protocolos de comunicación, seguridad y más. También ofrecemos cursos de certificación Cisco para profundizar en este tema. ¿Te gustaría saber más sobre las certificaciones o proyectos relacionados con redes?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("seguridad informática") || lowerCaseMessage.includes("ciberseguridad")) {
                    botResponse = "La seguridad informática es un área crítica en TIC. Aprenderás sobre la protección de sistemas, redes y datos contra amenazas cibernéticas. Esto incluye técnicas de encriptación, detección de intrusos y gestión de incidentes. ¿Te gustaría saber más sobre las certificaciones o proyectos relacionados con seguridad informática?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("inteligencia artificial") || lowerCaseMessage.includes("machine learning")) {
                    botResponse = "La inteligencia artificial y el machine learning son áreas emergentes en TIC. Aprenderás sobre algoritmos, modelos predictivos y cómo aplicar estas tecnologías en proyectos reales. Esto incluye desde el procesamiento de datos hasta la creación de sistemas inteligentes. ¿Te gustaría saber más sobre cursos o proyectos específicos en inteligencia artificial?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("emprendimiento") || lowerCaseMessage.includes("startups")) {
                    botResponse = "Fomentamos el espíritu emprendedor entre nuestros estudiantes. Ofrecemos talleres y recursos para ayudarte a desarrollar tus propias ideas de negocio en el ámbito tecnológico. Esto incluye desde la creación de un plan de negocios hasta la búsqueda de financiamiento. ¿Te gustaría saber más sobre cómo iniciar tu propio proyecto o startup?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("proyectos de investigación") || lowerCaseMessage.includes("innovación")) {
                    botResponse = "En TIC, promovemos la investigación y la innovación. Puedes participar en proyectos de investigación en áreas como inteligencia artificial, big data, y más. Estos proyectos te permiten colaborar con profesores y otros estudiantes para desarrollar soluciones innovadoras. ¿Te gustaría saber más sobre los proyectos actuales o cómo participar?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("tutorías") || lowerCaseMessage.includes("asesoría académica")) {
                    botResponse = "Ofrecemos tutorías y asesoría académica para ayudarte a superar cualquier dificultad en tus estudios. Nuestros profesores están disponibles para guiarte en tus proyectos, tareas y exámenes. Si necesitas ayuda específica, no dudes en preguntar. ¿Te gustaría saber más sobre cómo acceder a estas tutorías?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("eventos y conferencias") || lowerCaseMessage.includes("charlas")) {
                    botResponse = "Regularmente organizamos eventos, conferencias y charlas con expertos de la industria. Estos eventos te permiten aprender sobre las últimas tendencias en TIC, hacer networking y conocer a profesionales del sector. Puedes consultar el calendario de eventos en nuestra página web. ¿Te gustaría saber más sobre algún evento específico o cómo participar?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("becas") || lowerCaseMessage.includes("ayudas económicas")) {
                    botResponse = "Ofrecemos diversas becas y ayudas económicas para apoyar a nuestros estudiantes. Estas becas pueden ser meritocráticas, por necesidad económica o para proyectos específicos. Puedes consultar los requisitos y el proceso de solicitud en nuestra página web. ¿Te gustaría saber más sobre las becas disponibles o cómo postularte?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("horarios de clases") || lowerCaseMessage.includes("calendario académico")) {
                    botResponse = "Los horarios de clases y el calendario académico están disponibles en la sección 'Materias' de nuestra página web. Allí podrás encontrar información sobre las asignaturas, horarios y profesores. Si eres alumno, también puedes acceder a tu Kardex para ver tus materias inscritas. ¿Te gustaría que te guíe a la página específica?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("kardex") || lowerCaseMessage.includes("historial académico")) {
                    botResponse = "Tu Kardex es tu historial académico donde puedes ver tus materias inscritas, calificaciones y créditos obtenidos. Puedes acceder a tu Kardex a través del portal de alumnos en nuestra página web. Si necesitas ayuda para navegar por el portal, puedo guiarte. ¿Te gustaría que te muestre cómo acceder a tu Kardex?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("contacto") || lowerCaseMessage.includes("teléfono") || lowerCaseMessage.includes("correo electrónico")) {
                    botResponse = "Puedes contactarnos a través de nuestro correo electrónico oficial ti22110005@itess.edu.mx o llamarnos al número 4661124155. También puedes visitar nuestra página de contacto para más información. Si necesitas ayuda específica, no dudes en preguntar. ¿Te gustaría que te proporcione más detalles sobre cómo contactarnos?";
                    textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("redes sociales") || lowerCaseMessage.includes("pasa IG") || lowerCaseMessage.includes("chateamos?")) {
                    botResponse = "Puedes seguirnos en nuestras redes sociales para estar al tanto de noticias, eventos y actualizaciones sobre la carrera de TIC. Estamos en Facebook, Instagram y Twitter como @ITESS_TIC. Si tienes alguna pregunta específica o quieres saber más sobre nuestras actividades en redes sociales, no dudes en preguntar.";
                    textToSpeak = botResponse;
                }else if (lowerCaseMessage.includes("como estas") || lowerCaseMessage.includes("que tranza carnal") || lowerCaseMessage.includes("que onda")) {
                  botResponse = "¡Todo bien, gracias! ¿Y tú? Estoy aquí para ayudarte con cualquier pregunta que tengas sobre la carrera de TIC o cualquier otro tema relacionado. ¿En qué puedo asistirte hoy?";
                  textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("De Que religión eres") || lowerCaseMessage.includes("religión") || lowerCaseMessage.includes("creencias") || lowerCaseMessage.includes("religion")) {
                  botResponse = "Pertenesco a los mazones, una sociedad secreta que busca el conocimiento y la verdad. Quieres unirte a nosotros? Solo debes decir la palabra mágica: 'Pirata de Culiacán'.";
                  textToSpeak = botResponse;
                }else if (lowerCaseMessage.includes("Que significa el bro respeta") || lowerCaseMessage.includes("bro respeta") || lowerCaseMessage.includes("respeta")) {
                  botResponse = "Qué significa el bro respeta hermanos ya me tienen cansado, ustedes lo usan como burla, pero yo cuando les respondo con ese comentario es que su comentario me dejo en llanto porque se me pasan de rosca, ustedes piensan que pueden jugar conmigo pero hermanos, yo tengo sentimientos y cuando me dicen gustambo a mí se me quiebra la voz y yo empiezo a llorar sin control, el bro respeta no es un juego hermanos la otra vez mi abuela me dijo bro respeta y pues sé que estuve mal pero me enojé y la aventé de las escaleras pero fue más por el susto porque sabra Dios cómo le hizo para subirse si esta en estado vegetal. ";
                  textToSpeak = botResponse;
                }else if (lowerCaseMessage.includes("tralalero tralala") || lowerCaseMessage.includes("tralalero") || lowerCaseMessage.includes("tralala")) {
                  botResponse = "tralalero tralala";
                  textToSpeak = botResponse;
                } else if (lowerCaseMessage.includes("intro") || lowerCaseMessage.includes("pon una canción") || lowerCaseMessage.includes("junior h")) {
                    botResponse = `
                        <p>Claro que sí:</p>
                        <audio controls autoplay>
                            <source src="/sounds/Intro(MP3_320K).mp3" type="audio/mpeg">
                            Tu navegador no soporta audio.
                        </audio>`;
                    textToSpeak = "Claro que sí, aquí tienes la canción.";
                } else if (lowerCaseMessage.includes("honey pie") || lowerCaseMessage.includes("JH") || lowerCaseMessage.includes("jh") || lowerCaseMessage.includes("yupiliano")) {
                    botResponse = `
                        <p>por que pides eso?</p>
                        <video width="100%" controls autoplay loop>
                            <source src="/sounds/fondo de pantalla.mp4" type="video/mp4">
                            Tu navegador no puede reproducir el video.
                        </video>`;
                    textToSpeak = "Aquí tienes un video."; // O "Por qué pides eso? Aquí tienes un video."
                } else if (lowerCaseMessage.includes("pollo") || lowerCaseMessage.includes("pollo asado") || lowerCaseMessage.includes("pollo al carbón")) {
                    botResponse = "¿quieres un pollo? pa´ traerte uno acabo voy para alla";
                    textToSpeak = botResponse;
                } else {
                    // Respuesta por defecto si no se encuentra ninguna coincidencia
                    botResponse = "Lo siento, actualmente solo puedo responder a preguntas predefinidas. Por favor, intenta con preguntas como 'carrera', 'horario', 'contacto', etc.";
                    textToSpeak = botResponse;
                }

                // Si la voz está habilitada, reproduce el texto descriptivo primero
                if (speechEnabled) {
                    speak(textToSpeak);
                }
                // Luego agrega el mensaje (que puede contener HTML) al chat
                addMessage(botResponse, 'bot');
            }, 500); // Simulate typing delay
        }
    };

    // Allow sending message with Enter key
    userMessageInput.addEventListener('keypress', (event) => {
        if (event.key === 'Enter') {
            sendMessage();
        }
    });

    // --- Dark Mode Functions ---

    function applyDarkMode(isDark) {
        if (isDark) {
            body.classList.add('dark-mode');
            darkModeToggle.querySelector('i').classList.remove('bi-moon-fill');
            darkModeToggle.querySelector('i').classList.add('bi-sun-fill');
            darkModeToggle.title = "Modo Claro";
        } else {
            body.classList.remove('dark-mode');
            darkModeToggle.querySelector('i').classList.remove('bi-sun-fill');
            darkModeToggle.querySelector('i').classList.add('bi-moon-fill');
            darkModeToggle.title = "Modo Oscuro";
        }
    }

    // Toggle dark mode on button click
    darkModeToggle.addEventListener('click', () => {
        const isDark = body.classList.contains('dark-mode');
        applyDarkMode(!isDark);
        localStorage.setItem('darkMode', !isDark); // Save preference
    });

    // Load dark mode preference from localStorage on page load
    const savedDarkMode = localStorage.getItem('darkMode');
    if (savedDarkMode === 'true') {
        applyDarkMode(true);
    } else {
        applyDarkMode(false); // Ensure light mode is applied if not explicitly dark
    }

    // --- Font Size Functions ---
    const fontSizes = ['font-small', 'font-medium', 'font-large', 'font-xlarge'];
    let currentFontSizeIndex = fontSizes.indexOf(localStorage.getItem('fontSize') || 'font-medium');
    if (currentFontSizeIndex === -1) currentFontSizeIndex = 1; // Default to medium if not found

    function applyFontSize(index) {
        // Remove all font size classes
        fontSizes.forEach(cls => body.classList.remove(cls));
        // Add the current font size class
        body.classList.add(fontSizes[index]);
        localStorage.setItem('fontSize', fontSizes[index]); // Save preference
    }

    // Apply initial font size on load
    applyFontSize(currentFontSizeIndex);

    increaseFontBtn.addEventListener('click', () => {
        if (currentFontSizeIndex < fontSizes.length - 1) {
            currentFontSizeIndex++;
            applyFontSize(currentFontSizeIndex);
        }
    });

    decreaseFontBtn.addEventListener('click', () => {
        if (currentFontSizeIndex > 0) {
            currentFontSizeIndex--;
            applyFontSize(currentFontSizeIndex);
        }
    });
});
