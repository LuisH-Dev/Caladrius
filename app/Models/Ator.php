<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    protected $table = 'atores';

    protected $fillable = [
        'nome',
        'nacionalidade_id',
        'data_nascimento',
        'inicio_atividades'
    ];

    public function nacionalidade()
    {
        return $this->belongsTo("App\Models\Nacionalidade");
    }
}
