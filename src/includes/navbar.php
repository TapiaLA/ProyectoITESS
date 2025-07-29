<?php
// Puedes incluir aquí cualquier lógica PHP necesaria para la navbar, como sesiones de usuario.
?>
<style>
    /* Navbar General */
    .navbar {
        background-color: #001c48 !important; /* This color stays constant for the dark navbar */
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.2);
        transition: all 0.5s ease;
        /* Eliminado: position: fixed; */
        /* Eliminado: top: 0; */
        width: 100%;
        z-index: 1000;
    }

    .navbar.scrolled {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    /* Logo */
    .navbar-brand {
        position: relative;
        display: inline-block;
        font-weight: bold;
        font-size: 1.1rem;
        background-color: transparent;
        color: #001c48 !important; /* This color is too dark for dark navbar, will be overridden */
        padding: 5px 15px;
        border-radius: 6px;
    }

    .navbar-brand img {
        height: 50px; /* Adjust as needed */
        transition: transform 0.3s ease;
    }

    .navbar-brand:hover img {
        transform: scale(1.05);
    }

    /* Enlaces principales del Navbar */
    .nav-link {
        position: relative;
        padding: 0.5rem 1rem;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.85) !important; /* Default light color for navbar links */
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        color: white !important;
    }

    /* Línea animada al pasar el mouse para enlaces principales */
    .nav-link::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #4cc9f0; /* Color de la línea animada */
        transition: width 0.3s ease;
        z-index: 1;
    }

    .nav-link:hover::before {
        width: 100%;
    }

    /* Estilos para el span dentro de nav-link (si se usa para animación de texto) */
    /* Se mantiene la animación de color para el texto */
    .nav-link span {
        position: relative;
        z-index: 1;
        transition: color 0.3s ease;
    }

    .nav-link:hover span {
        color: white !important;
    }

    /* Menús desplegables */
    .dropdown-menu {
        background-color: #2a2a3e; /* Fondo oscuro para el menú desplegable */
        border: none;
        border-radius: 0;
        margin-top: 0;
        animation: fadeIn 0.3s ease forwards; /* Animación de entrada */
        opacity: 0; /* Oculto inicialmente para la animación */
        transform: translateY(10px); /* Desplazamiento inicial para la animación */
    }

    /* Animación de entrada para el dropdown */
    @keyframes fadeIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .dropdown-item {
        color: rgba(255, 255, 255, 0.8) !important; /* Color de texto para los ítems */
        padding: 0.5rem 1.5rem;
        transition: all 0.2s ease;
        position: relative; /* Necesario para el pseudo-elemento ::before */
        overflow: hidden; /* Para que la línea no se desborde */
    }

    /* Animación de línea para dropdown-item en hover */
    .dropdown-hover::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(76, 201, 240, 0.3); /* Fondo sutil al pasar el cursor, aumentado a 0.3 de opacidad */
        transform: scaleY(0); /* Oculto inicialmente */
        transform-origin: bottom;
        transition: transform 0.3s ease;
        z-index: 0;
    }

    .dropdown-hover:hover::before {
        transform: scaleY(1); /* Muestra la línea al pasar el cursor */
    }

    .dropdown-hover:hover {
        color: white !important; /* Texto blanco al pasar el cursor */
        padding-left: 1.8rem; /* Pequeño desplazamiento a la derecha */
    }

    /* Nuevo: Ajuste de color de texto en hover para dropdown-item en modo claro */
    /* Cuando el body NO tiene la clase dark-mode y un dropdown-hover está en hover */
    body:not(.dark-mode) .dropdown-hover:hover {
        color: #333 !important; /* Cambia el color del texto a oscuro */
    }

    /* Flecha del dropdown-toggle - Se eliminó el CSS personalizado y se confía en Bootstrap */
    .nav-link.dropdown-toggle {
        /* Se eliminó padding-right personalizado, Bootstrap lo manejará */
        /* Se eliminaron las reglas ::after y .show::after */
    }

    /* Iconos sociales del Navbar (si existen) */
    .navbar .social-icons {
        gap: 15px;
    }

    .navbar .social-icon {
        color: rgba(255, 255, 255, 0.7);
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .navbar .social-icon:hover {
        color: white !important;
        background-color: rgba(76, 201, 240, 0.2);
        transform: translateY(-3px);
    }

    /* Dark mode para Navbar */
    body.dark-mode .navbar-nav .nav-link,
    body.dark-mode .navbar-brand {
        color: var(--text-main) !important; /* Ensures links are visible in dark mode */
    }
    body.dark-mode .dropdown-menu {
        background-color: #1a1a1a; /* Darker background for dropdown in dark mode */
    }
    body.dark-mode .dropdown-item {
        color: var(--text-main) !important; /* Dark mode text color for dropdown items */
    }
    body.dark-mode .dropdown-hover:hover {
        background-color: rgba(90, 148, 255, 0.4) !important; /* Dark mode hover background, aumentado a 0.4 de opacidad */
        color: white !important;
    }
    /* Se eliminó la regla para .nav-link.dropdown-toggle::after en dark mode */

    /* Search Container */
    .search-container {
        display: flex;
        align-items: center;
    }
    .search-input {
        border-radius: 5px 0 0 5px;
        border: 1px solid var(--chatbot-border-color); /* Uses a general border color */
        background-color: var(--card-bg); /* Adapts to dark mode */
        color: var(--text-main); /* Adapts to dark mode */
    }
    .search-btn {
        border-radius: 0 5px 5px 0;
        background-color: var(--primary); /* Uses primary color */
        color: white;
        border: none;
    }

    /* Icon Buttons (Dark/Light Mode, Font Size, Info, Profile) */
    .icon-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: var(--form-bg); /* Adapts to dark mode */
        color: var(--text-main); /* Adapts to dark mode */
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 10px;
        border: none; /* Ensure no default button border */
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    .icon-btn:hover {
        background-color: var(--primary);
        color: white;
    }

    /* Responsive Navbar */
    @media (max-width: 992px) {
        .navbar-collapse {
            padding-top: 15px;
        }
        .navbar .social-icons {
            padding-top: 15px;
            padding-bottom: 10px;
            justify-content: center;
        }
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark shadow">
    <div class="container-fluid px-4">
        <!-- Logo ITESM -->
        <a class="navbar-brand" href="/">
            <img src="/img/Asset 9.svg" alt="ITESM Logo" width="113" height="42" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" data-bs-target="#navbarContent" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Dropdown Inicio con enlaces a secciones de la landing page -->
                <li class="nav-item dropdown position-relative">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="/" role="button" aria-expanded="false">
                        <span>Inicio</span>
                    </a>
                    <span class="hover-line"></span>
                    <ul class="dropdown-menu dropdown-animation" aria-labelledby="carreraDropdown">
                        <li><a class="dropdown-item dropdown-hover" href="/#hero-section">Conoce la Carrera</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="/#seccion-oportunidades">Oportunidades</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="/#seccion-1">Testimonios</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="/#seccion-2">¿Qué nos hace únicos?</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="/#seccion-3">Acerca de TIC</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="/#seccion-programas">Programas</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="/#seccion-blogs">Noticias y Anuncios</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="/#seccion-formulario">Regístrate</a></li>
                    </ul>
                </li>

                <!-- Otro dropdown - Materias -->
                <li class="nav-item dropdown position-relative">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <span>Materias</span>
                    </a>
                    <span class="hover-line"></span>
                    <ul class="dropdown-menu dropdown-animation" aria-labelledby="materiasDropdown">
                        <li><a class="dropdown-item dropdown-hover" href="/materias.php">Cursos</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="/horarios.php">Horarios</a></li>
                    </ul>
                </li>

                <!-- Links normales con animación -->
                <li class="nav-item position-relative">
                    <a class="nav-link" href="/kardex.php"><span>Kardex</span></a>
                    <span class="hover-line"></span>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link" href="/oferta-educativa.php"><span>Oferta Educativa</span></a>
                    <span class="hover-line"></span>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link" href="/sobre-la-carrera.php"><span>Sobre la Carrera</span></a>
                    <span class="hover-line"></span>
                </li>
            </ul>

            <!-- Formulario de búsqueda -->
            <form class="search-container me-3" role="search">
                <input class="form-control search-input" placeholder="Buscar..." type="search"/>
                <button class="btn search-btn" type="submit"><i class="bi bi-search"></i></button>
            </form>

            <!-- Botones de usuario y ACCESIBILIDAD -->
            <div class="d-flex align-items-center">
                <!-- Dark Mode Toggle Button -->
                <button id="darkModeToggle" class="icon-btn me-2" title="Modo Oscuro">
                    <i class="bi bi-moon-fill"></i>
                </button>
                <!-- Font Size Buttons -->
                <button id="increaseFont" class="icon-btn me-2" title="Aumentar Tamaño de Letra">
                    <i class="bi bi-plus-lg"></i>
                </button>
                <button id="decreaseFont" class="icon-btn me-2" title="Disminuir Tamaño de Letra">
                    <i class="bi bi-dash-lg"></i>
                </button>

                <!-- Información Dropdown -->
                <div class="nav-item dropdown">
                    <button class="icon-btn me-2 dropdown-toggle" type="button" id="infoDropdown" data-bs-toggle="dropdown" aria-expanded="false" title="Información">
                        <i class="bi bi-info-circle"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-animation" aria-labelledby="infoDropdown">
                        <li><a class="dropdown-item dropdown-hover" href="/info-landing.php">Información de la Landing Page</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="/preguntas-frecuentes.php">Preguntas Frecuentes</a></li>
                    </ul>
                </div>

                <!-- Perfil/Login Dropdown - Usando clases de Bootstrap -->
                <div class="nav-item dropdown">
                    <button class="icon-btn dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false" title="Perfil de Usuario">
                        <i class="bi bi-person-circle"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-animation" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item dropdown-hover" href="/login.php">Iniciar Sesión</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="/perfil.php">Ver Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item dropdown-hover" href="/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
