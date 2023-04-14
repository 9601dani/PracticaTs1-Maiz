@extends('app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estiloMain.css') }}">
</head>

<body>
    <h3 style="text-align:center">Recetas con Maiz</h3>
    <div class="container">
        <div class="columnas">
            <div class="div_table">
                <a style="text-align:justify"> Pan/Cubo de Elote</a>
                <img src="{{ asset('img/poleta.jpg')}}" width="75" height="45">
                <p style="text-align:justify">
                    Con muy pocos ingredientes se puede una deliciosa polenta de maíz gratinada, muy sencilla y también
                    sabrosa gracias al toque que le da el queso rallado.
                </p>
                <h2> Ingredientes:</h2>
                <ul> 4 o 5 elotes desgranados y ya preparados</ul>
                <ul>4 huevos (a temperatura ambiente)</ul>
                <ul>180 g mantequilla (a temperatura ambiente)</ul>
                <ul> 1 lata de leche condensada</ul>
                <ul>1 tz harina de trigo</ul>
                <ul>1 cdta polvo para hornear</ul>
                <ul>40 g azúcar (opcional)</ul>
                <ul> 1/4 cdta sal</ul>
                <ul> 1 cda canela molida</ul>
                <ul>1 cda vainilla</ul>
                <h2> Preaparacion:</h2>
                <ul>Engrasar y enharinar un molde para pastel o panqué y precalentar el horno a 180°C.</ul>
                <ul>Licuar los granos de elote junto con la leche condensada, poco a poco para no saturar la licuadora y
                    reservar.</ul>
                <ul>Pasar por un colador los secos: harina, polvo para hornear, canela y sal. Reservar.</ul>
                <ul>Batir la mantequilla por un minuto, pasado este tiempo agregar el azúcar, un minuto después agregar
                    uno a uno los huevos y batir 5 minutos más.</ul>
                <ul>Mezclar poco a poco la mantequilla batida con los elotes licuados, una vez integrada la mezcla
                    agregamos la cucharada de vainilla y la harina en tres partes y batir por 30 segundos más.</ul>
                <ul>Por último verter la mezcla de elote en el molde y hornear a 180°C por 55 minutos o hasta que al
                    insertar un palillo, este salga limpio.</ul>
            </div>
        </div>
    </div>
    <br><br>
    <div class="columnas">
        <div class="div_table">
            <a style="text-align:justify"> Atol de Elote</a>
            <img src="{{ asset('img/atol.jpg')}}" width="75" height="45">
            <p style="text-align:justify">
                El Atol de Elote es una bebida ancestral, hecha a base de maíz y de un sabor único y exquisito.
                Para los mayas el maíz era un alimento sagrado, se consumía en diversas ceremonias, pero era
                también consumido como alimento diariamente.
            </p>
            <h2> Ingredientes:</h2>
            <ul>2 tazas de granos de elote amarillo.</ul>
            <ul>4 1/2 tazas de agua fría.</ul>
            <ul>1 raja de canela.</ul>
            <ul>1 taza de azúcar.</ul>
            <ul>1/2 cucharadita de sal.</ul>
            <h2>Preparacion:</h2>
            <ul>Pelar y desgranar los elotes, asegurarse de que el elote sea granudo, no tierno, luego licuarlo por
                pocos, con 3/4 de taza de agua, colarlo y agregar las otras 3 1/2 tazas de agua, la raja de canela y
                azúcar al gusto.</ul>
            <ul>Poner a fuego lento la mezcla y dejar hervir moviendo constantemente para que no se pegue.</ul>
            <ul>Cuando hierva, agregar la sal y seguir cocinando hasta que el elote esté cocido, (aproximadamente 10
                minutos).</ul>
            <ul>Servirlo caliente rociado con canela en polvo.</ul>
            <br><br><h4>Video de referencia:</h4>
            <video class="mi-video" controls>
                <source src="img/video.mp4" type="video/mp4" with="75" height="45">
                <p>Tu navegador no soporta la reproducción de videos HTML5.</p>
            </video>
        </div>
    </div>

</body>

</html>
<br><br><br><br><br><br><br><br>
@endsection