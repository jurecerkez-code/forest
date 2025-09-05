<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class TripFactory extends Factory
{
    public function definition(): array
    {
        $start = fake()->dateTimeBetween('-1 month', 'now');
        $end = (clone $start)->modify('+' . rand(20, 120) . ' minutes');

        return [
            'user_id' => User::factory(), // each trip belongs to a user
            'start_time' => $start,
            'end_time' => $end,
            'duration' => ($end->getTimestamp() - $start->getTimestamp()) / 60, // minutes
            'voice_recording' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3',
            'satisfaction' => fake()->numberBetween(1, 5),
        ];
    }
}
