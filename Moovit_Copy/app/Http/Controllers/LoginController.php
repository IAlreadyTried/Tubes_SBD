<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;



session_start();
class LoginController extends Controller
{

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */

    public function index(){

        return view('login', [
            'title' => "Login"
        ]);
    }

    public function index1(){

        return view('login1', [
            'title' => "Login"
        ]);
    }

    public function loginkan(Request $request)
    {
        $usernya = Pengguna::where('username',$request->username)->first();
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Hash::check($request->password, $usernya->password)) {
            $_SESSION["username"] = "$request->username";
            return redirect()->intended('/');
        } else {
            return back()->with('loginfail', 'Login Fail, Try again');
        }
    }

    public function loginkanadmin(Request $request)
    {
        $usernya = Admin::where('username',$request->username)->first();
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Hash::check($request->password, $usernya->password)) {
            $_SESSION["username"] = "$request->username";
            return redirect()->intended('/dash');
        } else {
            return back()->with('loginfail', 'Login Fail, Try again');
        }
    }
    
    public function logoutkan(Request $request)
    {
        session_destroy();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    
}

