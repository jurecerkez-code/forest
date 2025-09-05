<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'trip_id' => \App\Models\Trip::factory(),   // create a trip automatically
            'user_id' => \App\Models\User::factory(),   // create a user automatically
            'comment' => fake()->sentence(),            // random comment
        ];
    }
}
