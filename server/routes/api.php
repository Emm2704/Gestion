<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\DepartamentoController;
use App\Http\Controllers\Api\EmpleadoController;
use App\Http\Controllers\Api\NominaController;
use App\Http\Controllers\Api\BeneficioController;
use App\Http\Controllers\Api\CapacitacionController;
use App\Http\Controllers\Api\CapacitacionEmpleadoController;

// Departamentos APi rutas
Route::get('/departamentos', [DepartamentoController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos');
Route::delete('/departamentos/{Departamento}', [DepartamentoController::class, 'destroy'])->name('departamentos.destroy');
Route::get('/departamentos/{Departamento}', [DepartamentoController::class, 'show'])->name('departamentos.show');
Route::put('/departamentos/{Departamento}', [DepartamentoController::class, 'update'])->name('departamentos.update');

// Empleados API rutas
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados');
Route::post('/empleados', [EmpleadoController::class, 'store'])->name('empleados.store');
Route::delete('/empleados/{Empleado}', [EmpleadoController::class, 'destroy'])->name('empleados.destroy');
Route::get('/empleados/{Empleado}', [EmpleadoController::class, 'show'])->name('empleados.show');
Route::put('/empleados/{Empleado}', [EmpleadoController::class, 'update'])->name('empleados.update');

// Nominas API rutas
Route::get('/nominas', [NominaController::class, 'index'])->name('nominas');
Route::post('/nominas', [NominaController::class, 'store'])->name('nominas.store');
Route::delete('/nominas/{Nomina}', [NominaController::class, 'destroy'])->name('nominas.destroy');
Route::get('/nominas/{Nomina}', [NominaController::class, 'show'])->name('nominas.show');
Route::put('/nominas/{Nomina}', [NominaController::class, 'update'])->name('nominas.update');

// Beneficios API rutas
Route::get('/beneficios', [BeneficioController::class, 'index'])->name('beneficios');
Route::post('/beneficios', [BeneficioController::class, 'store'])->name('beneficios.store');
Route::delete('/beneficios/{Beneficio}', [BeneficioController::class, 'destroy'])->name('beneficios.destroy');
Route::get('/beneficios/{Beneficio}', [BeneficioController::class, 'show'])->name('beneficios.show');
Route::put('/beneficios/{Beneficio}', [BeneficioController::class, 'update'])->name('beneficios.update');

// Capacitaciones API rutas
Route::get('/capacitaciones', [CapacitacionController::class, 'index'])->name('capacitaciones');
Route::post('/capacitaciones', [CapacitacionController::class, 'store'])->name('capacitaciones.store');
Route::delete('/capacitaciones/{Capacitacion}', [CapacitacionController::class, 'destroy'])->name('capacitaciones.destroy');
Route::get('/capacitaciones/{Capacitacion}', [CapacitacionController::class, 'show'])->name('capacitaciones.show');
Route::put('/capacitaciones/{Capacitacion}', [CapacitacionController::class, 'update'])->name('capacitaciones.update');

// CapacitacionEmpleado API rutas
Route::get('/capacitacion_empleado', [CapacitacionEmpleadoController::class, 'index'])->name('capacitacion_empleado');
Route::post('/capacitacion_empleado', [CapacitacionEmpleadoController::class, 'store'])->name('capacitacion_empleado.store');
Route::delete('/capacitacion_empleado/{id}', [CapacitacionEmpleadoController::class, 'destroy'])->name('capacitacion_empleado.destroy');
Route::get('/capacitacion_empleado/{id}', [CapacitacionEmpleadoController::class, 'show'])->name('capacitacion_empleado.show');
Route::put('/capacitacion_empleado/{id}', [CapacitacionEmpleadoController::class, 'update'])->name('capacitacion_empleado.update');