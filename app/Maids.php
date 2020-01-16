<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maids extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    
    protected $attributes = [
        'job_title' => 'Maid'
    ];

}

