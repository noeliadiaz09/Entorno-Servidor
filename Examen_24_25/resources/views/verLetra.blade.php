<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver letra del DNI</title>
</head>

<body>
    <h1>Calcular letra del DNI</h1>
    <br>
    <p>Al número de DNI introducido ({{ $dni }}) le corresponde la letra: {{ $valor }}</p>
    <br>
    <p>Por lo tanto, el DNI completo sería: {{ $dni }}{{ $valor }}</p>
</body>

</html>