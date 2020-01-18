<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Empleados;
use App\Obras;
use App\Cargos;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EmpleadosFormrequest;
use DB;

class EmpleadosController extends Controller
{
    //definicion de funciones
    public function __construct()
    {

    }

    public function index(Request $request)
    {

        /* $empleados=Empleados::orderBy('id_empleado','DESC')->paginate();
        return view('empleados.list',compact('empleados')); */
        if($request){
            $query=trim($request->get('searchText'));
            $empleados=DB::table('empleados')
            ->join('cargos','cargos.id_cargo','empleados.id_cargo')
            ->join('obras','obras.id_obra','empleados.id_obra')
            ->select('empleados.*','obras.descripcion_obra','cargos.descripcion_cargo')
            ->where('numero_documento','LIKE','%'.$query.'%')
            ->where('nombre_empleado','LIKE','%'.$query.'%')
            ->where('apellido_empleado','LIKE','%'.$query.'%')
            ->where('telefono','LIKE','%'.$query.'%')
            ->where('direccion','LIKE','%'.$query.'%')
            ->where('estado','LIKE','%'.$query.'%')
            ->orderBy('empleados.id_empleado','desc')
            ->paginate(10);
            return view('empleados.list',["empleados"=>$empleados,"searchText"=>$query]);
        }
    }

    public function create()
    {
        $obras = Obras::all();
        $cargos = Cargos::all();
         return view("empleados.create",compact('obras', 'cargos'));
    }

    public function store(EmpleadosFormrequest $request)
    {
        $empleados= new Empleados;
        $empleados->id_usuario=$request->get('id_usuario');
        $empleados->id_obra=$request->get('id_obra');
        $empleados->id_cargo=$request->get('id_cargo');
        $empleados->numero_documento=$request->get('numero_documento');
        $empleados->nombre_empleado=$request->get('nombre_empleado');
        $empleados->apellido_empleado=$request->get('apellido_empleado');
        $empleados->telefono=$request->get('telefono');
        $empleados->direccion=$request->get('direccion');
        $empleados->estado=$request->get('estado');
        $empleados->save();
        return Redirect::to('empleados');
    }
 
    public function show($id)
    {
        return view ("empleados.show",["empleados"=>Empleados::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view ("empleados.edit",["empleados"=>Empleados::findOrFail($id)]);
    }

    public function update(EmpleadosFormrequest $request,$id)
    {
        $empleados=Empleados::findOrFail($id);
        $empleados->id_usuario=$request->get('id_usuario');
        $empleados->id_obra=$request->get('id_obra');
        $empleados->id_cargo=$request->get('id_cargo');
        $empleados->numero_documento=$request->get('numero_documento');
        $empleados->nombre_empleado=$request->get('nombre_empleado');
        $empleados->apellido_empleado=$request->get('apellido_empleado');
        $empleados->telefono=$request->get('telefono');
        $empleados->direccion=$request->get('direccion');
        $empleados->estado=$request->get('estado');
        $empleados->update();
        return Redirect::to('empleados');
    }

    public function destroy($id){
        $empleados = Empleados::findOrFail($id);
        $empleados->condicion='0';
        $empleados->delete();
        return Redirect::to('empleados');
    }

}
