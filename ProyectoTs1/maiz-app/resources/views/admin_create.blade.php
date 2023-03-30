@extends('admin')
@section('content_admin')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div>
    <div class="contenedor">
        <form action="{{ route('save') }} " method="POST">
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
                    <label for="titlle"> Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="columna">
                    <label for="password"> Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <br>

            </div>
            <div style="text-align:center">
                <button class="button" type="submit"> Crear Usuario</button>
            </div>
        </form>
        <div>
            <table>
                <tr>
                    <th>Id User</th>
                    <th>Name User</th>
                </tr>
                @foreach ( $logins as $login )
                <div>
                    <a href="{{ route('user-edit', ['id'=> $login->id]) }}"></a>
                    <tr>
                        <th>{{ $login-> id }}</th>
                        <th>{{ $login-> username }}</th>
                        <th>
                            <form action="{{ route ('user-destroy', [$login-> id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="button" type="submit">eliminar</button>
                            </form>
                        </th>
                    </tr>

                </div>
                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection