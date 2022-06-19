<?php

namespace App\Http\Controllers;

use App\Models\Compro;
use Illuminate\Http\Request;

class ComproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=new Compro();
        $datos->cantidad=$request->cantidad;
        $datos->id_usuario=$request->id_usuario;
        $datos->id_producto=$request->id_producto;
        $datos->save();

        return response()->json(['result'=>"Registro Exitoso",'code'=>'201']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compro  $compro
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {     
        $datos=Compro::with('producto')->where('id_usuario',$id)->get();
        $num_rows = count($datos);

        if($num_rows!=0){
            return response()->json(['result'=>$datos , 'code'=>'201']);
        }else
            return response()->json(['mensaje'=>"No hay registros", 'code'=>'202']);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compro  $compro
     * @return \Illuminate\Http\Response
     */
    public function edit(Compro $compro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compro  $compro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compro $compro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compro  $compro
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id_eli)
    {
        $datos=Compro::find($id_eli);
        if($datos != null){
            $datos->delete();
            return response()->json(['result'=>"Dato Eliminado", 'code'=>'201']);
        }else
        return response()->json(['result'=>"Registro no encontrado", 'code'=>'202']);
    }
}
