<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'trip_id'];

    // Each comment belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Each comment belongs to a trip
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
