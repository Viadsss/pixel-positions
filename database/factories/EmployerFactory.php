<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $logos = [
            'logos/seed-1.jpeg',
            'logos/seed-2.jpeg',
            'logos/seed-3.jpeg',
            'logos/seed-4.jpeg',
            'logos/seed-5.jpeg',
            'logos/seed-6.jpeg',
            'logos/seed-7.jpeg',
            'logos/seed-8.png',
            'logos/seed-9.jpeg',
            'logos/seed-10.jpeg',
            'logos/seed-11.jpeg',
        ];

        return [
            'name' => fake()->name(),
            'logo' => $logos[array_rand($logos)],
            'user_id' => User::factory(),
        ];
    }
}
