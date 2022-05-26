<?php

use App\Http\Controllers\StasiunController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/newspress', function () {
    return view('newspress');
});
Route::get('/community', function () {
    return view('community');
});
Route::get('/lines', function () {
    return view('lines');
});

Route::get('/', [StasiunController::class, 'Data']);
Route::get('/testing', [StasiunController::class, 'Data']);
