<?php

namespace App\Http\Controllers;

use App\Dimension;
use App\Empresa;
use App\EmpresaIndicador;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buscar(Request $request)
    {
        //
        $palabra = $request->empresa;
        $empresa = Empresa::with('indicadores')->where('ruc', $palabra)->get()->first();
        if (!$empresa) {
            return redirect()->back();
        }
        // $indicadoress = EmpresaIndicador::where('empresa_id', $empresa->id)->get();
        // if ($indicadoress->count() == 0) {
        //     return redirect()->back();
        // }
        // $dimensiones = Dimension::with('indicadores')->get();
        // $itc = 0;
        // foreach ($dimensiones  as $dimension) {
        //     $promedio = 0;
        //     foreach ($dimension->indicadores  as $indicador) {
        //         $v = $indicadoress->where('indicador_id', $indicador->id)->first();
        //         if ($v) {
        //             $promedio = $v->first()->respuesta;
        //         }
        //     }
        //     $deno = $dimension->indicadores->count();
        //     if ($deno == 0) {
        //         $deno = 1;
        //     }
        //     $promedio = $promedio / $deno;
        //     $itc += $dimension->pesos * $promedio;
        // }
        $itc = $empresa->itc;
        return view('itc-empresa', compact('itc', 'empresa'));
    }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
