<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estiloMain.css') }}">
</head>
<body>
   <div>
    <nav id="p4">
    <h1> <a href="/admin">Bienvenido</a></h1>
        <ul>
            <li><a href="/admin_create">Crear Usuario</a></li>
            <li><a href="/admin_edit">Ingresar Info Maiz</a></li>
            <li><a href="/">Cerrar Sesion</a></li>
        </ul>
    </nav>
    @yield('menu_admin')
</div> 
</body>

</html>
<footer>
  <div>
    <p>Todos los derechos reservados &copy; 2023</p>
    <p>201930699 Erick Morales</p>
  </div>
</footer>
