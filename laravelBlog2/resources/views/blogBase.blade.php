<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    
    <title>@yield("titulo", "Laravel HackBlog")</title>
    <link rel="stylesheet" href=@yield("estiloCss", '/style.css') />
</head>

<body>
    <header>
        <h1><a href="index.php">The Hack blog</a></h1>
    </header>

    <div id="container">
        <div id="main">@yield("contenido")</div>
    </div>

    <footer>Copyright © <span>TU_NOMBRE<a href='index.php'>The Hack Blog</a></span></footer>

</body>

</html>