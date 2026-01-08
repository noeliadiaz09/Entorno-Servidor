<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--el name de la ruta es el name del archivo web del post -->
    <form method="POST" action="{{ route('procesarForm') }}">
        <!-- Para evitar ataques CSRF -->
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        @endif

        Email: <input type="email" name="email">
        <br>
        Asunto: <input type="text" name="asunto">
        <br>
        Contenido: <textarea name="contenido"></textarea>
        <br>
        <button type="submit">Enviar</button>

    </form>
</body>

</html>