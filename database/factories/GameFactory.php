<?php

namespace Database\Factories;

use App\Models\Developer;
use App\Models\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(1,3),
            'year' => $this->faker->numberBetween(1958, 2023),
            'developer_id' => Developer::all()->random()->id,
        ];
    }
}
