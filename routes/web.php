<?php

use App\Http\Controllers\AnnonceController;
use Illuminate\Support\Facades\Route;

Route::resource('annonces', AnnonceController::class);
Route::get('/dashboard', [AnnonceController::class, 'dashboard'])->name('dashboard');
Route::get('/', [AnnonceController::class, 'home'])->name('home');
Route::get('/about', function(){
    return view('annonces.about');
})->name('about');
?>