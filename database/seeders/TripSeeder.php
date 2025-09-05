<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    public function run(): void
    {
        Trip::factory()->count(5)->create(); // generate 5 trips
    }
}
