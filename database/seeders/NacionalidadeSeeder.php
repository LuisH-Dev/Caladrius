<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nacionalidade;

class NacionalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nacionalidade::create(['descricao' => 'Brasileira']);
        Nacionalidade::create(['descricao' => 'Argentina']);
        Nacionalidade::create(['descricao' => 'Paraguai']);
        Nacionalidade::create(['descricao' => 'Uruguaia']);
        Nacionalidade::create(['descricao' => 'Chilena']);
        Nacionalidade::create(['descricao' => 'Boliviana']);
        Nacionalidade::create(['descricao' => 'Colombiana']);
        Nacionalidade::create(['descricao' => 'Peruana']);
        Nacionalidade::create(['descricao' => 'Venezuelana']);
        Nacionalidade::create(['descricao' => 'Equatoriana']);
        Nacionalidade::create(['descricao' => 'Espanhola']);
        Nacionalidade::create(['descricao' => 'Portuguesa']);
        Nacionalidade::create(['descricao' => 'Francesa']);
        Nacionalidade::create(['descricao' => 'Alemã']);
        Nacionalidade::create(['descricao' => 'Italiana']);
        Nacionalidade::create(['descricao' => 'Britânica']);
        Nacionalidade::create(['descricao' => 'Irlandesa']);
        Nacionalidade::create(['descricao' => 'Sueca']);
        Nacionalidade::create(['descricao' => 'Norueguesa']);
        Nacionalidade::create(['descricao' => 'Dinamarquesa']);
        Nacionalidade::create(['descricao' => 'Finlandesa']);
        Nacionalidade::create(['descricao' => 'Holandesa']);
        Nacionalidade::create(['descricao' => 'Belga']);
        Nacionalidade::create(['descricao' => 'Austríaca']);
        Nacionalidade::create(['descricao' => 'Suíça']);
        Nacionalidade::create(['descricao' => 'Australiana']);
        Nacionalidade::create(['descricao' => 'Neozelandesa']);
        Nacionalidade::create(['descricao' => 'Sul-africana']);
        Nacionalidade::create(['descricao' => 'Nigeriana']);
        Nacionalidade::create(['descricao' => 'Egípcia']);
        Nacionalidade::create(['descricao' => 'Marroquina']);
        Nacionalidade::create(['descricao' => 'Turca']);
        Nacionalidade::create(['descricao' => 'Iraniana']);
        Nacionalidade::create(['descricao' => 'Afegã']);
        Nacionalidade::create(['descricao' => 'Indiana']);
        Nacionalidade::create(['descricao' => 'Paquistanesa']);
        Nacionalidade::create(['descricao' => 'Bangladeshi']);
        Nacionalidade::create(['descricao' => 'Nepalesa']);
        Nacionalidade::create(['descricao' => 'Tailandesa']);

    }
}
