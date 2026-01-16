<form method="POST" action="{{ route('procesarNuevaNoticia') }}">
    @csrf <!-- Para evitar ataques CSRF -->
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    @endif
    Entradilla: <input type="text" name="entradilla"><br>
    Cuerpo: <input type="text" name="cuerpo"><br>
    Titular: <input type="text" name="titular"><br>
    <button type="submit">Crear noticia</button>
</form>