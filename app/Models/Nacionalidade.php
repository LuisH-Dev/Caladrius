<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nacionalidade extends Model
{
    protected $table = 'nacionalidades';
    protected $fillable = ['descricao'];

    public function atores()
    {
        return $this->hasMany("App\Models\Ator");
    }
}
