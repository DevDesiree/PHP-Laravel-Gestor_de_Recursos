<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateResourceController;
// use App\Http\Controllers\HomeController;


// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [CreateResourceController::class, 'index'])->name('index');    

Route::group(['prefix' => 'resources'], function () {
    // Route::get('/', HomeController::class)->name('home');
    Route::get('/create', [CreateResourceController::class, 'create'])->name('resources.create');
    Route::post('/', [CreateResourceController::class, 'store'])->name('resources.store');
    Route::get('/{resource}', [CreateResourceController::class, 'show'])->name('resources.show'); 
    Route::get('/{resource}/edit', [CreateResourceController::class, 'edit'])->name('resources.edit'); 
    Route::put('/{resource}', [CreateResourceController::class, 'update'])->name('resources.update');
    Route::delete('/{resource}', [CreateResourceController::class, 'destroy'])->name('resources.destroy');
});
Route::view('/navbar', 'navbar');