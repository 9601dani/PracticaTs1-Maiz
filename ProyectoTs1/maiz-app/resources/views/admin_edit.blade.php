@extends('admin')
@section('content_admin')
<div class="contenedor">
    <form action="{{ route('save_data') }} " method="POST">
        <div>
            @csrf
            @if(session('success'))
            <h6> {{ session('success') }}</h6>
            @endif

            @error('username')
            <h6> {{ $message }} </h6>
            @enderror

            @error('password')
            <h6> {{ $message }} </h6>
            @enderror

            <div class="columna">
                <label for="departamento"> Departamento</label>
                <input type="text" name="departamento" class="form-control">
            </div>
            <div class="columna">
                <label for="municipio"> Municipio</label>
                <input type="text" name="municipio" class="form-control">
            </div>
            <div class="columna">
                <label for="cantidad"> Cantidad</label>
                <input type="text" name="cantidad" class="form-control">
            </div>
            <br>

        </div>
        <div style="text-align:center">
            <button class="button" type="submit"> Añadir Informacion</button>
        </div>
    </form>
    @if($datas)
    <div>
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
                        <th>
                            <form action="{{ route ('data-destroy', [$data-> id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="button" type="submit">eliminar registro</button>
                            </form>
                        </th>
                    </tr>

                </div>
                @endforeach
            </table>
        </div>
     @endif   
<div>
@endsection