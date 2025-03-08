<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Rol</title>
</head>
<body>
    <h1>Editar Rol: {{ $role->name }}</h1>
    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre del Rol:</label>
        <input type="text" name="name" value="{{ $role->name }}" required>
        
        <h2>Permisos</h2>
        @foreach ($permissions as $permission)
            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" 
               @if($role->hasPermissionTo($permission->name)) checked @endif>
            <label for="permissions[]">{{ $permission->name }}</label><br>
        @endforeach
        
        <button type="submit">Actualizar Rol</button>
    </form>
</body>
</html>
