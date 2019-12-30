<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
   protected $fillable=['commentBody','BlogId','Email','fullName',];
}
