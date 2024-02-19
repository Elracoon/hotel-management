<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
    Route::get('/hotel', [HotelController::class, 'create'])->name('hotels.create');
    Route::post('/hotel', [HotelController::class, 'store'])->name('hotels.store');
    Route::get('/hotel/{id}/edit', [HotelController::class, 'edit'])->name('hotels.edit');
    Route::put('/hotel/{id}/update', [HotelController::class, 'update'])->name('hotels.update');
    Route::delete('/hotel', [HotelController::class, 'destroy'])->name('hotels.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
