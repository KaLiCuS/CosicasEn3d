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
            height: 50vh;
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
            max-width: 600px;
        }

        .hero-text h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .hero-text p {
            font-size: 1.2rem;
        }

        /* Sección de Ubicación */
        .location-section {
            padding: 50px 20px;
            background-color: #ffffff;
        }

        .location-section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: black;
        }

        /* Estilo del Footer */
        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 2px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1rem;
            position: relative;
            width: 100%;
            margin-top: auto;
            border-top: 2px solid #bdc3c7;
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

        /* Navbar */
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

        .social-icons a {
            color: #fff;
            font-size: 1.5rem;
            margin: 0 10px;
        }

        .social-icons a:hover {
            color: #f39c12;
        }

        /* Imagen 3D pequeña */
        .about-us-section img {
            max-width: 60%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
                    <li class="nav-item ms-3">
                        <a href="{{ url('/welcome.blade.php') }}" class="nav-link">INICIO</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="{{ url('/quienes-somos.blade.php') }}" class="nav-link">QUIENES SOMOS</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="{{ url('/ubicacion.blade.php') }}" class="nav-link">UBICACIÓN</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="{{ url('/blog.blade.php') }}" class="nav-link">BLOG</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="{{ url('/login') }}" class="btn btn-outline-light">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="{{ url('/register') }}" class="btn btn-outline-light">Registrarse</a>
                    </li>
                </ul>
                <div class="social-icons ms-auto">
                    <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
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
    <div class="location-section">
        <h2>¿Dónde nos encontramos?</h2>
        <!-- Google Maps Embed -->
        <div class="text-center">
            <iframe 
                src="https://www.google.com/maps/embed/v1/place?key=TU_API_KEY&q=Plaza+del+Pilar,+Zaragoza,+España" 
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
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

</body>
</html>
