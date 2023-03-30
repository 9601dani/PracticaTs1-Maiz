@extends('app')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="contenedor">
        <div class="columna">
            <form action="/action_page.php" method="post">
                <div class="imgcontainer">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmMX2Q9c3cTQkVBDXanJSjtKNWXrXWHF1zsg&usqp=CAU">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="user_name" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pass_user" required>

                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection