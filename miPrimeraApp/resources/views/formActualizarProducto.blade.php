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

        Nombre: <input type="text" name="nombre" value="{{$prod->nombre}}"><br>
        Descripción: <input type="text" name="descripcion" value="{{$prod->descripcion}}"><br>
        Precio: <input type="text" name="precio" value="{{$prod->precio}}"><br>
        Stock: <input type="number" name="stock" value="{{$prod->stock}}"><br>
        <input type="submit" value="Actualizar">
    </form>
     

</body>

</html>