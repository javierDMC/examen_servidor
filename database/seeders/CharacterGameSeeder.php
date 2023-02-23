<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Character;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CharacterGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = Game::all();

        Character::all()->each(function ($character) use ($games){
            $character->games()->attach(
                $games->random(rand(1,3))->pluck('id')->toArray()
            );
        });
    }
}
