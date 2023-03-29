@extends('app')
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<br>
<div>
    menu de admin
</div>
<br>
<br>
<div class="contenedor">
    <form action="{{ route('save') }} " method="POST">
        <div>
            @csrf
            @if(session('success'))
                <h6> {{ session('seccess') }}</h6>
            @endif
            
            @error('username')
            <h6> {{ $message }} </h6>
            @enderror

            @error('password')
            <h6> {{ $message }} </h6>
            @enderror

            <div class="columna">
                <label for="titlle"> Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="columna">
                <label for="password"> Password</label>
                <input type="text" name="password" class="form-control">
            </div>
            <br>
            
        </div>
        <div style="text-align:center" >
                <button class="button" type="submit" > Crear Usuario</button>
        </div>
    </form>
</div>
@endsection