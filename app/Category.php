<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $casts = [
    'category_name' => 'array',
    'category_slug' => 'array',
    'meta_title' => 'array',
    'meta_keyword' => 'array',
    'meta_description' => 'array',
    ];
    protected $fillable = ['category_name', 'category_slug','category_image','meta_title','meta_description','meta_keyword','parent_url'];
}
