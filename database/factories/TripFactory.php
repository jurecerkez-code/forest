<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Trip;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    protected $model = Trip::class;

    public function definition(): array
    {
        return [
            'user_id' => 1,
            'start_time' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'end_time' => $this->faker->dateTimeBetween('now', '+1 month'),
            'duration' => $this->faker->numberBetween(10, 300),
            'voice_recording' => $this->faker->optional()->url(),
            'satisfaction' => $this->faker->numberBetween(1, 5),
        ];
    }
}
