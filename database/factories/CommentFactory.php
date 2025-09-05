<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'trip_id' => \App\Models\Trip::factory(),  // each comment belongs to a trip
            'user_id' => \App\Models\User::factory(),  // and is written by a user
            'comment' => fake()->sentence(),           // random fake comment
        ];
    }
}
