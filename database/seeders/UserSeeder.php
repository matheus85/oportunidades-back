<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              => 'Cliente Um',
            'email'             => 'cliente1@teste.com',
            'perfil_id'         => 1,
            'password'          => Hash::make('123456'),
            'email_verified_at' => Carbon::now()
        ]);

        User::create([
            'name'              => 'Cliente Dois',
            'email'             => 'cliente2@teste.com',
            'perfil_id'         => 1,
            'password'          => Hash::make('123456'),
            'email_verified_at' => Carbon::now()
        ]);

        User::create([
            'name'              => 'Vendedor Um',
            'email'             => 'vendedor1@teste.com',
            'perfil_id'         => 2,
            'password'          => Hash::make('123456'),
            'email_verified_at' => Carbon::now()
        ]);

        User::create([
            'name'              => 'Vendedor Dois',
            'email'             => 'vendedor2@teste.com',
            'perfil_id'         => 2,
            'password'          => Hash::make('123456'),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
