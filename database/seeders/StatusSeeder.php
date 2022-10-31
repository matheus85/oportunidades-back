<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'id'   => 1,
            'name' => 'Novo',
        ]);

        Status::create([
            'id'   => 2,
            'name' => 'Aprovado',
        ]);

        Status::create([
            'id'   => 3,
            'name' => 'Recusado',
        ]);
    }
}
