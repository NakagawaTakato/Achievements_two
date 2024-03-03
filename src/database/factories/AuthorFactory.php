<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => 1,
            'gender' => $this->faker->numberBetween(1,2),
            'class-name' => $this->faker->word,
            'name' => $this->faker->name,
            'image' => $this->faker->imageUrl(),
            'city' => $this->faker->city,
            'shop' => $this->faker->company
        ];
    }
}
