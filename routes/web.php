<?php

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

//Route::get('/' , HomeController::class)->name('home');
//Route::get('/', [HomeController::class, 'home']);

Route::get('courses', 'index')->name('courses.index');

Route::get('courses/create', 'create')->name('courses.create');

Route::post('courses', 'store')->name('courses.store');

Route::get('courses/{course}', 'show')->name('courses.show');

Route::get('courses/{course}', 'edit')->name('courses.edit');

Route::put('courses/{course}', 'update')->name('courses.update');

Route::delete('courses/{course}', 'destroy')->name('courses.destroy');