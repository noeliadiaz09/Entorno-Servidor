<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Calculadora IMC</h1>
    <p>IMC = peso / (altura x altura)</p>
    <p>Según sus datos introducidos ({{ $altura }}m de altura y {{ $peso }}kg de peso), su índice de masa corporal es:
        {{ $IMC }}.
    </p>
    @if ($IMC < 18.5)
        <img src="{{ asset('img/bajo.png') }}">
    @elseif ($IMC >= 18.5 && $IMC <= 24.9)
        <img src="{{ asset('img/normal.png') }}">
    @elseif ($IMC >= 25 && $IMC <= 29.9)
        <img src="{{ asset('img/sobrepeso.png') }}">
    @else
        <img src="{{ asset('img/obeso.png') }}">
    @endif
</body>

</html>