<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    /**
     * Get the departamento that owns the empleado.
     */
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    /**
     * Get the nominas for the empleado.
     */
    public function nominas()
    {
        return $this->hasMany(Nomina::class);
    }

    /**
     * Get the beneficios for the empleado.
     */
    public function beneficios()
    {
        return $this->hasMany(Beneficio::class);
    }

    /**
     * The capacitaciones that belong to the empleado.
     */
    public function capacitaciones()
    {
        return $this->belongsToMany(Capacitacion::class, 'capacitacion_empleado');
    }

    protected $table = 'empleados';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre', 
        'apellido', 
        'departamento_id', 
        'puesto', 
        'fecha_contratacion', 
        'salario'
    ];
}
