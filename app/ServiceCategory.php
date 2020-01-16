<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    //
    protected $primaryKey = 'service_cat_id';
	protected $casts = [
    'service_cat_name' => 'array',
    'service_cat_description' => 'array',
    'service_cat_slug' => 'array',
    'meta_title' => 'array',
    'meta_keyword' => 'array',
    'meta_description' => 'array',
    ];
    protected $fillable = ['service_cat_name', 'service_cat_description', 'service_price', 'service_cat_slug','service_cat_image','meta_title','meta_description','meta_keyword','status'];
//protected $fillable = ['service_cat_name', 'service_price', 'service_cat_slug','service_cat_image','status'];

}
