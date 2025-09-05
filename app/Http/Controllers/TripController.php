<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        // Load trips with their user and comments
        $trips = Trip::with('user', 'comments')->get();

        // Send data to the view
        return view('trips.index', compact('trips'));
    }
}
