<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Trip;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        $trips = Trip::all();

        foreach ($trips as $trip) {
            Comment::factory()->count(3)->create([
                'trip_id' => $trip->id,
            ]);
        }
    }
}
