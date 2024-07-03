<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) { 

            $newRecord = new Game();
            $newRecord->name = "Max Payne";
            $newRecord->price = 9.99;
            $newRecord->release_year = 2001;
            $newRecord->cover_image = "https://image.api.playstation.com/cdn/EP1004/CUSA04488_00/wkULSyjvjH6xGS9juseLnkjmtG6VGlem.png?w=440";
            $newRecord->vote = 10;
            $newRecord->save();

        }
    }
}
