<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    use HasFactory;

    /**
     * The empleados that belong to the capacitacion.
     */
    public function empleados()
    {
        return $this->belongsToMany(Empleado::class, 'capacitacion_empleado');
    }

    protected $table = 'capacitaciones';
    protected $primaryKey = 'id';
    protected $fillable = ['tema', 'fecha', 'costo'];
}
