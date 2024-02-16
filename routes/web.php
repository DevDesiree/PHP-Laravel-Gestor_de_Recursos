<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateResourceController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'resources'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('resources.index');
    Route::get('/create', [CreateResourceController::class, 'create'])->name('resources.create');
    Route::post('/', [CreateResourceController::class, 'store'])->name('resources.store');
    Route::get('/{resource}', [CreateResourceController::class, 'show'])->name('resources.show'); // Esta ruta es para mostrar un recurso
    Route::get('/{resource}/edit', [CreateResourceController::class, 'edit'])->name('resources.edit'); // Esta ruta es para editar un recurso
    Route::put('/{resource}', [CreateResourceController::class, 'update'])->name('resources.update');
    Route::delete('/{resource}', [CreateResourceController::class, 'destroy'])->name('resources.destroy');
});