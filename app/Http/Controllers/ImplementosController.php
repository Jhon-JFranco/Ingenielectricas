<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Implementos;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ImplementosFormrequest;
use DB;

class ImplementosController extends Controller
{
    //definicion de funciones
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $implementos=Implementos::orderBy('id_implemento','DESC')->paginate();
        return view('implementos.list',compact('implementos'));
    }

    public function create()
    {
        
         return view("implementos.create");
    }
   //para hacer registros en la tabla
    public function store(ImplementosFormrequest $request)
    {
        $implementos= new Implementos;
        $implementos->estado=$request->input('estado');
        $implementos->fecha_entrega=$request->input('fecha_entrega');
        $implementos->save();
        return Redirect::to('implementos');
    }

    public function show($id)
    {
        return view ("implementos.show",["implementos"=>Implementos::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view ("implementos.edit",["implementos"=>Implementos::findOrFail($id)]);

    }

    public function update(ImplementosFormrequest $request,$id)
    {
        
        $implementos=Implementos::findOrFail($id);
        $implementos->estado=$request->get('estado');
        $implementos->fecha_entrega=$request->get('fecha_entrega');
        $implementos->update();
        return Redirect::to('implementos');
    }

    public function destroy($id){
        $implementos = Implementos::findOrFail($id);
        $implementos->condicion='0';
        $implementos->delete();
        return Redirect::to('implementos');
    }

}
