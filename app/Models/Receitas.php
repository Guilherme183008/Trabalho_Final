<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receitas extends Model
{
    protected $table = 'receitas';
    protected $fillable = ['nome', 'tipo', 'tempo_preparo', 'modo_preparo', 'qnt_ingrediente', 'valor', 'ingredientes_id'];
}
