<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'filmes';

    protected $fillable = [
        'titulo',
        'preco',
    ];

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'pedido_filme')->withPivot('quantidade');
    }

}
