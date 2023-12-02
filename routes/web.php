<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('services/buy/{slug}', function(Request $request, $slug){
    $service = DB::table('services')->where('slug', $slug)->first();
    if (!$service) {
        abort(404); 
    }
    return view('buyService', ['service' => $service]);
})->name('service.buy')->middleware('userAuth');
Route::get('services/{slug}', function(Request $request, $slug){
    $service = DB::table('services')->where('slug', $slug)->first();
    if (!$service) {
        abort(404); 
    }
    return view('singleService', ['service' => $service]);
})->name('service.show');

Route::get('/', function () {
    $services =DB::table('services')->get();
    
    return view('welcome',compact('services'));
})->name('home.show');



require __DIR__ . "/admin.php";
require __DIR__ . "/login.php";
require __DIR__ . "/signup.php";
