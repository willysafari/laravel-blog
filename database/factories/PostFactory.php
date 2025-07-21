<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Post;
use \App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence,
            'excerpt' => '<p>'.implode('<p></p>',$this->faker->paragraphs(2)).'</p>', // Assuming you want an excerpt
            'body' => '<p>'.implode('<p></p>',$this->faker->paragraphs(6)).'</p>',
            'user_id' => User::factory(), // Assuming you have a User factory
            'category_id' => Category::factory(), // Assuming you have a Category factory
            'slug' => $this->faker->slug,
        ];
    }
}