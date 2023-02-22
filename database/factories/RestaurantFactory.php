<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'cadena' => $this->faker->sentence(1, 2),
            'provider_id' => Provider::all()->random()->id,
        ];
    }
}
