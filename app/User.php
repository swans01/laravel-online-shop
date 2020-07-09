<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    use SoftDeletes;
    protected $dates =['deleted_at'];
}