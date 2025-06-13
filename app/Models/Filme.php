<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'filmes';

    protected $fillable = [
        'titulo',
        'diretor',
        'produtora',
        'ano_lancamento',
        'genero',
        'preco',
    ];
}
