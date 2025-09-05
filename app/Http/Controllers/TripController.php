<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    // List all trips
    public function index()
    {
        $trips = Trip::with('user')->latest()->paginate(10); 
        return view('trips.index', compact('trips'));
    }

    // Show single trip
    public function show(Trip $trip)
    {
        $trip->load(['user', 'comments.user']); // eager load relations
        return view('trips.show', compact('trip'));
    }
}
