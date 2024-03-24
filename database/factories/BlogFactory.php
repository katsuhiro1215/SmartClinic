<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    public function definition(): array
    {
        return [
            'blog_category_id' => BlogCategory::all()->random()->id,
            'title' => fake()->lastName(),
            'slug' => fake()->firstName(),
            'content' => fake()->realText(),
        ];
    }
}
