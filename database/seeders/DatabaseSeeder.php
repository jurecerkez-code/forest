<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Trip;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 users
        User::factory(10)
            ->has(
                // Each user has 3 trips
                Trip::factory(3)
                    ->has(
                        // Each trip has 2 comments
                        Comment::factory(2)
                    )
            )
            ->create();
    }
}
