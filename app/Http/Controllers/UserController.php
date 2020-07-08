<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function ShowUser(){
        $users = new User;
        return view('user', ['users' => $users->selectUser()]);
    }
}
