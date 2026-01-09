<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refuerzo 10</title>
</head>

<body>
    <form action="{{ route('procesarOperacion') }}" method="POST">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        @endif
        @csrf

        Numero 1: <input type="number" name="num1"><br>
        Numero 2: <input type="number" name="num2"><br>
        <select name="operador">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="multiplicacion">x</option>
            <option value="division">/</option>
        </select>
        <input type="submit">
    </form>

     @isset($resultado)
        <h2>Resultado: {{ $resultado }}</h2>
    @endisset

</body>

</html>