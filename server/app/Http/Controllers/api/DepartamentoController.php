<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamentos = DB::table('departamentos')
        ->orderBy('nombre')
        ->get();

        return json_encode(['departamentos'=>$departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $departamento = new Departamento();
        $departamento->nombre = $request->nombre;
        $departamento->ubicacion = $request->ubicacion;
        $departamento->save();

        $departamentos = DB::table('departamentos')
        ->orderBy('nombre')
        ->get();

        return json_encode(['departamentos'=>$departamentos]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $departamento = DB::table('departamentos')
        ->where('departamentos.id', $id)
        ->orderBy('nombre')
        ->get();

        return response()->json(['departamento'=>$departamento]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $departamento = Departamento::find($id);
        $departamento->nombre = $request->nombre;
        $departamento->ubicacion = $request->ubicacion;
        $departamento->save();

        return json_encode(['departamento'=>$departamento]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $departamento = Departamento::find($id);
        $departamento->delete();

        $departamentos = DB::table('departamentos')
        ->orderBy('nombre')
        ->get();

        return json_encode(['departamentos'=>$departamentos]);
    }
}
