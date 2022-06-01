<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DirectionsController;
use App\Http\Controllers\LinesController;
use Illuminate\Support\Facades\Route;
use App\Models\Locations;
use App\Models\Penggunas;
//session_start();

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
    return view('inilines', [
        'testing' => 'oghe'
    ]);
});

Route::get('/kumpul1', function () {
    return view('kumpul1');
});
Route::get('/kumpul2', function () {
    return view('kumpul2');
});

Route::get('/appsupport', function () {
    return view('appsuport');
});
Route::get('/testingdulu', function () {
    return view('testingdulu');
});

Route::get('/', [SessionController::class, 'index']);
Route::get('/testing', [LocationController::class, 'Data']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/registrasi', [RegisterController::class, 'registerkan']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/loginkan', [LoginController::class, 'loginkan']);

Route::get('/logout', [LoginController::class, 'logoutkan']);

Route::get('/dash', [AdminController::class, 'index'])->name('indexadmin');
Route::get('/dash/delete{id}', [AdminController::class, 'destroy'])->name('deleteadmin');
Route::get('/dir', [DirectionsController::class, 'index'])->name('indexlokasi');
Route::get('/dir/delete{id}', [DirectionsController::class, 'destroy'])->name('deletelokasi');
Route::get('/line', [LinesController::class, 'index']); //Masih PENDING

