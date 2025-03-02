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

    <!-- Carrito de Compras -->
    <div id="cart" class="mt-5">
        <h3>Carrito de Compras</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Archivo</th>
                    <th>Cantidad</th>
                    <th>Personalizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody id="cart-items"></tbody>
        </table>

        <div class="d-flex justify-content-end">
            <button id="cancel-order" class="btn btn-danger mr-2">Cancelar Pedido</button>
            <button id="confirm-order" class="btn btn-success">Aceptar Pedido</button>
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
        const cartItems = document.getElementById('cart-items');

        // Tipos de archivo permitidos para impresión 3D
        const validExtensions = ['.stl', '.obj', '.gcode'];

        let cart = [];

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
            const file = files[0];
            if (file) {
                const fileExtension = file.name.split('.').pop().toLowerCase();
                if (validExtensions.includes('.' + fileExtension)) {
                    // Verificar si el archivo ya está en el carrito
                    const existingItem = cart.find(item => item.name === file.name);
                    if (!existingItem) {
                        // Agregar archivo al carrito
                        const newItem = {
                            name: file.name,
                            quantity: 1,
                            customize: false
                        };
                        cart.push(newItem);
                        updateCart();
                    } else {
                        alert('Este archivo ya ha sido agregado al carrito.');
                    }
                } else {
                    alert('Por favor, selecciona un archivo válido para impresión 3D (stl, obj, gcode).');
                }
            }
        }

        // Actualizar el carrito de compras
        function updateCart() {
            cartItems.innerHTML = '';
            cart.forEach((item, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.name}</td>
                    <td>
                        <input type="number" value="${item.quantity}" min="1" class="form-control" onchange="updateQuantity(${index}, this.value)">
                    </td>
                    <td>
                        <select class="form-control" onchange="updateCustomization(${index}, this.value)">
                            <option value="false" ${!item.customize ? 'selected' : ''}>No</option>
                            <option value="true" ${item.customize ? 'selected' : ''}>Sí</option>
                        </select>
                    </td>
                    <td><button class="btn btn-danger" onclick="removeItem(${index})">Eliminar</button></td>
                `;
                cartItems.appendChild(row);
            });
        }

        // Actualizar la cantidad de un item
        function updateQuantity(index, quantity) {
            cart[index].quantity = parseInt(quantity);
        }

        // Actualizar la opción de personalización
        function updateCustomization(index, value) {
            cart[index].customize = (value === 'true');
        }

        // Eliminar un item del carrito
        function removeItem(index) {
            cart.splice(index, 1);
            updateCart();
        }

        // Aceptar el pedido
        document.getElementById('confirm-order').addEventListener('click', function() {
            if (cart.length === 0) {
                alert('No has añadido ningún archivo al carrito.');
            } else {
                // Aquí podrías enviar el carrito al servidor para procesar el pedido
                console.log('Pedido confirmado:', cart);
                alert('Pedido confirmado');
                cart = [];
                updateCart();
            }
        });

        // Cancelar el pedido
        document.getElementById('cancel-order').addEventListener('click', function() {
            cart = [];
            updateCart();
            alert('Pedido cancelado');
        });

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
