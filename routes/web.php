<?php

use App\Http\Controllers\{UserController};
use App\Http\Controllers\{LoginController};
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

Route::get('/', [UserController::class, 'landing'])->name('landing');

Route::get('/login', function () {
    return view('login');
})->middleware('guest')->name('login');

Route::post('/postLogin',[LoginController::class,'postLogin'])->name('postLogin');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('/voting', [UserController::class, 'voting'])->name('voting');

    Route::put('/{user:id}/{pilihan}/vote', [UserController::class, 'vote'])->name('vote');
    Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
});

