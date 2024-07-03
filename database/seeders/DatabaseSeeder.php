<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Permette di usare direttamente => php artisan db:seed
        $this->call([
            GamesTableSeeder::class
        ]);
    }
}
