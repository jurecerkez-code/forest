<?php

namespace App\Http\Controllers;

use App\Models\Trip;

class TripController extends Controller
{
    public function index()
    {
        // Load trips with their user and comments
        $trips = Trip::with(['user', 'comments'])->get();

        return view('trips.index', compact('trips'));
    }
}
