<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;


session_start();
class SessionController extends Controller
{
    public function index() {
        if(!isset($_SESSION['username'])){
            return redirect('/login');
        } else {
        return view('home', [
            'title' => "Home",
            'datanya' => Location::all(),
            'directions' => 'active',
            'lines' => ''
        ]);
    }   }
}
