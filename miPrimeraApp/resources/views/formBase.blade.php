<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con conexión a la base de datos</title>
</head>

<body>
    <form action="{{ route('procesarArticulo') }}" method="POST">
        Titulo: <input type="text" name="titulo"><br>
        Contenido: <input type="text" name="contenido"><br>
        Fecha: <input type="date" name="fecha"><br>
        Categoría: <input type="text" name="categoria"><br>
        Visitas: <input type="number" name="visitas"><br>
        <input type="submit" name="enviar" value="Guardar Articulo">
    </form>
</body>

</html>