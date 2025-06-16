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

    public function jogos()
    {
        return $this->belongsToMany(Jogo::class, 'pedido_jogo')
                    ->withPivot('quantidade');
    }
    
    public function filmes()
    {
        return $this->belongsToMany(Filme::class, 'pedido_filme')
                    ->withPivot('quantidade');
    }
    
    public function livros()
    {
        return $this->belongsToMany(Livro::class, 'pedido_livro')
                    ->withPivot('quantidade');
    }

}
