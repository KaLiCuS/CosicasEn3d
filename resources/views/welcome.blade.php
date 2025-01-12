<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CosicasEn3D - Bienvenid@</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" /> <!-- Fuente personalizada -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        /* Estilo global para asegurar que no haya scroll innecesario */
        html, body {
            height: 100%;  /* Esto asegura que la altura ocupe toda la ventana */
            margin: 0;  /* Remueve los márgenes predeterminados */
            overflow-x: hidden;  /* Evita el scroll horizontal */
            box-sizing: border-box; /* Para que el padding y el border no aumenten el tamaño total de los elementos */
        }

        body {
            background-color: #f8f9fa;
            font-family: 'Figtree', sans-serif;
            margin-bottom: 0;  /* Eliminar margen en el fondo que podría causar scroll */
        }

        /* Hero Section con imagen de impresora 3D */
        .hero-section {
            background: url('{{ asset('img/corazon.jpg') }}') no-repeat center center;
            background-size: cover;
            height: 25vh; /* Reducido para que ocupe aún menos espacio */
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

        /* Sección de Proyectos dentro de una imagen */
        .projects-section {
            background: url('{{ asset('img/fondo_proyectos.jpg') }}') no-repeat center center;
            background-size: cover;
            padding: 30px 0;
            color: white;
        }

        .projects-section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        /* Estilos para las imágenes de los proyectos */
        .project-card {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            padding: 15px;
            margin: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .project-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Sección de Contacto */
        .contact-form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 20px;
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
            background-color: #2c3e50;  /* Color oscuro */
            color: white;
            padding: 18px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1rem;
            position: relative; /* Se asegura que el footer no cause desbordamiento */
            width: 100%;
            margin-top: auto;  /* Asegura que el footer se quede abajo */
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
            right: 20px;
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

        /* Footer-bottom fixes */
        .footer-bottom {
            background-color: #222;
            color: #bdc3c7;
            text-align: center;
            padding: 15px 0;
            font-size: 1rem;
            width: 100%;
            margin-top: 0;
            position: relative;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CosicasEn3D</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (Route::has('login'))
                        <li class="nav-item">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-outline-light">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline-success">Iniciar sesión</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-outline-info ml-4">Registrarse</a>
                                @endif
                            @endauth
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-text">
            <h1>Bienvenido a CosicasEn3D</h1>
            <p>Transforma tus ideas en impresionantes modelos tridimensionales</p>
        </div>
    </div>

    <!-- Sección de Proyectos dentro de una imagen -->
    <div id="proyectos" class="projects-section">
        <h2 style="color: black;">Nuestros Proyectos 3D</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="project-card">
                        <img src="img/img1.jpg" alt="Proyecto 1">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project-card">
                        <img src="img/img2.jpg" alt="Proyecto 2">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project-card">
                        <img src="img/img3.jpg" alt="Proyecto 3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario de Contacto -->
    <div id="contacto" class="container contact-form-container">
        <h2>Contacto y sugerencias</h2>
        <form class="contact-form">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Mensaje:</label>
                <textarea class="form-control" id="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-custom">Enviar</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-left">
            <p>&copy; 2024 CosicasEn3D. Todos los derechos reservados.</p>
        </div>
        <div class="footer-right">
            <p>¡Hecho por Daniel Pérez Grao!</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
