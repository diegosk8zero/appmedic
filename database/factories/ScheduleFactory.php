<?php

namespace Database\Factories;

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

// $table->date('date');
// $table->dateTime('initiate');
// $table->dateTime('finish');
// $table->boolean('status');
// $table->text('description');