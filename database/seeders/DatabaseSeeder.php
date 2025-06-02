<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
            NacionalidadeSeeder::class,
            // UserSeeder::class,
            // AtoresSeeder::class,
            // FilmesSeeder::class,
            // GenerosSeeder::class,
            // AtorFilmeSeeder::class,
        ]);
    }
}
