<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Trip;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'trip_id' => Trip::factory(), // each comment belongs to a trip
            'comment' => fake()->sentence(),
        ];
    }
}
