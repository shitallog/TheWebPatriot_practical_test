<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         'name' => $this->faker->name(),
        'date_of_birth' => $this->faker->date_of_birth(),
        'date_of_joining' => $this->faker->date_of_joining(),
        'gender' => $this->faker->gender(),
        'designation' => $this->faker->designation(),
        'manager' => $this->faker->manager(),
        'employee_picture' => $this->faker->employee_picture(),
        'password'  => $this->faker->password(),
        'email'  => $this->faker->unique()->safeEmail(),
        ];
    }
}
