<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class loginController extends Controller
{
    function show(){
        return view('login');
    }
    function logout(Request $request){
        $request->session()->forget('user');
        return redirect()->route('home.show');
    }

public function loginHandle(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');
     $request->validate([
        'email'=>'required',
        'password'=>'required'
     ]);
    $user = DB::table('users')
        ->where('email', $email)
        ->first();
     
    if ($user && $user->password==$password) {
        $request->session()->put('user', $user);
        return redirect()->route('home.show');
    } else {
        
        return back()->withErrors(['email' => 'These credentials do not match our records.']);
    }
}

}
