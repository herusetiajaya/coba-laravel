<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 2)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(1, 1),
            'body' => $this->faker->paragraph(mt_rand(20, 20)),
            'user_id' => mt_rand(1, 5),
            'category_id' => mt_rand(1, 4)
        ];
    }
}
