<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    //

    protected $table = 'dimensiones';
    public function indicadores()
    {
        return $this->hasMany(Indicador::class);
    }
}
