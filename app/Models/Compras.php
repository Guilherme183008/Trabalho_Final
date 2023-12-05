<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table = 'compras';
    protected $fillable = ['quantidade', 'ingredientes_id'];

    public function ingrediente()
    {
        return $this->belongsTo(Ingredientes::class, 'ingredientes_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::saved(function ($compra) {
            $ingrediente = $compra->ingrediente;
            if ($ingrediente) {
                $ingrediente->increment('qnt_un', $compra->quantidade);
            }
        });
    }
}


