<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;



Route::get('/', [GuestController::class, 'index'])->name('guest');
Route::post('/store', [GuestController::class, 'store'])->name('guest.store');

Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('createGuest', [HomeController::class, 'createGuest'])->name('createGuest');
    Route::post('storeGuest', [HomeController::class, 'storeGuest'])->name('storeGuest.store');
    Route::get('editStatus/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('editStatus.edit');
    Route::put('editStatus.update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('editStatus.update');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});