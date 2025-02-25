<h2>Nuevo mensaje de contacto</h2>

<p><strong>Nombre:</strong> {{ $data['name'] }}</p>
<p><strong>Correo electrónico:</strong> {{ $data['email'] }}</p>
<p><strong>Mensaje:</strong></p>
<p>{{ $data['message'] }}</p>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif