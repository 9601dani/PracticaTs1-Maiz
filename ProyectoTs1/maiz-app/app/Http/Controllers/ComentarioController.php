<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    //
     /**
     * index para mostrar todos los datos
     * store para guardar un nuevo
     * update para actualizar
     * destroy para eliminar
     * edit para mostrar formulario de edicion
     */

     public function store(Request $request){
        $validateData= $request->validate([
             'name' => 'required|string',
             'email'=> 'required',
             'comment' => 'required',
             
         ]);
         $comment = new Comentario;
         $comment->name= $request->name;
         $comment->email= $request->email;
         $comment->comment= $request->comment;
         $comment-> save();
        //falta ver aqui estoy
         return redirect()-> route('save_comment')-> with('success','Se envio correctamente el comentario');
 
      }

      public function index(){
        $comments = Comentario::all();
        return view('admin', ['comments'=> $comments]);
       }

       public function destroy($name){
        $comments= Comentario::find($name);
        $comments->delete();
        return redirect()->route('name_admin')-> with('success','Dato eliminado correctamente');
    }
}
