<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaIndicador extends Model
{
    //

    protected $table = 'empresa_indicador';
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
    public function indicador()
    {
        return $this->belongsTo(Indicador::class);
    }
}
