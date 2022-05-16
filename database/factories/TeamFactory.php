<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->word(15);

        return [
            'name' => $name,
            'played' =>$this->faker->randomDigit([1,25]),
            'won' =>$this->faker->randomDigit([1,25]),
            'drawn' =>$this->faker->randomDigit([1,25]),
            'lost' =>$this->faker->randomDigit([1,25]),
            'points' =>$this->faker->randomDigit([1,25]),
        ];
    }
}
