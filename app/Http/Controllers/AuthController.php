<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function SignIn(Request $request){
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            return redirect()->route('product');
        }
        return redirect()->back();
    }
}
