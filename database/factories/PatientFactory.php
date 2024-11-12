<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'identification' => fake()->randomNumber(9, true),
            'phone' => fake()->randomNumber(9, true), 
            'adress' => 'Calle ' . fake()->name() . '1058',
            'birth' => '1988-04-04',
            'description' => fake()->paragraph(2),
            'status' => false
            
        ];
    }
}