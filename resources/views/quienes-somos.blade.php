<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CosicasEn3D - Quiénes Somos</title>

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
            height: 25vh; /* Ajustado para ocupar la mitad de la pantalla */
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

        /* Sección de Quiénes Somos */
        .about-us-section {
            padding: 50px 20px;
            background-color: #ffffff;
            margin-bottom: 10px; /* Reducido el espacio inferior */
        }

        .about-us-section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: black;
        }

        .about-us-section p {
            text-align: center;
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
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

        /* Imagen 3D */
        .about-us-section img {
            max-width: 25%; /* Tamaño de la imagen */
            height: auto;
            margin-bottom: 20px; /* Reducido el margen inferior de la imagen */
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
                <!-- Nueva sección de botones en el menú -->
                <li class="nav-item ms-3">
                    <a href="{{ url('/welcome') }}" class="nav-link">INICIO</a>
                </li>
                <li class="nav-item ms-3">
                    <a href="{{ url('/quienes-somos') }}" class="nav-link">QUIENES SOMOS</a>
                </li>
                <li class="nav-item ms-3">
                    <a href="{{ url('/ubicacion') }}" class="nav-link">UBICACIÓN</a>
                </li>
                <li class="nav-item ms-3">
                    <a href="{{ url('/blog') }}" class="nav-link">BLOG</a>
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
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-light">Dashboard</a>
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
            <h1>Quiénes Somos</h1>
            <p>Conoce más acerca de nuestra misión, visión y valores</p>
        </div>
    </div>

    <!-- Sección de Quiénes Somos -->
    <div class="about-us-section">
        <h2>Nuestra Historia</h2>
        <p>
            En CosicasEn3D nos apasiona transformar ideas en impresionantes modelos tridimensionales. Comenzamos como un pequeño grupo de creativos, pero nuestra pasión por la innovación y el diseño nos ha llevado a crecer y ofrecer soluciones 3D de alta calidad. 
            Nuestra misión es ayudar a nuestros clientes a visualizar sus ideas de manera única, innovadora y profesional, proporcionando modelos 3D detallados y realistas que aportan valor y creatividad.
        </p>

        <p>
            Nuestro equipo está compuesto por diseñadores, ingenieros y artistas apasionados por las posibilidades ilimitadas que ofrece el diseño 3D. Trabajamos de manera colaborativa para garantizar que cada proyecto sea una obra maestra, con una atención al detalle impecable y un enfoque centrado en el cliente.
        </p>

        <p>
            En un futuro, nos gustaría seguir innovando y ofrecer personalizaciones a medida, pintadas a mano, que añadan un toque único y exclusivo a cada proyecto. Creemos que esto permitirá a nuestros clientes tener un producto verdaderamente personalizado que refleje su estilo.
        </p><br>

        <!-- Imagen 3D -->
        <div class="text-center">
            <img src="{{ asset('img/img1.jpg') }}" alt="Imagen 3D" class="img-fluid rounded shadow-lg">
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

<script>
    // Obtener el año actual
    document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

