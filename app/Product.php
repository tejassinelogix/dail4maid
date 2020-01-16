<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $casts = [
    'title' => 'array',
    'subtitle' => 'array',
    'product_price' => 'array',
    'body' => 'array',
    ];
    protected $fillable = ['image', 'title', 'subtitle', 'body', 'product_price'];
}
