<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        //generates actual image into local server using faker provider
        $fakerFileName = $this->faker->image("public/assets/images", 400, 700);

        return [
            'TeachersName'=>fake()->name(),
            'designation'=>fake()->date('Y_m_d'),
            'facebook'=>fake()->email(),
            'twitter'=>fake()->email(),
            'instagram'=>fake()->email(),
            // 'image'=>fake()->imageUrl(360, 360, 'animals', true, 'dogs', true),
            'image'=>basename($fakerFileName),
            'published'=>fake()->numberBetween(0, 1),
        ];
    }
}
