<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    use HasFactory;

    /**
     * Get the empleado that owns the nomina.
     */
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    protected $table = 'nominas';
    protected $primaryKey = 'id';
    protected $fillable = ['empleado_id', 'periodo', 'monto_total'];
}
