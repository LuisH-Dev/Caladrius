<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = [
        'id_usuario',
        'id_vendedor',
        'id_jogo',
        'id_livro',
        'id_filme',
    ];
}
