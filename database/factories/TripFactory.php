<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = fake()->dateTimeBetween('-1 month', 'now');
        $end = (clone $start)->modify('+' . rand(20, 120) . ' minutes');
        return [
            'user_id' => \App\Models\User::factory(), // each trip belongs to a user
            'start_time' => $start,
            'end_time' => $end,
            'duration' => $end->getTimestamp() - $start->getTimestamp(),
            'voice_recording' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3', // demo audio
            'satisfaction' => fake()->numberBetween(1, 5),
        ];
    }
}
