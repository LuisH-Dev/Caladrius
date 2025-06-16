<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;
use App\Models\Vendedor;
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

    public function usuario()
    {   
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class, 'id_vendedor');
    }

    public function jogo()
    {
        return $this->belongsTo(Jogo::class, 'id_jogo');
    }
    public function filme()
    {
        return $this->belongsTo(Filme::class, 'id_vendedor');
    }

        public function livro()
    {
        return $this->belongsTo(Livro::class, 'id_vendedor');
    }
}
