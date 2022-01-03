<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //generate data 
        return [
            //
            'title' => $this->faker->word,
            'category' => $this->faker->text(50),
            'description' => $this->faker->text(200),
            'author' => $this->faker->name,
            'description' => $this->faker->text(200),
            'signees' => $this->faker->numberBetween(0, 100000),
        ];
    }
}
