<?php
// Este archivo NO debe incluir otros archivos PHP para evitar bucles.
?>
<footer class="footer-dark">
    <!-- Video de fondo -->
    <video autoplay muted loop playsinline>
       <source src="/sounds/footer.mp4" type="video/mp4">
        Tu navegador no soporta video HTML5.
    </video>

    <div class="container py-5">
        <div class="row g-4">
            <!-- Columna 1: Logo y Redes Sociales -->
            <div class="col-lg-4 mb-4">
                <img src="/img/Asset 11@300x.png" alt="Logo ITESS" class="footer-logo mb-3">
                <p class="footer-text">Proyecto de investigación sobre tecnologías de la información y comunicación.</p>
                <div class="social-icons">
                    <a href="#" class="social-icon" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    <a href="#" class="social-icon" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                    <a href="#" class="social-icon" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <!-- Columna 2: Navegación -->
            <div class="col-lg-2 col-md-4 mb-4">
                <h5 class="footer-title">Navegación</h5>
                <ul class="footer-links">
                    <li><a href="/index.php" class="footer-link">Inicio</a></li>
                    <li><a href="/horarios.php" class="footer-link">Horarios</a></li>
                    <li><a href="/kardex.php" class="footer-link">Kardex</a></li>
                    <li><a href="/login.php" class="footer-link">Iniciar Sesión</a></li>
                    <li><a href="/materias.php" class="footer-link">Materias</a></li>
                    <li><a href="/oferta-educativa.php" class="footer-link">Oferta Educativa</a></li>
                    <li><a href="/perfil.php" class="footer-link">Perfil</a></li>
                    <li><a href="/profesores.php" class="footer-link">Profesores</a></li>
                    <li><a href="/sobre-la-carrera.php" class="footer-link">Sobre la Carrera</a></li>
                </ul>
            </div>

            <!-- Columna 3: Contacto -->
            <div class="col-lg-3 col-md-4 mb-4">
                <h5 class="footer-title">Contacto</h5>
                <ul class="footer-contact">
                    <li class="contact-item"><i class="bi bi-geo-alt-fill contact-icon"></i> Salvatierra, Guanajuato</li>
                    <li class="contact-item"><i class="bi bi-envelope-fill contact-icon"></i> <a href="mailto:ti22110005@itess.edu.mx" class="footer-link">ti22110005@itess.edu.mx</a></li>
                    <li class="contact-item"><i class="bi bi-telephone-fill contact-icon"></i> <a href="tel:+524661124155" class="footer-link">+52 466 112 41 55</a></li>
                </ul>
            </div>

            <!-- Columna 4: Newsletter y Enlaces Legales -->
            <div class="col-lg-3 col-md-4 mb-4">
                <h5 class="footer-title">Newsletter</h5>
                <p class="footer-text">Suscríbete para recibir actualizaciones sobre nuestra investigación.</p>
                <form class="footer-form">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Tu email" required>
                        <button class="btn btn-primary" type="submit"><i class="bi bi-send-fill"></i></button>
                    </div>
                </form>
                <h5 class="footer-title mt-4">Legal</h5>
                <ul class="footer-links">
                    <li><a href="/aviso-privacidad.php" class="footer-link">Aviso de Privacidad</a></li>
                    <li><a href="/politica-cookies.php" class="footer-link">Política de Cookies</a></li>
                    <li><a href="/documentacion.php" class="footer-link">Documentación</a></li>
                    <li><a href="/terminos-uso.php" class="footer-link">Términos de Uso</a></li>
                    <li><a href="/licencia-proyecto.php" class="footer-link">Licencia del Proyecto</a></li>
                </ul>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="row">
            <div class="col-12 text-center">
                <p class="footer-copyright">&copy; 2025 Luis Ángel Tapia Ramírez. Proyecto académico del Tecnológico Nacional de México. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>
