<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    use HasFactory;

    /**
     * Get the empleado that owns the beneficio.
     */
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    protected $table = 'beneficios';
    protected $primaryKey = 'id';
    protected $fillable = ['empleado_id', 'tipo', 'detalles'];
}
