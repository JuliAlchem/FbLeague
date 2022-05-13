<?php

namespace Database\Factories;

use App\Models\Team;
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
    public function definition()
    {
        return [

            'date' => $this->faker->date(),
            'team1_id' => Team::all()->random()->id,
            'team1_result' => $this->faker->randomDigit([1,25]),
            'team2_id' => Team::all()->random()->id,
            'team2_result' => $this->faker->randomDigit([1,25]),
        ];
    }
}
