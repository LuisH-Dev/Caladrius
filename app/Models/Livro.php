<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livros';

    protected $fillable = [
        'titulo',
        'preco',
    ];

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'pedido_livro')->withPivot('quantidade');
    }

}
