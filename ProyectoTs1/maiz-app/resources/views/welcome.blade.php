@extends('app')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<h1 style="text-align:center">Maíz: propiedades, beneficios y valor nutricional</h1>
<h4 style="text-align:center">·Es el tercer cereal más consumido del mundo y cada vez cuenta con más adeptos porque es
    muy rico en vitaminas y minerales </h4>
<div class="contenedor">
    <div>
        <img src="{{ asset('img/img_welcome.jpg')}}"
            width="1000" height="350">
    </div>
</div>
<div class="contenedor">
    <div class="columna1">
        <h1 style="text-align:center">Tipos de maiz</h1>
        <div>
            <h4 style="text-align:justify">Según el Consejo Nacional de Áreas Protegidas —Conap— en el departamento de
                Huehuetenango se han identificado 48 clases de maíz,
                adaptados a diferentes condiciones de suelo, temperatura y humedad del lugar. Como dato interesante,
                destaca que cada 13 de agosto se celebra
                el Día Nacional del Maíz, según Decreto Legislativo 13-2014.
                entre los mas populares:</h4>
            <div class="contenedor">
                <div class="columnna1">
                    <h4 style="margin-top: 20px; margin-bottom: 20px;">· Amarillo </h4>
                </div>
                <div class="columnna1">
                    <h4 style="margin-top: 20px; margin-bottom: 20px;"> ·Morado </h4>
                </div>
                <div class="columnna1">
                    <h4 style="margin-top: 20px; margin-bottom: 20px;"> ·Blanco </h4>
                </div>
                <div class="columnna1">
                    <h4 style="margin-top: 20px; margin-bottom: 20px;"> ·Rojo </h4>
                </div>
                <div class="columnna1">
                    <h4 style="margin-top: 20px; margin-bottom: 20px;"> ·Negro </h4>
                </div>
            </div>
        </div>
        <div style="text-align:center">
            <img src="{{ asset('img/img_type_maiz.jpg')}}"
                width="350" height="350">
        </div>
        <br><br>
        <h3 style="text-align:center" > Presentando Datos</h3>
        @if(count($datas)>0)
        <div class="div_table">
            <table>
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
        </div>
        @endif
    </div>
    <div class="columna1">
        <h1 style="text-align:center"> Caracteristicas</h1>
        <div>
            <h4 style="text-align:justify">En Guatemala, el maíz es considerado un cultivo marginal, y su producción es
                concebida mayormente como de importancia “social” más que
                económica, la mayoría del grano es producido por los agricultores con limitado acceso a innovación
                tecnológica, se produce en áreas marginales
                y de baja productividad, situación que incide negativamente en el potencial de rendimiento del cultivo
            </h4>
        </div>
        <div style="text-align:center">
            <img src="{{ asset('img/estruc_maiz.jpg')}}"
                width="350" height="350">
        </div>
        <div style="text-align:justify">
            <b>Variedad: </b> En Guatemala se cultivan numerosas variedades de maíz, que varían en tamaño, forma, color,
            textura y sabor. Estas variedades se utilizan para diferentes fines, como la alimentación humana y animal,
            la producción de harina y tortillas, y la elaboración de bebidas tradicionales. <br>
            <b>Importancia cultural: </b> El maíz tiene una gran importancia cultural en Guatemala, ya que es
            considerado un alimento sagrado y forma parte de las tradiciones y ceremonias de muchas comunidades
            indígenas. El maíz también está presente en la iconografía y simbolismo de la cultura Maya. <br>
            <b>Nutrición: </b> El maíz es un alimento muy nutritivo y rico en carbohidratos, proteínas, vitaminas y
            minerales, lo que lo convierte en una fuente importante de energía para la población guatemalteca. <br>
            <b>Producción: </b> La producción de maíz es una de las principales actividades agrícolas de Guatemala, y se
            concentra principalmente en las regiones del altiplano y la costa sur del país. Los pequeños agricultores y
            las comunidades indígenas son los principales productores de maíz en Guatemala. <br>
            <b>Preparación </b> y consumo: En Guatemala, el maíz se consume en una amplia variedad de formas y platos,
            como tortillas, tamales, atoles, chuchitos, pozoles y guisos.
        </div>
    </div>
</div>


@endsection