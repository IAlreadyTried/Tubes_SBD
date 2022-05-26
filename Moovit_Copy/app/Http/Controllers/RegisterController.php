<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){

        return view('register', [
            'title' => "Register"
        ]);

    }
    public function registerkan(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:1|max:12|unique:penggunas',
            'nama' => 'required|min:1|max:12',
            'email'=> 'required|email:dns|unique:penggunas',
            'password' => 'required|min:5|max:255'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        Pengguna::create([
            'email'=>$request->email,
            'username'=>$request->username,
            'nama'=>$request->nama,
            'password' => $validatedData['password']
        ]);

        return redirect('/')->with('success', 'Account created Successfully!');
    }
}
