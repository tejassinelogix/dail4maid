<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin_profile extends Model
{
    //
     protected $fillable = ['user_id', 'name', 'email','contact','address','city','state','country','pin_code'];
}