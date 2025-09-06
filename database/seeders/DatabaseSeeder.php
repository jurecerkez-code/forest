<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Trip;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 5 users
        $users = User::factory(5)->create();

        // Each user creates 2 trips
        $users->each(function ($user) {
            $trips = Trip::factory(2)->create([
                'user_id' => $user->id,
            ]);

            // Add 3 comments to each trip
            $trips->each(function ($trip) use ($user) {
                Comment::factory(3)->create([
                    'trip_id' => $trip->id,
                    // Pick a random user for each comment
                    'user_id' => \App\Models\User::inRandomOrder()->first()->id,
                ]);
            });
        });
    }
}
