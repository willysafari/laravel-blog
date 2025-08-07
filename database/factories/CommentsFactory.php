<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comments;
use App\Models\User;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // add your default values here
            'body' => $this->faker->paragraph,
            'user_id' => User::factory(), // Assuming you have a User factory
            'post_id' => Post::factory(), // Assuming you have a Post factory
        
        ];
    }
}
