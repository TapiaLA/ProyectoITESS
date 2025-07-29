<?php
// Lógica PHP específica para la página de Horarios
$horariosClases = [
    ["curso" => "Programación Avanzada", "dia" => "Lunes", "hora" => "09:00 - 11:00", "salon" => "Lab. 101"],
    ["curso" => "Redes de Computadoras II", "dia" => "Martes", "hora" => "10:00 - 12:00", "salon" => "Aula 203"],
    ["curso" => "Bases de Datos Relacionales", "dia" => "Miércoles", "hora" => "14:00 - 16:00", "salon" => "Lab. 102"],
    ["curso" => "Ciberseguridad Esencial", "dia" => "Jueves", "hora" => "11:00 - 13:00", "salon" => "Aula 201"],
    ["curso" => "Desarrollo Web Frontend", "dia" => "Viernes", "hora" => "09:00 - 12:00", "salon" => "Lab. 103"],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Horarios de Clases - ITESS</title>
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
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Horarios de Clases</h1>
        <div class="card shadow-sm p-4 animate__animated animate__fadeInUp">
            <p>Aquí puedes consultar los horarios de las materias principales de la carrera de Tecnologías de la Información y Comunicación.</p>

            <?php if (empty($horariosClases)): ?>
                <p class="text-center text-muted">No hay horarios disponibles en este momento.</p>
            <?php else: ?>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Curso</th>
                                <th scope="col">Día</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Salón/Modalidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($horariosClases as $horario): ?>
                                <tr>
                                    <td><?php echo $horario['curso']; ?></td>
                                    <td><?php echo $horario['dia']; ?></td>
                                    <td><?php echo $horario['hora']; ?></td>
                                    <td><?php echo $horario['salon']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>

            <p class="mt-4">Para obtener el horario más actualizado y personalizado, por favor, consulta el portal del estudiante o contacta a la coordinación académica.</p>
            <div class="text-center mt-4">
                <a href="/kardex.php" class="btn btn-primary">Ir a mi Kardex</a>
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
