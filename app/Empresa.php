<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $table = 'empresas';
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    public function indicadores()
    {
        return $this->hasMany(EmpresaIndicador::class);
    }
}
