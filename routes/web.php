<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistroController;

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [RegistroController::class, 'index'])->name('index');
Route::POST('/store', [RegistroController::class, 'store'])->name('confirmar.asistencia');


Route::get('/login', [SessionsController::class, 'create'])->name('login');
Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin.index');

            
    //