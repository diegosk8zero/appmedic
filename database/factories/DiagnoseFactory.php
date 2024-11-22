<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Medic;
use App\Models\Patient;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diagnose>
 */
class DiagnoseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'medic_id' => Medic::factory()->create(),
            'patient_id' => Patient::factory()->create(),
            'consult_time' => fake()->time->dateTimeBetween('+1 week', '+2 week'),
            'description' => fake()->paragraph(2)
        ];
    }
}


// $table->dateTime('consult_time');
// $table->text('description');