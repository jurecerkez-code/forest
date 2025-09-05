<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::with('user', 'comments')->get();
        return view('trips.index', compact('trips'));
    }

    public function show($id)
    {
        $trip = Trip::with('user', 'comments.user')->findOrFail($id);
        return view('trips.show', compact('trip'));
    }
}
