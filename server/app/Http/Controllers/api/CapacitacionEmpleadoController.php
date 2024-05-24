<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CapacitacionEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $capacitacionEmpleado = DB::table('capacitacion_empleado')
            ->orderBy('capacitacion_id')
            ->get();

        return json_encode(['capacitacion_empleado' => $capacitacionEmpleado]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('capacitacion_empleado')->insert([
            'empleado_id' => $request->empleado_id,
            'capacitacion_id' => $request->capacitacion_id,
        ]);

        $capacitacionEmpleado = DB::table('capacitacion_empleado')
            ->orderBy('capacitacion_id')
            ->get();

        return json_encode(['capacitacion_empleado' => $capacitacionEmpleado]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $capacitacionEmpleado = DB::table('capacitacion_empleado')
            ->where('id', $id)
            ->orderBy('capacitacion_id')
            ->get();

        return response()->json(['capacitacion_empleado' => $capacitacionEmpleado]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('capacitacion_empleado')
            ->where('id', $id)
            ->update([
                'empleado_id' => $request->empleado_id,
                'capacitacion_id' => $request->capacitacion_id,
            ]);

        $capacitacionEmpleado = DB::table('capacitacion_empleado')
            ->where('id', $id)
            ->get();

        return json_encode(['capacitacion_empleado' => $capacitacionEmpleado]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('capacitacion_empleado')
            ->where('id', $id)
            ->delete();

        $capacitacionEmpleado = DB::table('capacitacion_empleado')
            ->orderBy('capacitacion_id')
            ->get();

        return json_encode(['capacitacion_empleado' => $capacitacionEmpleado]);
    }
}
