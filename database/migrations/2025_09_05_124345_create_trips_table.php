<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // 🔑 link to users
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->integer('duration'); // in minutes
            $table->string('voice_recording')->nullable();
            $table->tinyInteger('satisfaction'); // 1–5
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
