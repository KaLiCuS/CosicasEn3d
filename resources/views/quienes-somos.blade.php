<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiénes somos - CosicasEn3D</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

    <style>
        /* Estilo para la página de "Quiénes somos" */
        .about-section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .about-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .about-text {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #333;
        }

        .about-text p {
            margin-bottom: 20px;
        }

        .about-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
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
                        <a href="{{ url('/quienes-somos') }}" class="btn btn-outline-light">Quiénes somos</a>
                    </li>
                    <!-- Añadir más enlaces de navegación si es necesario -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección "Quiénes somos" -->
    <div class="about-section">
        <div class="container">
            <h2 class="about-title">¿Quiénes somos?</h2>
            <div class="row">
                <div class="col-md-6">
                    <p class="about-text">
                        En **CosicasEn3D**, nuestra misión es brindar soluciones innovadoras en impresión 3D a medida. Nos especializamos en diseñar y fabricar modelos tridimensionales personalizados para cada cliente, de acuerdo con sus especificaciones y necesidades. 
                    </p>
                    <p class="about-text">
                        Ofrecemos un servicio altamente preciso y detallado, creando piezas únicas que permiten a nuestros clientes materializar sus ideas en realidad. Además, estamos en proceso de desarrollar una plataforma que permita personalizar los modelos 3D a gusto del usuario, ¡incluso podrá pintarlos a mano para darles un toque aún más único y especial!
                    </p>
                    <p class="about-text">
                        Nuestra visión es ser una empresa líder en la creación de productos impresos en 3D totalmente personalizados, tanto para usuarios particulares como para empresas que necesiten modelos a medida.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/cosicasen3d.jpg') }}" alt="Impresión 3D" class="about-image">
                </div>
            </div>
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
