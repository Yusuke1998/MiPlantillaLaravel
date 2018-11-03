<?php

namespace App\Http\Controllers;
use App\personal;
use Illuminate\Http\Request;

class personals extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comedors = personal::all();

        $estatus_n = personal::where('estatus','=','activo')->get();

        $fecha_n = personal::orderBy('fecha_ingreso','DESC')->limit(4)->get();


        return view('comedor')
            ->with('comedors',$comedors)
            ->with('estatus_n',$estatus_n)
            ->with('fecha_n',$fecha_n);
    }
    public function store(Request $request)
    {
        $obrero = new personal;
        $obrero->nombre = $request->nombre;
        $obrero->apellido = $request->apellido;
        $obrero->cedula = $request->cedula;
        $obrero->telefono = $request->telefono;
        $obrero->estatus = $request->estatus;
        $obrero->fecha_ingreso = $request->fecha_ingreso;

        $obrero->save();
        return back();
    }

    public function edit($id)
    {
        $comedors = personal::find($id);
        return view('editar')->with('comedors',$comedors);
    }

    public function update(Request $request, $id)
    {
        $comedors = personal::find($id);
        $comedors->fill($request->all());
        $comedors->save();
        return back();
    }

    public function destroy($id)
    {
        $comedors = personal::find($id);
        $comedors->delete();
        return back();
    }
}
