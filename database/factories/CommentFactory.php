<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'trip_id' => Trip::factory(),
            'comment' => $this->faker->sentence(),
        ];
    }
}
