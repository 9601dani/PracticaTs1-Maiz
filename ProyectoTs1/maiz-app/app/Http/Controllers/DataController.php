<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
class DataController extends Controller
{
    //
    /**
     * index para mostrar todos
     * store para guardar info
     * update para actulizar
     * destroy para eliminar
     * edit para mostrar el formulario de edicion
     */

     public function store(Request $request){
        $validateData= $request-> validate([
            'departamento'=>'required|min:4',
            'municipio' => 'required|string',
            'cantidad' => 'required',
        ]);
        $data= new Data;
        $data-> departamento = $request->departamento;
        $data -> municipio = $request -> municipio;
        $data -> cantidad = $request -> cantidad;
        $data-> save();

        return redirect()-> route('save_data')-> with('success','Datos guardados correctamente'); 
     }

     public function index(){
        $datas = Data::all();
        return view('admin_edit', ['datas'=> $datas]);
       }
    
    public function destroy($id){
        $data= Data::find($id);
        $data->delete();
        return redirect()->route('save_data')-> with('success','Dato eliminado correctamente');
    }

    public function index2(){
        $datas = Data::all();
        return view('welcome', ['datas'=> $datas]);
       }
       public function index3(){
        $datas = Data::all();
        return view('main', ['datas'=> $datas]);
       }
}
