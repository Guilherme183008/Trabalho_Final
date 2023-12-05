<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredientes extends Model
{
    protected $table = 'ingredientes';
    protected $fillable = ['nome', 'qnt_un', 'valor', 'qnt_min', 'tipo_ingrediente_id'];

    public function compras()
    {
        return $this->hasMany(Compras::class, 'ingredientes_id');
    }
}
