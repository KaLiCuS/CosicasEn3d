@extends('adminlte::page')

@section('title', 'inicio')

@section('content_header')
    <h1 class="text-center"><b>Bienvenido a Cosicas en 3D</b></h1>
@stop

@section('content')
    <h5 class="text-center">¡Buenas! <b> {{ Auth::user()->name }} </b> Desde aquí podrás subir tus proyectos para imprimirlos posteriormente y realizar un seguimiento del pedido</h5>

    <!-- Drop & File Upload Section -->
    <div class="text-center mt-4">
        <label for="file-upload" class="btn btn-primary">Arrastra y suelta tu archivo aquí o selecciona desde tu equipo</label>
        <input id="file-upload" type="file" style="display: none;" />
        <div id="drop-area" class="border border-primary p-4 mt-3" style="cursor: pointer;">
            <p>Arrastra y suelta tus diseños aquí</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        // Manejo de la zona de arrastre
        const dropArea = document.getElementById('drop-area');
        const fileInput = document.getElementById('file-upload');

        // Cuando el archivo se suelta en el área
        dropArea.addEventListener('drop', function(event) {
            event.preventDefault();
            const files = event.dataTransfer.files;
            handleFiles(files);
        });

        // Permitir el arrastre del archivo
        dropArea.addEventListener('dragover', function(event) {
            event.preventDefault();
            dropArea.style.backgroundColor = '#f0f0f0'; // Resaltar el área al arrastrar el archivo
        });

        // Restaurar el fondo cuando el archivo se sale del área
        dropArea.addEventListener('dragleave', function(event) {
            dropArea.style.backgroundColor = ''; // Restaurar el color de fondo
        });

        // Función para manejar los archivos
        function handleFiles(files) {
            if (files.length > 0) {
                // Aquí puedes agregar la lógica para mostrar los archivos seleccionados o subirlos al servidor
                console.log(files);
            }
        }

        // Abrir el selector de archivos al hacer clic en el área
        dropArea.addEventListener('click', function() {
            fileInput.click();
        });

        // Cuando el usuario selecciona un archivo
        fileInput.addEventListener('change', function() {
            const files = fileInput.files;
            handleFiles(files);
        });
    </script>
@stop