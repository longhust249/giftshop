<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillables = [
        'name', 'price', 'image', 'img_hover', 'product_type_id', 'product_thumb_id', 'description'
    ];
}
