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
            'name'              => 'Bruce Dickinson',
            'email'             => 'cliente1@teste.com',
            'perfil_id'         => 1,
            'password'          => Hash::make('123456'),
            'email_verified_at' => Carbon::now()
        ]);

        User::create([
            'name'              => 'Steve Harris',
            'email'             => 'cliente2@teste.com',
            'perfil_id'         => 1,
            'password'          => Hash::make('123456'),
            'email_verified_at' => Carbon::now()
        ]);

        User::create([
            'name'              => 'Adrian Smith',
            'email'             => 'cliente3@teste.com',
            'perfil_id'         => 1,
            'password'          => Hash::make('123456'),
            'email_verified_at' => Carbon::now()
        ]);

        User::create([
            'name'              => 'Dave Murray',
            'email'             => 'cliente4@teste.com',
            'perfil_id'         => 1,
            'password'          => Hash::make('123456'),
            'email_verified_at' => Carbon::now()
        ]);

        User::create([
            'name'              => 'Janick Gers',
            'email'             => 'cliente5@teste.com',
            'perfil_id'         => 1,
            'password'          => Hash::make('123456'),
            'email_verified_at' => Carbon::now()
        ]);

        User::create([
            'name'              => 'Nicko McBrain',
            'email'             => 'cliente6@teste.com',
            'perfil_id'         => 1,
            'password'          => Hash::make('123456'),
            'email_verified_at' => Carbon::now()
        ]);

        User::create([
            'name'              => 'João da Silva',
            'email'             => 'vendedor1@teste.com',
            'perfil_id'         => 2,
            'password'          => Hash::make('123456'),
            'email_verified_at' => Carbon::now()
        ]);

        User::create([
            'name'              => 'Maria Joaquina',
            'email'             => 'vendedor2@teste.com',
            'perfil_id'         => 2,
            'password'          => Hash::make('123456'),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
