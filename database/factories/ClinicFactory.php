<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clinic>
 */
class ClinicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'email' => fake()->email(),
            'phone' => '999 99 99 99',
            'phone_2' => '888 88 88 88',
            'adress' => 'Calle ' . fake()->name() . '1058',
            'description' => 'some description'
        ];
    }
}
