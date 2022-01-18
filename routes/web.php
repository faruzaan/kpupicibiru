<?php

use App\Http\Controllers\{UserController};
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

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

// Route::middleware('auth')->group(function () { buka kalau udah ada sistem loginnya
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('/voting', [UserController::class, 'voting'])->name('voting');

    Route::put('/{user:id}/{pilihan}/vote', [UserController::class, 'vote'])->name('vote');
// });

