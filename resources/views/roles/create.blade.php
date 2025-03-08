<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Rol</title>
</head>
<body>
    <h1>Crear Nuevo Rol</h1>
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <label for="name">Nombre del Rol:</label>
        <input type="text" name="name" required>
        
        <h2>Permisos</h2>
        @foreach ($permissions as $permission)
            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}">
            <label for="permissions[]">{{ $permission->name }}</label><br>
        @endforeach
        
        <button type="submit">Crear Rol</button>
    </form>
</body>
</html>
