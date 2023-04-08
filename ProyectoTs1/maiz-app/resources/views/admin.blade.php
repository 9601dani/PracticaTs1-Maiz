@extends('menu_admin')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<div>
    <nav id="p4">
    <h1> <a href="/admin">Bienvenido</a></h1>
        <ul>
            <li><a href="/admin_create">Crear Usuario</a></li>
            <li><a href="/admin_edit">Ingresar Info Maiz</a></li>
            <li><a href="/">Cerrar Sesion</a></li>
        </ul>
    </nav>
    @yield('content_admin')
</div>
@endsection