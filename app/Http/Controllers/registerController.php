<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
   public  function show( Request $request){
     
        return view('signup');
    }

   public  $currentStep = 1;

//     function step1Handler(Request $request)
// {    $userSessionData = $request->session()->get('userRecord', []);
//     $currentStep = $request->input('currentStep');

   
//         $validatedData = $request->validate([
//             'username' => 'required|string',
//             'password' => 'required|string|min:8|same:confirmpassword',
//             'confirmpassword' => 'required|same:password',
//         ]);
       
//         $userSessionData = array_merge($userSessionData, $validatedData);
//         $request->session()->put('userRecord', $userSessionData);

//         $currentStep = 2;
       
//         return redirect()->route('register.show', ['currentStep' => 2]);
// }

// function step2Handler(Request $request){
//     $userSessionData = $request->session()->get('userRecord', []);
//     $validatedData = $request->validate([
//         'firstname' => 'required|string',
//         'lastname' => 'required|string',
//         'email' => 'required|email|unique:users,email',
//         'phone' => 'required|string',
//         'country' => 'required|string',
//         'currency' => 'required|string',
//     ]);
   
//     $userSessionData = array_merge($userSessionData, $validatedData);
//     $request->session()->put('userRecord', $userSessionData);
//     $currentStep = 3;
//     return redirect()->route('register.show', ['currentStep' => 3]);
// }


// function step3Handler(Request $request){
//     $userSessionData = $request->session()->get('userRecord', []);
//     $validatedData = $request->validate([
//         'city' => 'required|string',
//         'state' => 'required|string',
//         'zipcode' => 'required|',
        
//     ]);
    
//     // Merge the validated data into the user session data
//     $userSessionData = array_merge($userSessionData, $validatedData);
//     $request->session()->put('userRecord', $userSessionData);
    
//      DB::table('users')->insert($userSessionData);

//     $request->session()->forget('userRecord');

    
//     return redirect()->route('home');
// }





    function registerHandle(Request $request)
{
    
    
    
   
        $validatedData = $request->validate([
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:8|same:confirmpassword',
            'confirmpassword' => 'required|same:password',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string',
            'country' => 'required|string',
            'currency' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zipcode' => 'required|integer',
            
        ]);
       
       
         DB::table('users')->insert($validatedData);

      

        
        return redirect()->route('login.show');
    

   
}

}