<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    /**
     * index para mostrar todos los datos
     * store para guardar un nuevo
     * update para actualizar
     * destroy para eliminar
     * edit para mostrar formulario de edicion
     */

     public function store(Request $request){
       $validateData= $request->validate([
            'username' => 'required|string',
            'password'=> 'required',
            
        ]);
        $login = new Login;
        $login->username= $request->username;
        $login->password= $request->password;
        $login-> save();

        return redirect()-> route('save')-> with('success','Usuario creado correctamente');

     }
}
