<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perfil;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perfil::create([
            'id'   => 1,
            'name' => 'Cliente',
        ]);

        Perfil::create([
            'id'   => 2,
            'name' => 'Vendedor',
        ]);
    }
}
