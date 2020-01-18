<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Servicios;
use App\Unidad_Medida;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ServiciosFormrequest;
use DB;

class ServiciosController extends Controller
{
    //definicion de funciones
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        /* $servicios=Servicios::orderBy('id_servicio','DESC')->paginate();
        return view('servicios.list',compact('servicios')); */

    if($request){
            $query=trim($request->get('searchText'));
            $servicios=DB::table('servicios')
            ->join('unidad_medida','unidad_medida.id_unidad_medida','servicios.id_unidad_medida')
            ->select('servicios.*','unidad_medida.descripcion_unidad_medida')
            ->where('servicio','LIKE','%'.$query.'%')
            ->where('costo','LIKE','%'.$query.'%')
            ->orderBy('servicios.id_servicio','desc')
            ->paginate(10);
            return view('servicios.list',compact('servicios'));
        }
    }

    public function create()
    {
        $unidad_medida = Unidad_Medida::all();
         return view("servicios.create", compact('unidad_medida'));
    }

    public function store(ServiciosFormrequest $request)
    {
        $servicios= new Servicios;
        $servicios->id_unidad_medida=$request->get('id_unidad_medida');
        $servicios->servicio=$request->get('servicio');
        $servicios->costo=$request->get('costo');
        $servicios->save();
        return Redirect::to('servicios');
    }

    public function show($id)
    {
        return view ("servicios.show",["servicios"=>Servicios::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view ("servicios.edit",["servicios"=>Servicios::findOrFail($id)]);

    }

    public function update(ServiciosFormrequest $request,$id)
    {
        $servicios=Servicios::findOrFail($id);
        $servicios->id_unidad_medida=$request->get('id_unidad_medida');
        $servicios->servicio=$request->get('servicio');
        $servicios->costo=$request->get('costo');
        $servicios->update();
        return Redirect::to('servicios');
    }

    public function destroy($id){
        $servicios = Servicios::findOrFail($id);
        $servicios->condicion='0';
        $servicios->delete();
        return Redirect::to('servicios');
    }
}
