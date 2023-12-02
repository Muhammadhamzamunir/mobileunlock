<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
Route::get('login', [loginController::class,'show'])->name('login.show');
Route::post('login', [loginController::class,'loginHandle'])->name('login');
Route::get('logout',[loginController::class,'logout'])->name('logout');