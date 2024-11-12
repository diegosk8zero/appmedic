<?php

namespace Database\Factories;
use App\Models\Medic;
use App\Models\Patient;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'initiate' => fake()->dateTimeBetween('+1 week', '+2 week'),
            'finish' => fake()->dateTimeBetween('+1 week', '+2 week'),
            'status' => false,
            'description' => fake()->paragraph(2),
            'medic_id' => Medic::factory()->create(),
            'patient_id' => Patient::factory()->create()
        ];
    }
}

// $table->date('date');
// $table->dateTime('initiate');
// $table->dateTime('finish');
// $table->boolean('status');
// $table->text('description');
