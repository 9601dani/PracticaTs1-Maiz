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
<body>
<header>
    <nav id="p2">
    <h1> <a href="/">El Maiz</a></h1>
        <ul>
            <li><a href="/login">Login</a></li>
            <li><a href="/inicio">Mas Info</a></li>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="">Sobre Pagina</a></li>
        </ul>
    </nav>
    @yield('content')
</header>
</body>
<body>

</body>
</html>
