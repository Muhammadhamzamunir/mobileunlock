<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;


Route::post('/rimsha_admin/servicegroup', [adminController::class, 'serviceGroup'])->name('addServiceGroup');
Route::get('/rimsha_admin/servicegroup', [adminController::class, 'showServiceGroup'])->name('servicegroup.show');
Route::post('/rimsha_admin/addServices', [adminController::class, 'store'])->name('addServices');
Route::post('/add-custom-field', [adminController::class, 'storeCustomField']);
Route::get('/rimsha_admin',[adminController::class, 'show'] )->name('admin.show');
Route::get('/rimsha_admin/addServices', [adminController::class, 'addServices'])->name('addServices.show');
Route::get('/rimsha_admin/allClients',[adminController::class, 'allClients'] )->name('allclients.show');