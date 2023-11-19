<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeuanganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('keuangan', KeuanganController::class);

Route::get('/', function () {
    return view('main.main');
});

Route::get('/auth', function () {
    return view('auth.auth');
});
Route::get('/test', function () {
    return view('test');
});