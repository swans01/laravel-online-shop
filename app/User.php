<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends Model implements Authenticatable
{
    public function selectUser(){
        $users = User::orderBy('created_at', 'desc')->get();
        return $users;
    }
    use \Illuminate\Auth\Authenticatable;
}