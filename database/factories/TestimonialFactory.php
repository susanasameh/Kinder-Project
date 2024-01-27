<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        //generates actual image into local server using faker provider
        $fakerFileName = $this->faker->image("public/assets/images", 100, 100);

        return [
            'name' => fake()->name(),
            'profession'=>fake()->word(),
            'description'=>fake()->sentence(),
            // 'image'=>fake()->imageUrl(360, 360, 'animals', true, 'dogs', true),
            // 'image' => basename($this->faker->image("public/assets/images", 800, 600)),
            'image'=>basename($fakerFileName),
            'published'=>fake()->numberBetween(0, 1),


        ];
    }
}
