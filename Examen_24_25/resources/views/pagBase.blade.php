<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME</title>
    <link href="../../public/videojuegosCss.css" rel="stylesheet" />
</head>

<body>
    <header>
        <div class="../../public/logo">
            <img src="logo.png" alt="Logo">
        </div>
        <h1>@yield('title', 'GAME "Los Arcos"')</h1>
    </header>

    <main>
        <section>
            <p>@yield('contenido', 'Bienvenido a la página web de GAME "Los Arcos".')</p>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 GAME</p>
    </footer>
</body>

</html>