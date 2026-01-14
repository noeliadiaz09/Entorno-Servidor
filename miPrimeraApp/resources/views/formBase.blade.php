<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con conexión a la base de datos</title>
</head>

<body>
    <form action="{{ route('procesarArticulo') }}" method="POST">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        @endif
        @csrf

        Titulo: <input type="text" name="title"><br>
        Contenido: <input type="text" name="content"><br>
        Fecha: <input type="date" name="publish_date"><br>
        Categoría: <input type="text" name="category"><br>
        Visitas: <input type="number" name="views"><br>
        <input type="submit" name="enviar" value="Guardar Articulo">
    </form>
</body>

</html>