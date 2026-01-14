<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artividad 5.11</title>
</head>

<body>
    <form action="{{ route('procesarProducto') }}" method="POST">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        @endif

        @csrf

        Nombre: <input type="text" name="nombre"><br>
        Descripción: <input type="text" name="descripcion"><br>
        Precio: <input type="text" name="precio"><br>
        Stock: <input type="number" name="stock"><br>
        <input type="submit" value="Insertar">
    </form>
</body>

</html>