<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function Data() {
        return view('home', [
            'datanya' => Location::all()
        ]);
    }
}
