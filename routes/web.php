<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/login', function () {
    return view('login.login');
})->name('login');


Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('landing');
Route::get('/comingsoon', [App\Http\Controllers\ComingsoonController::class, 'comingsoon'])->name('comingsoon');

// Tiket
Route::get('/tiket', [App\Http\Controllers\TiketController::class, 'tiket'])->name('tiket');
Route::post('/tiket', [App\Http\Controllers\OrderController::class, 'store'])->name('tiket');
Route::get('/detail-order/{order}', [App\Http\Controllers\OrderController::class, 'show'])->name('detail-order');
Route::post('/detail-order/{order}', [App\Http\Controllers\OrderController::class, 'payment']);




Auth::routes();


// Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// User Manajemen
Route::get('/user-manajemen', [App\Http\Controllers\ManajemenController::class, 'index'])->name('user-manajemen');
Route::patch('/user-manajemen/{user}', [App\Http\Controllers\ManajemenController::class, 'update'])->name('update-user-manajemen');
Route::post('/user-manajemen', [App\Http\Controllers\ManajemenController::class, 'store'])->name('user-manajemen');
Route::delete('/user-manajemen/{user}', [App\Http\Controllers\ManajemenController::class, 'destroy'])->name('destroy-user-manajemen');
Route::get('/user-manajemen/{user}/edit', [App\Http\Controllers\ManajemenController::class, 'edit'])->name('edit-user-manajemen');
Route::get('/user-manajemen/create', [App\Http\Controllers\ManajemenController::class, 'create'])->name('user-manajemen-create');



// Tiket