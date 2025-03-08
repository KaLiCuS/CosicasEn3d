<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CosicasEn3D - Ubicación</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/corazon.jpg') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

    <style>
        /* Estilo global */
        html, body {
            height: 100%;
            margin: 0;
            overflow-x: hidden;
            box-sizing: border-box;
        }

        body {
            background-color: #f8f9fa;
            font-family: 'Figtree', sans-serif;
            margin-bottom: 0;
        }

        /* Hero Section */
        .hero-section {
            background: url('{{ asset('img/corazon.jpg') }}') no-repeat center center;
            background-size: cover;
            height: 25vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);
            position: relative;
            padding: 0 20px;
        }

        .hero-text {
            text-align: center;
        }

        .hero-text h1 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .hero-text p {
            font-size: 1.2rem;
        }

        /* Sección de Proyectos */
        .projects-section {
            background: url('{{ asset('img/fondo_proyectos.jpg') }}') no-repeat center center;
            background-size: cover;
            padding: 30px 0;
            color: white;
        }

        .projects-section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 10px;  /* Reducido el espacio inferior */
            color: black; /* Título en negro */
        }

        /* Estilos para las imágenes de los proyectos */
        .project-card {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 4px;
            padding: 15px;
            margin: 5px; /* Reducido el espacio entre las imágenes */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
        }

        .project-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 4px;
        }

        /* Modal de imagen */
        .modal img {
            width: 100%;
            max-height: 80vh;
            object-fit: contain;
        }

        /* Formulario de Contacto */
        .contact-form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 10px; /* Reducido el espacio superior */
        }

        .contact-form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
            color: #333;
        }

        .contact-form label {
            font-size: 1.1rem;
            color: #333;
        }

        .contact-form .form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .contact-form .form-control:focus {
            border-color: #00BCD4;
            box-shadow: 0 0 5px rgba(0, 188, 212, 0.5);
        }

        .contact-form textarea {
            resize: none;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .btn-custom {
            background-color: #00BCD4;
            color: white;
            border: none;
            font-weight: 500;
            border-radius: 8px;
            padding: 10px 20px;
        }

        .btn-custom:hover {
            background-color: #0097A7;
            color: white;
        }

        /* Footer */
        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 2px 0; /* Reducido el espacio superior e inferior */
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1rem;
            position: relative;
            width: 100%;
            margin-top: auto;
            border-top: 2px solid #bdc3c7; /* Borde superior delgado */
        }

        .footer .footer-left {
            margin-right: 20px;
        }

        .footer .footer-right {
            font-family: 'Pacifico', cursive;
            font-size: 0.9rem;
            color: #bdc3c7;
            opacity: 0.8;
            position: absolute;
            right: 15px;
        }

        .footer a {
            color: #17a2b8;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Nav bar style */
        .navbar {
            background-color: #222;
        }

        .navbar-brand {
            font-weight: 600;
            color: #fff;
        }

        .navbar-nav .nav-link {
            color: #ddd;
            font-size: 1.1rem;
        }

        .navbar-nav .nav-link:hover {
            color: #fff;
        }

        /* Estilo para los botones circulares */
        .btn-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            padding: 10px;
            font-size: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
        }

        .btn-circle-facebook {
            background-color: #3b5998;
            color: white;
        }

        .btn-circle-facebook:hover {
            background-color: #2d4373;
        }
        .btn-circle-x {
            background-color: #000000; /* Color de fondo para el ícono de X */
            color: white;
        }

        .btn-circle-x:hover {
            background-color: #333333; /* Color al pasar el ratón */
        }
        .btn-circle-instagram {
            background-color: #E1306C;
            color: white;
        }

        .btn-circle-instagram:hover {
            background-color: #C13584;
        }

        /* Estilo para los botones rectangulares de login y registro */
        .btn-rectangular {
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            color: white;
            text-transform: uppercase;
        }

        .btn-rectangular-login {
            background-color: #007bff;
            border: none;
        }

        .btn-rectangular-login:hover {
            background-color: #0056b3;
        }

        .btn-rectangular-register {
            background-color: #28a745;
            border: none;
        }

        .btn-rectangular-register:hover {
            background-color: #218838;
        }

        /* Estilo para el modo nocturno */
        body.night-mode {
            background-color: #333;
            color: white;
        }

        body.night-mode .navbar {
            background-color: #444;
        }

        body.night-mode .footer {
            background-color: #444;
        }

        body.night-mode .contact-form-container {
            background-color: #555;
        }

        body.night-mode .btn-custom {
            background-color: #006064;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/welcome">CosicasEn3D</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Nueva sección de botones en el menú -->
                    <li class="nav-item ms-3">
                        <a href="{{ url('welcome') }}" class="nav-link">INICIO</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="{{ url('quienes-somos') }}" class="nav-link">QUIENES SOMOS</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="{{ url('ubicacion') }}" class="nav-link">UBICACIÓN</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="{{ url('blog') }}" class="nav-link">BLOG</a>
                    </li>
                    
                    <!-- Redes sociales -->
                    <li class="nav-item ms-3">
                        <a href="https://www.x.com/CosicasEn3D" target="_blank" class="btn btn-circle-x">
                            <i class="fab fa-x"></i>  <!-- Este es el ícono de "X" si está disponible en Font Awesome -->
                        </a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="https://www.facebook.com/CosicasEn3D" target="_blank" class="btn btn-circle-facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="https://www.instagram.com/CosicasEn3d" target="_blank" class="btn btn-circle-instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <!-- Botones de Iniciar sesión, Registrarse y Modo Nocturno -->
                    <li class="nav-item ms-3">
                        <button id="darkModeToggle" class="btn btn-circle" title="Modo Nocturno">
                            🌙
                        </button>
                    </li>
                    <li class="nav-item ms-3">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('dashboard') }}" class="btn btn-outline-light">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-rectangular-login ms-2">Iniciar sesión</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-rectangular-register ms-2">Registrarse</a>
                                @endif
                            @endauth
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-text">
            <h1>Ubicación</h1>
            <p>Encuentra nuestra oficina en Zaragoza, España.</p>
        </div>
    </div>

<!-- Sección de Ubicación con Google Maps -->
<div class="location-section" style="text-align: center;">
    <h2 style="text-align: center;">¿Dónde nos encontramos?</h2>
    
    <!-- Google Maps Embed (Aumentamos el tamaño) -->
    <div class="text-center" style="margin-bottom: 5px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23872.80019719264!2d-0.9618812400330667!3d41.58871881071438!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5914dd5e618e91%3A0x49df13f1158489a8!2sZaragoza!5e0!3m2!1ses!2ses!4v1741170493103!5m2!1ses!2ses" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Información de contacto -->
    <div class="contact-info" style="text-align: center;">
        <h3 style="font-size: 1.6rem; margin-bottom: 10px;">Datos de Contacto</h3>
        <p style="font-size: 1.0rem;"><strong>Dirección:</strong> Calle Ficticia 123, Zaragoza, España</p>
        <p style="font-size: 1.0rem;"><strong>Teléfono:</strong> +34 912 345 678</p>
        <p style="font-size: 1.0rem;"><strong>Email:</strong> contacto@cosicasen3d.com</p>
        <p style="font-size: 1.0rem;"><strong>Horario de atención:</strong> Lunes a Viernes, de 9:00 a 18:00</p>
        
        <!-- Datos adicionales de contacto -->
        <p style="font-size: 1.6rem;"><strong>Síguenos en redes sociales:</strong></p>
        <div>
            <a href="https://www.facebook.com/CosicasEn3D" target="_blank" style="font-size: 1.5rem; color: #3b5998; margin-right: 15px;">
                <i class="fab fa-facebook"></i> Facebook
            </a>
            <a href="https://www.instagram.com/CosicasEn3d" target="_blank" style="font-size: 1.5rem; color: #E1306C; margin-right: 15px;">
                <i class="fab fa-instagram"></i> Instagram
            </a>
            <a href="https://twitter.com/CosicasEn3D" target="_blank" style="font-size: 1.5rem; color: #1DA1F2;">
                <i class="fab fa-twitter"></i> Twitter
            </a>
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer class="footer">
        <div class="footer-left">
            <p>&copy; <span id="currentYear"></span> CosicasEn3D. Todos los derechos reservados.</p>
        </div>
        <div class="footer-right">
            <p>¡Hecho por <a href="https://linkedin.com/in/daniperezgr/">Daniel Pérez Grao!</a></p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <script>
        // Función para alternar el modo nocturno
        document.getElementById('darkModeToggle').addEventListener('click', function () {
            document.body.classList.toggle('night-mode');
            // Cambiar el ícono del botón dependiendo del modo
            const button = document.getElementById('darkModeToggle');
            if (document.body.classList.contains('night-mode')) {
                button.innerHTML = '🌞';  // Sol (modo día)
            } else {
                button.innerHTML = '🌙';  // Luna (modo noche)
            }
        });

        // Mostrar la imagen ampliada en el modal
        const modal = new bootstrap.Modal(document.getElementById('imageModal'));
        document.querySelectorAll('.project-card').forEach(card => {
            card.addEventListener('click', function () {
                const imgSrc = card.getAttribute('data-bs-img-src');
                document.getElementById('modalImage').src = imgSrc;
                modal.show();
            });
        });
    </script>

    <script>
    // Obtener el año actual
    document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>
</body>
</html>
