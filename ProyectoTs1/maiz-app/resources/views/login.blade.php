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
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmMX2Q9c3cTQkVBDXanJSjtKNWXrXWHF1zsg&usqp=CAU"
                        alt="Avatar" class="avatar">
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
    <div class="contenedor">
        <div class="columna1">
            <div class="contenedor">
                <h1>Propiedades y beneficios del Maiz</h1>
            </div>
            <div class="contenedor">
                <div class="columna1">
                    <h1>1</h1>
                </div>
                <div class="columna1">
                    <h4>Antioxidantes: El maíz es fuente de antioxidantes que combaten
                        los radicales libres y el envejecimiento celular. </h4>
                </div>
            </div>
            <div class="contenedor">
                <div class="columna1">
                    <h1>2</h1>
                </div>
                <div class="columna1">
                    <h4>Saciante: Rico en fibra e hidratos de carbono
                        el maíz es saciante y ayuda a controlar nuestro apetito. </h4>
                </div>
            </div>
            <div class="contenedor">
                <div class="columna1">
                    <h1>3</h1>
                </div>
                <div class="columna1">
                    <h4>Bueno para el cerebro: Rico en ácido fólico y otras vitaminas,
                        el maíz es un aliado de diversas funciones cerebrales. </h4>
                </div>
            </div>
            <div class="contenedor">
                <div class="columna1">
                    <h1>4</h1>
                </div>
                <div class="columna1">
                    <h4>Cuida nuestra salud cardiovascular: La vitamina B1 que contiene el maíz disminuye la
                        homocisteína y, por lo tanto,
                        reduce también el riesgo de sufrir un ataque cardiovascular. </h4>
                </div>
            </div>
            <div class="contenedor">
                <div class="columna1">
                    <h1>5</h1>
                </div>
                <div class="columna1">
                    <h4>Indicado para las embarazadas: Rico en ácido fólico,
                        es muy recomendable para las embarazadas y en etapas de lactancia. </h4>
                </div>
            </div>
            <div class="contenedor">
                <div class="columna1">
                    <h1>6</h1>
                </div>
                <div class="columna1">
                    <h4>Mantiene los huesos fuertes.
                        Gracias a la presencia de de calcio entre sus nutrientes. </h4>
                </div>
            </div>
        </div>
        <div class="columna1">
        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c6/Zea_mays_Blanco2.279.png"
         width="750" height="650" >
        </div>
    </div>
</body>


@endsection