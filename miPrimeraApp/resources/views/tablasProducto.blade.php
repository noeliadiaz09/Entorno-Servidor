<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 5.12</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Borrar</th>
            <th>Actualizar</th>
        </tr>
        @foreach ($prod as $p)
            <tr>
                <td>{{ $p->nombre }}</td>
                <td>{{ $p->descripcion }}</td>
                <td>{{ $p->precio }}</td>
                <td>{{ $p->stock }}</td>
                <td> <a href="{{ route("borrarProductos",["id"=>$p->id ])}}">Borrar</a></td>
                <td> <a href="{{ route("modificarProductos",["id"=>$p->id ])}}">Actualizar</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>