<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_ingrediente extends Model
{
    protected $table = 'tipo_ingrediente';
    protected $fillable = ['nome', 'descricao'];
}
