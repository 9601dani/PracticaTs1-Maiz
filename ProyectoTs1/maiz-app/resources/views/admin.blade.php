@extends('menu_admin')
@section('menu_admin')
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estiloMain.css') }}">
</head>

<body>
    
    @if(count($comments)>0)
    
    <div class="div_table">
        <h4>Presentamos los comentarios/contacto solicitado por usuarios</h4>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Descripcion</th>
            </tr>
            @foreach ( $comments as $comment )
            <div>
                <a href="{{ route('edit_comment', ['name'=> $comment->name]) }}"></a>
                <tr>
                    <th>{{ $comment-> name }}</th>
                    <th>{{ $comment-> email }}</th>
                    <th>{{ $comment-> comment }}</th>
                </tr>

            </div>
            @endforeach
        </table>

    </div>
    @endif
</body>
</html>
<br><br><br>
@endsection