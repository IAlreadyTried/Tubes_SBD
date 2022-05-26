<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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
Route::get('/about', function () {
    return view('about');
});
Route::get('/newspress', function () {
    return view('newspress');
});
Route::get('/community', function () {
    return view('community');
});
Route::get('/inilines', function () {
    return view('inilines');
});

Route::get('/', [LocationController::class, 'Data']);
Route::get('/testing', [LocationController::class, 'Data']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/registrasi', [RegisterController::class, 'registerkan']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/loginkan', [LoginController::class, 'loginkan']);

Route::get('/logout', [LoginController::class, 'logoutkan']);








