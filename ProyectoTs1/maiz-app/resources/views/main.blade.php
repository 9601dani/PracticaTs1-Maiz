@extends('app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estiloMain.css') }}">
</head>

<body>
    <div class="contenedor">
        <div class="columna1">
            <div class="contenedor">
                <h1>Propiedades y beneficios del Maiz</h1>
            </div>
            <div class="contenedor" style="text-align:justify">
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
        <div class="contenedor">
            <div class="columna1">
                <h2> Etapas de la produccion del maiz</h2>
                <img src="{{ asset('img/main_maiz.jpg')}}" width="650" height="550">
                <div>
                    <br>
                    <div style="text-align:justify">
                        <b>Preparación del suelo:</b> se limpia y se ara el terreno para prepararlo para la siembra.
                        <br>
                        <b>Siembra: </b>se realiza la siembra de las semillas de maíz en el suelo preparado. En
                        Guatemala, se siembra principalmente en la época de lluvia (de mayo a octubre). <br>
                        <b>Cuidado de los cultivos: </b>durante el crecimiento del maíz, se debe controlar el
                        crecimiento de malezas, plagas y enfermedades. También es importante monitorear el riego y la
                        nutrición de los cultivos. <br>
                        <b>Cosecha:</b> una vez que las mazorcas de maíz han madurado, se cosechan a mano y se retiran
                        las hojas exteriores. En Guatemala, la cosecha de maíz generalmente ocurre entre los meses de
                        septiembre y noviembre. <br>
                        <b>Almacenamiento:</b> el maíz se puede almacenar en bodegas secas y ventiladas hasta que se
                        necesite para su uso o venta. <br>
                        <b>Comercialización:</b> el maíz se puede vender a los mercados locales o exportarse a otros
                        países. En Guatemala, el maíz es un cultivo importante para la alimentación humana y animal, y
                        es una importante fuente de ingresos para los agricultores. <br>
                    </div>
                </div>
            </div>
            <div class="columna1">
                <h2> Principios agronómicos</h2>
                <div style="text-align:justify">
                    El maíz prospera entre las temperaturas de 21 a 27°C en los meses de verano.
                    Los suelos deben de estar bastante calientes para poder asegurar germinación
                    y crecimiento buenos y constantes. La temperatura mínima para germinación es
                    de 10°C y con una temperatura del suelo de 16 a 18°C, el maíz normalmente germina
                    después de una semana. El maíz no tolera encharcamiento de agua, por eso un buen
                    drenaje es primordial, sobre todo en zonas templadas y en suelos más pesados.
                </div>
                <br>
                <div style="text-align:center">
                    <img src="{{ asset('img/riego_maiz.jpg')}}" width="175" height="75"
                     alt="Avatar">
                </div>
                <br>
                <div style="text-align:justify">
                    <br>
                    Después de la germinación, se define cada etapa de desarrollo de las hojas conforme
                    la hoja superior cuyo cuello esté visible. No obstante, desde aproximadamente V6 en
                    adelante, las hojas más abajo pueden marchitar y caerse de la planta, y entonces en
                    esa etapa es importante contar el número de cuellos visibles en el tallo.
                </div>
                <br>
                <div style="text-align:center">
                    <img src="{{ asset('img/tallo_maiz.jpg')}}" width="220" height="95"
                     alt="Avatar">
                </div>
                <br>
                <div style="text-align:justify">
                    En etapas tempranas de desarrollo de la planta, el crecimiento se limita por el
                    tamaño de las hojas y la raigambre. Una producción temprana de follaje también afecta
                    la producción de granos. Sumando, todos los nutrientes necesarios tienen que estar
                    disponibles en el momento oportuno, o un desarrollo pobre restringirá el crecimiento. La etapa más
                    crítica referente a la nutrición, es V6
                </div>
                <div>
                    <h3 style="text-align:center"> Presentando Datos</h3>
                    @if(count($datas)>0)
                    <div class="div_table">
                        <table style="text-align:center">
                            <tr>
                                <th>Departamento</th>
                                <th>Municipio</th>
                                <th>Cantidad Producida</th>
                            </tr>
                            @foreach ( $datas as $data )
                            <div>
                                <a href="{{ route('all_data', ['id'=> $data->id]) }}"></a>
                                <tr>
                                    <th>{{ $data-> departamento }}</th>
                                    <th>{{ $data-> municipio }}</th>
                                    <th>{{ $data-> cantidad }}</th>
                                </tr>

                            </div>
                            @endforeach
                        </table>
                        <br>
                            <h4 style="text-align: justify">
                                Los siguientes datos es un promedio de datos recolectados por <br>
                                las personas que hemos realizado la pagina.
                            </h4>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection