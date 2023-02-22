<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = Restaurant::all();

        Client::all()->each(function ($client) use ($restaurants){
            $client->restaurants()->attach(
                $restaurants->random(rand(1,3))->pluck('id')->toArray()
            );
        });
    }
}
