<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Refuerzo 8 - Mi primer formulario</title>
</head>
<body>
    <h1>Refuerzo 8: Mi primer formulario</h1>

    <form action="{{ route('guardarNombre') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name">
        <br>
        <button type="submit">Enviar</button>
    </form>

    @isset($name)
        <h2>Has enviado: {{ $name }}</h2>
    @endisset
</body>
</html>
