<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreateResourceController;
use App\Http\Controllers\ExtraResourceController;
use App\Http\Controllers\ResourceTypeController;
use App\Http\Controllers\ThemeController;
use GuzzleHttp\Promise\Create;
/*
//Route::get('/' , HomeController::class)->name('home');
Route::get('/', [HomeController::class, 'home']);

Route::controller(CreateResourceController::class)->group(function(){

Route::get('resources', 'index')->name('resources.index');

Route::get('resources/create', 'create')->name('resources.create');

Route::post('resources', 'store')->name('resources.store');

Route::get('resources/{resource}', 'show')->name('resources.show');

Route::get('resources/{resource}', 'edit')->name('resources.edit');

Route::put('resources/{resource}', 'update')->name('resources.update');

Route::delete('resources/{resource}', 'destroy')->name('resources.destroy');

}); */

Route::group(['prefix' => 'resources'], function () {
    Route::get('/', [CreateResourceController::class, 'index'])->name('resources.index');
    Route::get('/create', [CreateResourceController::class, 'create'])->name('resources.create');
    Route::post('/', [CreateResourceController::class, 'store'])->name('resources.store');
    Route::get('/{resource}', [CreateResourceController::class, 'show'])->name('resources.show');
    Route::get('/{resource}/edit', [CreateResourceController::class, 'edit'])->name('resources.edit');
    Route::put('/{resource}', [CreateResourceController::class, 'update'])->name('resources.update');
    Route::delete('/{resource}', [CreateResourceController::class, 'destroy'])->name('resources.destroy');
});