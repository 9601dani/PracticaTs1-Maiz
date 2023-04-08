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
    private static $instance;
    public static $name_sesion;

     public function store(Request $request){
       $validateData= $request->validate([
            'username' => 'required|string',
            'password'=> 'required',
            'name' => 'required',
            'email' => 'required',
            
        ]);
        $login = new Login;
        $login->username= $request->username;
        $login->password= $request->password;
        $login->name= $request->name;
        $login->email= $request->email;
        $login-> save();

        return redirect()-> route('save')-> with('success','Usuario creado correctamente');

     }

     public function index(){
      $logins = Login::all();
      return view('admin_create', ['logins'=> $logins]);
     }

     public function verificar(Request $request){
      $logins = Login::all();
      foreach($logins as $login){
        if($login-> username == $request-> user_name){
          if($login -> password== $request-> pass_user){
            $name_sesion=$request->user_name;
            return redirect()-> route('name_admin')-> with('success','Inicio Sesion');
          }
        }
      }
      return redirect()-> route('verificar')-> with('no_success','Inicio Sesion');

     }
     public function destroy($id){
      $login= Login::find($id);
      $login->delete();
      return redirect()->route('save')-> with('success','usuario eliminado correctamente');
  }

}
