<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassRoom>
 */
class ClassRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

         //generates actual image into local server using faker provider
         $fakerFileName = $this->faker->image("public/assets/images", 400, 400);

        return [
            'classesName'=>fake()->word(),
            // 'price'=>fake()->randomFloat(),
             'price'=>fake()->numberBetween(150,300),
             'classesAge'=>fake()->numberBetween(1, 10),
            'time'=>fake()->time(),
             'capacity'=> fake()->numberBetween(1, 10),
            //  'image'=> fake()->imageUrl(360, 360, 'animals', true, 'dogs', true),
             //save image name into database
             'image'=>basename($fakerFileName),
             'published'=>fake()->numberBetween(0, 1),
             'teacher_id'=>fake()->numberBetween(1, 5),

        ];
    }
}
