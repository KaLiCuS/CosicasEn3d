<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo mensaje de contacto</title>
</head>
<body>
    <h2>Nuevo mensaje de contacto de {{ $name }}</h2>
    <p><strong>Correo electrónico:</strong> {{ $email }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $message }}</p>
</body>
</html>
