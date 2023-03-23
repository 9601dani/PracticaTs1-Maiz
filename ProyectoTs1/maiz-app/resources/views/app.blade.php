<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estiloMain.css') }}">
    <title>App Maiz</title>  
</head>
<body id="p2">
<header>
    <nav id="p3">
    <h1> El Maiz</h1>
        <ul>
            <li><a href="/login">Login</a></li>
            <li><a href="/saludos">Inicio</a></li>
            <li><a href="contact.asp">Contacto</a></li>
            <li><a href="about.asp">Sobre Pagina</a></li>
        </ul>
    </nav>
    @yield('content')
</header>
</body>
<body>

</body>
</html>
