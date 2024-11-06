<?php

namespace Database\Factories;
use App\Models\Medic;
use App\Models\Clinic;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medic>
 */
class MedicFactory extends Factory
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
            'email' => fake()->email(),
            'phone' => '999 99 99 99',
            'phone_2' => '888 88 88 88',
            'certification' => '123 456 789',
            'birth' => '1988-04-04',
            'description' => 'some description',
            'clinic_id' => Clinic::factory()->create()
        ];
    }
}
