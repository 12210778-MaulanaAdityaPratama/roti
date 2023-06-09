<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
    protected $table = 'user';

    protected $fillable = [
        'username', 'password',
    ];

    // ...
}
