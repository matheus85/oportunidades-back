<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StatusSeeder::class,
            PerfilSeeder::class,
            UserSeeder::class,
        ]);

        Artisan::call('passport:install', ['--force' => '']);
    }
}
