<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\SupportController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('/support/store', [SupportTicketController::class, 'store'])->name('support.store');

//Test pages
// Route::view('/', 'test.landing');
Route::view('/shop', 'test.shop');
Route::view('/about', 'test.about');
Route::view('/contact', 'test.contact');
Route::view('/cart', 'test.cart');


Route::post('/support', [SupportController::class, 'store'])->name('support.store');


