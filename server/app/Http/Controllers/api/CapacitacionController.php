<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Capacitacion;

class CapacitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $capacitaciones = DB::table('capacitaciones')
            ->orderBy('tema')
            ->get();

        return json_encode(['capacitaciones' => $capacitaciones]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $capacitacion = new Capacitacion();
        $capacitacion->tema = $request->tema;
        $capacitacion->fecha = $request->fecha;
        $capacitacion->costo = $request->costo;
        $capacitacion->save();

        $capacitaciones = DB::table('capacitaciones')
            ->orderBy('tema')
            ->get();

        return json_encode(['capacitaciones' => $capacitaciones]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $capacitacion = DB::table('capacitaciones')
            ->where('id', $id)
            ->orderBy('tema')
            ->get();

        return response()->json(['capacitacion' => $capacitacion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $capacitacion = Capacitacion::find($id);
        $capacitacion->tema = $request->tema;
        $capacitacion->fecha = $request->fecha;
        $capacitacion->costo = $request->costo;
        $capacitacion->save();

        return json_encode(['capacitacion' => $capacitacion]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $capacitacion = Capacitacion::find($id);
        $capacitacion->delete();

        $capacitaciones = DB::table('capacitaciones')
            ->orderBy('tema')
            ->get();

        return json_encode(['capacitaciones' => $capacitaciones]);
    }
}
