<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = DB::table('empleados')
            ->orderBy('nombre')
            ->get();

        return json_encode(['empleados' => $empleados]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->departamento_id = $request->departamento_id;
        $empleado->puesto = $request->puesto;
        $empleado->fecha_contratacion = $request->fecha_contratacion;
        $empleado->salario = $request->salario;
        $empleado->save();

        $empleados = DB::table('empleados')
            ->orderBy('nombre')
            ->get();

        return json_encode(['empleados' => $empleados]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleado = DB::table('empleados')
            ->where('id', $id)
            ->orderBy('nombre')
            ->get();

        return response()->json(['empleado' => $empleado]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $empleado = Empleado::find($id);
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->departamento_id = $request->departamento_id;
        $empleado->puesto = $request->puesto;
        $empleado->fecha_contratacion = $request->fecha_contratacion;
        $empleado->salario = $request->salario;
        $empleado->save();

        return json_encode(['empleado' => $empleado]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();

        $empleados = DB::table('empleados')
            ->orderBy('nombre')
            ->get();

        return json_encode(['empleados' => $empleados]);
    }
}
