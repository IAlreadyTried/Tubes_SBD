<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stasiun;

class StasiunController extends Controller
{
    public function Data() {
        return view('home', [
            'datanya' => Stasiun::all()
        ]);
    }

}
