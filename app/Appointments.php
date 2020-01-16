<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected $fillable = [
        'maid_id','name', 'email', 'region', 'address','contact','service_cat_id','c_days','c_stay_hours','c_qty','c_material','c_date','c_from_time_slot','c_to_time_slot','c_instruction','pay_method','amount','status'
    ];
    
}
