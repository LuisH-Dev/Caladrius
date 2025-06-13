<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $table = 'jogos';

    protected $fillable = [
        'nome',
        'desenvolvedor',
        'publicadora',
        'ano_lancamento',
        'genero',
        'preco',
    ];
}
