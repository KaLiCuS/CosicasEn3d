<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Roles</title>
</head>
<body>
    <h1>Roles</h1>
    <a href="{{ route('roles.create') }}">Crear Nuevo Rol</a>
    <ul>
        @foreach ($roles as $role)
            <li>
                {{ $role->name }}
                <a href="{{ route('roles.edit', $role->id) }}">Editar</a>
                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>

