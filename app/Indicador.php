<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    //
    protected $table = 'indicadores';
    public function empresa_indicador()
    {
        return $this->hasMany(EmpresaIndicador::class);
    }
}
