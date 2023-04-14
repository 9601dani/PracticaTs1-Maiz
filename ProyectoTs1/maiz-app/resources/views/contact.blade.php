@extends('app')
@section('content')
<br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <div  class="div_table">
       <h3  style="">Envianos tu informacion para poder contactarte!</h3>
    </div>
   
</head>
<body>
<form class="container" action="{{ route('save_comment') }} " method="POST">
@csrf
            @if(session('success'))
            <h6> {{ session('success') }}</h6>
            @endif

            @error('name')
            <h6> {{ $message }} </h6>
            @enderror

            @error('email')
            <h6> {{ $message }} </h6>
            @enderror
            
            @error('comment')
            <h6> {{ $message }} </h6>
            @enderror
  <label for="name">Nombre:</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="comment">Mensaje:</label>
  <textarea id="comment" name="comment" required></textarea>

  <button class="button" type="submit"> Enviar</button>
</form>
</body>
</html>
<br><br><br><br><br><br><br>
@endsection