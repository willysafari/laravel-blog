<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // //
            // 'name' => $this->faker->word,
            // 'slug' => $this->faker->slug,
            'name' => $this->faker->unique()->word(), // Ensures unique category names
            'slug' => $this->faker->unique()->sentence(3), // Also ensure unique slugs
            
    
        ];
    }
}
