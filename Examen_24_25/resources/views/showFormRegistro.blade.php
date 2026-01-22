@extends ("pagBase");

@section('title')
    Registro de videojuegos
@endsection

@section('contenido')
    <form method="POST" action="{{ route('procesarFormRegistro') }}">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        @endif
        @csrf
        <!-- Para evitar ataques CSRF -->
        Nombre: <input type="text" name="nombre"><br>
        Plataforma: <input type="text" name="plataforma"><br>
        Género: <input type="text" name="genero"><br>
        Clasificación pegi: <input type="number" name="clasificacion"><br>
        <button type="submit">Registrar videojuego</button>
    </form>
@endsection