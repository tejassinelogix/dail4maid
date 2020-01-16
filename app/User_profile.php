<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_profile extends Model
{
    //
     protected $fillable = ['id', 'name', 'email','contact','address','city','state','country','pin_code'];
}
