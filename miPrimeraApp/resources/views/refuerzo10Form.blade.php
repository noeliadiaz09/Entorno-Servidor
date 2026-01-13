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

        Numero 1: <input type="text" name="num1" value="{{ old('num1') }}"><br>
        Numero 2: <input type="text" name="num2" value="{{ old('num2') }}"><br>
        <select name="operador">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="multiplicacion">x</option>
            <option value="division">/</option>
            <option value="potencia">^</option>
        </select>
        <input type="submit">
    </form>

    @isset($resultado)
        <h2>Resultado: {{ $resultado }}</h2>
    @endisset

</body>

</html>