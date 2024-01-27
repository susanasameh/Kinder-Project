<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ClassRoom;
use App\Models\Teacher;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Testimonial;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(5)->create();
        Teacher::factory(5)->create();
        Testimonial::factory(5)->create();
        ClassRoom::factory(5)->create();
    }
}
