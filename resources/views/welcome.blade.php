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
        }
        /* Modal de imagen */
        .modal img {
            width: 100%;
        }
        /* Estilos del formulario de contacto */
        .contact-form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
        <div class="hero-text text-center">
            <h1>Bienvenido a CosicasEn3D</h1>
            <p>Transforma tus ideas en impresionantes modelos tridimensionales</p>
        </div>
    </div>

    <!-- Sección de Proyectos -->
    <div id="proyectos" class="projects-section">
        <h2 class="text-center" style="color: black;">Nuestros Proyectos 3D</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="project-card">
                        <img src="{{ asset('img/img1.jpg') }}" alt="Proyecto 1" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img-src="{{ asset('img/img1.jpg') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project-card">
                        <img src="{{ asset('img/img2.jpg') }}" alt="Proyecto 2" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img-src="{{ asset('img/img2.jpg') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project-card">
                        <img src="{{ asset('img/img3.jpg') }}" alt="Proyecto 3" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img-src="{{ asset('img/img3.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para mostrar la imagen ampliada -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
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
        <h2 class="text-center">Contacto y sugerencias</h2>
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
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3">
        <p>&copy; 2024 CosicasEn3D. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script para mostrar la imagen en el modal
    document.addEventListener("DOMContentLoaded", function() {
    var modal = document.getElementById('imageModal');
    modal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget; // El botón que abrió el modal
        var imgSrc = button.getAttribute('data-bs-img-src'); // Obtén la URL de la imagen

        // Actualiza el src de la imagen en el modal
        var modalImage = document.getElementById('modalImage');
        modalImage.src = imgSrc;
    });

    // Cierra el modal y resetea la imagen cuando se cierra el modal
    modal.addEventListener('hidden.bs.modal', function() {
        var modalImage = document.getElementById('modalImage');
        modalImage.src = ''; // Limpiar el src al cerrar el modal
    });
});

        // Enviar el formulario de contacto por AJAX
        document.querySelector('.contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            var form = this;
            var formData = new FormData(form);

            fetch("{{ route('contact.send') }}", {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    alert("¡Correo enviado con éxito!");
                    form.reset();  // Reinicia el formulario
                } else {
                    alert("Hubo un error al enviar el correo.");
                }
            })
            .catch(error => {
                alert("Error: " + error.message);
            });
        });
    </script>
</body>
</html>
