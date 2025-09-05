<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        // show all trips
        $trips = Trip::with('user', 'comments')->get();
        return response()->json($trips);
    }

    public function show(Trip $trip)
    {
        // show one trip by id
        $trip->load('user', 'comments');
        return response()->json($trip);
    }
}
