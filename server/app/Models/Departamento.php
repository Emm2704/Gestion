<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    /**
     * Get the empleados for the departamento.
     */
    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }

    protected $table = 'departamentos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'ubicacion'];
}
