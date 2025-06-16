<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PedidoFilme extends Pivot
{
    protected $table = 'pedido_filme';

    protected $fillable = [
        'pedido_id',
        'filme_id',
        'quantidade',
    ];
}
