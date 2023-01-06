<?php

namespace App\Http\Controllers\API;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request){
       try {
         // TODO: Validate request
         $request->validate([
            'email' => 'required|email',
            'password' => 'required',
         ]);

        // TODO: Find use by email
        // $credentials = request(['email', 'password']);
        // if(!Auth::attempt($credentials)){
        //     return Respon
        // }

        // TODO: Generate token
      


        // TODO: Return Response
       } catch (Exception $e) {
        //throw $th;
       }
       
  
    }
}
