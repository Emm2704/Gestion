<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Beneficio;

class BeneficioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beneficios = DB::table('beneficios')
            ->orderBy('tipo')
            ->get();

        return json_encode(['beneficios' => $beneficios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $beneficio = new Beneficio();
        $beneficio->empleado_id = $request->empleado_id;
        $beneficio->tipo = $request->tipo;
        $beneficio->detalles = $request->detalles;
        $beneficio->save();

        $beneficios = DB::table('beneficios')
            ->orderBy('tipo')
            ->get();

        return json_encode(['beneficios' => $beneficios]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $beneficio = DB::table('beneficios')
            ->where('id', $id)
            ->orderBy('tipo')
            ->get();

        return response()->json(['beneficio' => $beneficio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $beneficio = Beneficio::find($id);
        $beneficio->empleado_id = $request->empleado_id;
        $beneficio->tipo = $request->tipo;
        $beneficio->detalles = $request->detalles;
        $beneficio->save();

        return json_encode(['beneficio' => $beneficio]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $beneficio = Beneficio::find($id);
        $beneficio->delete();

        $beneficios = DB::table('beneficios')
            ->orderBy('tipo')
            ->get();

        return json_encode(['beneficios' => $beneficios]);
    }
}
