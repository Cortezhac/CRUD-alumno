<?php

namespace Database\Seeders;

use App\Models\Grd_grado;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Grd_grado::create([
            'grd_nombre' => 'Primero'
        ]);
    }
}
