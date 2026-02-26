<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->realText(rand(10,40));
        $shortTitle = Str::length($title) > 30 ? Str::substr($title, 0, 30) . '...' : $title;
        $createdAt = $this->faker->dateTimeBetween('-30 days', '-1 days');

        return [
            'title' => $title,
            'short_title' => $shortTitle,
            'created_at' => $createdAt,
            'author_id' => $this->faker->numberBetween(1,10),
            'updated_at' => $createdAt,
            'description' => $this->faker->realText(rand(100,500)),
        ];
    }
}
