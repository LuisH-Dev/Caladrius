<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PedidoLivro extends Pivot
{
    protected $table = 'pedido_livro';

    protected $fillable = [
        'pedido_id',
        'livro_id',
        'quantidade',
    ];
}
