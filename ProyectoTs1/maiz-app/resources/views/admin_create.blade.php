@extends('menu_admin')
@section('menu_admin')
<br><br>
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div >
    <div class="contenedor">
        <form action="{{ route('save') }} " method="POST" class="form_mas">
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
                <div class="columna">
                    <label for="titlle"> Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="columna">
                    <label for="email"> Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <br>

            </div>
            <div style="text-align:center">
                <button class="button" type="submit"> Crear Usuario</button>
            </div>
            <br>
        </form>
        @if(count($logins)>0)
        <div class="div_table">
            <table>
                <tr>
                    <th>Name User</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                @foreach ( $logins as $login )
                <div>
                    <a href="{{ route('user-edit', ['id'=> $login->id]) }}"></a>
                    <tr>
                        <th>{{ $login-> username }}</th>
                        <th>{{ $login-> name }}</th>
                        <th>{{ $login-> email }}</th>
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
        @endif
    </div>
</div>
@endsection