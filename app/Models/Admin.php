<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password'];
}

// class Admin extends Authenticatable {
//     protected $fillable = ['name','email','password'];
//     protected $hidden = ['password'];
// }