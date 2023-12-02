<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
Route::get('register',[registerController::class,"show"] )->name('register.show');
Route::post('register',[registerController::class,"registerHandle"] )->name('register');