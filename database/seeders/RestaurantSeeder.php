<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurant::factory()->count(5)->create();

        // $clientes = Client::all();
        // $clientes->each(function($cliente) {
        //     Restaurant::factory()->count(5)->create([
        //         'client_id' => $cliente->id
        //     ]);
        // });
    }
}
