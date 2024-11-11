<?php

namespace Database\Factories;
use App\Models\Medic;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expertise>
 */
class ExpertiseFactory extends Factory
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
            'description' => fake()->paragraph(2),
            'institute' => fake()->company(),
            'certification' => fake()->randomNumber(5, true),
            'medic_id' => Medic::factory()->create()
        ];
    }
}
