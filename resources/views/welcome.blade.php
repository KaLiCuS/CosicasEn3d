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
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

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

    <!-- Sección de Proyectos -->
    <div id="proyectos" class="projects-section">
        <h2>Nuestros Proyectos 3D</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="project-card" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img-src="{{ asset('img/img1.jpg') }}">
                        <img src="{{ asset('img/img1.jpg') }}" alt="Proyecto 1">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project-card" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img-src="{{ asset('img/img2.jpg') }}">
                        <img src="{{ asset('img/img2.jpg') }}" alt="Proyecto 2">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project-card" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img-src="{{ asset('img/img3.jpg') }}">
                        <img src="{{ asset('img/img3.jpg') }}" alt="Proyecto 3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para ampliar la imagen -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" class="img-fluid" alt="Imagen ampliada">
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
            <p>¡Hecho por <a href="https://linkedin.com/in/daniperezgr/">Daniel Pérez Grao!</a></p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Cuando se hace clic en una imagen
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');

        modal.addEventListener('show.bs.modal', function (event) {
            const trigger = event.relatedTarget;
            const imageSrc = trigger.getAttribute('data-bs-img-src');
            modalImage.src = imageSrc;
        });
    </script>
</body>
</html>

