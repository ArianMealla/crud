<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuario',[UserController::class, 'index'])->name('usuario.index');


Route::get('/usuario/create',[UserController::class, 'create'])->name('usuario.create');


Route::post('/usuario/create',[UserController::class, 'store'])->name('usuario.store');


Route::resource('users', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
