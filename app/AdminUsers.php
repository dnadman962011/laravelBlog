<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUsers extends Model
{
    protected $fillable=['name'];




   protected $hidden = ['password'];
}
