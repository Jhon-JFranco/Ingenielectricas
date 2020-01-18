<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pedidos;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PedidosFormrequest;
use DB;

class PedidosController extends Controller
{
     //definicion de funciones
     public function __construct()
     {
 
     }
 
     public function index(Request $request)
     {
        $pedidos=Pedidos::orderBy('id_pedido','DESC')->paginate();
        return view('pedidos.list',compact('pedidos'));
     }
 
     public function create()
     {
          return view("pedidos.create");
     }
 
     public function store(PedidosFormrequest $request)
     {
         $pedidos= new Pedidos;
         $pedidos->fecha_elaboracion=$request->input('fecha_elaboracion');
         $pedidos->fecha_inicio=$request->input('fecha_inicio');
         $pedidos->fecha_final=$request->input('fecha_final');
         $pedidos->monto_total=$request->input('monto_total');
         $pedidos->save();
         return Redirect::to('pedidos');
     }
 
     public function show($id)
     {
         return view ("pedidos.show",["pedidos"=>Pedidos::findOrFail($id)]);
     }
 
     public function edit($id)
     {
         return view ("pedidos.edit",["pedidos"=>Pedidos::findOrFail($id)]);
 
     }
 
     public function update(PedidosFormrequest $request,$id)
     {
         $pedidos=Pedidos::findOrFail($id);
         $pedidos->fecha_elaboracion=$request->get('fecha_elaboracion');
         $pedidos->fecha_inicio=$request->get('fecha_inicio');
         $pedidos->fecha_final=$request->get('fecha_final');
         $pedidos->monto_total=$request->get('monto_total');
         $pedidos->update();
         return Redirect::to('pedidos');
     }
 
     public function destroy($id){
         $pedidos = Pedidos::findOrFail($id);
         $pedidos->condicion='0';
         $pedidos->delete();
         return Redirect::to('pedidos');
     }
}
