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

Route::get('/', function () {
    return view('welcome');
});

Route::controller();


Route::view('/', 'welcome')->name('home');

Route::view('/courses', 'index')->name('index');

Route::view('/courses', 'edit')->name('edit');

Route::view('/courses', 'show')->name('show');

Route::view('/courses', 'create')->name('create');