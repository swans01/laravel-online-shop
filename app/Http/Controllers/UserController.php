<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function ShowUser(){
        $users = User::all();
        return view('user', ['users' => $users]);
    }

    public function DeleteUser($user_id){
        $user = User::where('id', $user_id)->first();
        $user->delete();
        return redirect()->route('user');
    }
}
