<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nomina;

class NominaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nominas = DB::table('nominas')
            ->orderBy('periodo')
            ->get();

        return json_encode(['nominas' => $nominas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nomina = new Nomina();
        $nomina->empleado_id = $request->empleado_id;
        $nomina->periodo = $request->periodo;
        $nomina->monto_total = $request->monto_total;
        $nomina->save();

        $nominas = DB::table('nominas')
            ->orderBy('periodo')
            ->get();

        return json_encode(['nominas' => $nominas]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nomina = DB::table('nominas')
            ->where('id', $id)
            ->orderBy('periodo')
            ->get();

        return response()->json(['nomina' => $nomina]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nomina = Nomina::find($id);
        $nomina->empleado_id = $request->empleado_id;
        $nomina->periodo = $request->periodo;
        $nomina->monto_total = $request->monto_total;
        $nomina->save();

        return json_encode(['nomina' => $nomina]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nomina = Nomina::find($id);
        $nomina->delete();

        $nominas = DB::table('nominas')
            ->orderBy('periodo')
            ->get();

        return json_encode(['nominas' => $nominas]);
    }
}
